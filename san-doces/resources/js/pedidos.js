const estadoEncomenda = {
    produtos: [],
    selecionadoId: null,
};

document.addEventListener('DOMContentLoaded', () => {
    carregarProdutosEncomenda();

    const form = document.querySelector('#formulario');
    if (!form) {
        return;
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const dados = {
            nome: document.querySelector('#nome')?.value.trim(),
            email: document.querySelector('#email')?.value.trim(),
            whatsapp: document.querySelector('#whatsapp')?.value.trim(),
            data_encomenda: document.querySelector('#data_encomenda')?.value,
            categoria: document.querySelector('#categoria')?.value,
            produto: document.querySelector('#produto')?.value.trim(),
            observacao: document.querySelector('#observacao')?.value.trim(),
        };

        try {
            const response = await fetch('/api/pedido_doces', {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(dados),
            });
            const resultado = await response.json();

            if (!response.ok || resultado.erro === 's') {
                throw new Error(resultado.mensagem || resultado.message || 'Nao foi possivel enviar o pedido.');
            }

            if (window.Swal) {
                await Swal.fire({
                    icon: 'success',
                    title: 'Pedido recebido!',
                    text: resultado.mensagem,
                });
            }

            form.reset();
            estadoEncomenda.selecionadoId = null;
            atualizarResumoSelecionado();
            document.querySelectorAll('.order-product-card').forEach((item) => item.classList.remove('selected'));
            window.open(resultado.whatsapp_url, '_blank');
        } catch (error) {
            if (window.Swal) {
                Swal.fire({ icon: 'error', title: 'Erro!', text: error.message });
            } else {
                alert(error.message);
            }
        }
    });
});

async function carregarProdutosEncomenda() {
    const container = document.querySelector('#order-products');
    const categorias = document.querySelector('#order-category-list');
    if (!container || !categorias) {
        return;
    }

    try {
        const response = await fetch('/api/cardapio', { headers: { Accept: 'application/json' } });
        const produtos = await response.json();

        if (!response.ok) {
            throw new Error('Nao foi possivel carregar os produtos.');
        }

        estadoEncomenda.produtos = Array.isArray(produtos) ? produtos : [];
        renderizarCategorias(estadoEncomenda.produtos, categorias, container);
        renderizarProdutos(estadoEncomenda.produtos, container);
        atualizarOpcoesFormulario(estadoEncomenda.produtos);
        selecionarProdutoDaUrl(estadoEncomenda.produtos, container);
    } catch (error) {
        container.innerHTML = `<p class="order-products-empty">${escapeHtml(error.message)}</p>`;
    }
}

function selecionarProdutoDaUrl(produtos, container) {
    const productId = new URLSearchParams(window.location.search).get('produto');
    if (!productId) {
        return;
    }

    const product = produtos.find((item) => String(item.id) === productId);
    const card = container.querySelector(`[data-product-id="${CSS.escape(productId)}"]`);
    if (!product || !card) {
        return;
    }

    estadoEncomenda.selecionadoId = product.id;
    document.querySelector('#categoria').value = product.categoria || '';
    document.querySelector('#produto').value = product.nome || '';
    card.classList.add('selected');
    atualizarResumoSelecionado(product);
    document.querySelector('#formulario')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function renderizarCategorias(produtos, categorias, container) {
    const nomes = [...new Set(produtos.map((produto) => produto.categoria).filter(Boolean))];
    categorias.innerHTML = [
        '<button class="category active" type="button" data-category="all">Todos &rsaquo;</button>',
        ...nomes.map((nome) => `<button class="category" type="button" data-category="${escapeHtml(nome)}">${escapeHtml(nome)} &rsaquo;</button>`),
    ].join('');

    categorias.querySelectorAll('.category').forEach((button) => {
        button.addEventListener('click', () => {
            categorias.querySelectorAll('.category').forEach((item) => item.classList.remove('active'));
            button.classList.add('active');
            const categoria = button.dataset.category;
            renderizarProdutos(
                categoria === 'all' ? produtos : produtos.filter((produto) => produto.categoria === categoria),
                container,
            );
        });
    });
}

function renderizarProdutos(produtos, container) {
    if (!produtos.length) {
        container.innerHTML = '<p class="order-products-empty">Nenhum produto cadastrado ainda.</p>';
        return;
    }

    container.innerHTML = produtos.map((produto) => `
        <article class="card order-product-card ${String(produto.id) === String(estadoEncomenda.selecionadoId) ? 'selected' : ''}" data-product-id="${produto.id}">
            <img src="${imagemProduto(produto)}" alt="${escapeHtml(produto.nome)}">
            <div>
                <small>${escapeHtml(produto.categoria || 'Cardapio')}</small>
                <b>${escapeHtml(produto.nome)}</b>
                <p>${escapeHtml(produto.sobre || produto.descricao || '')}</p>
                <strong>R$ ${Number(produto.preco || 0).toFixed(2).replace('.', ',')}</strong>
                <button class="order-select-button" type="button">Selecionar</button>
            </div>
        </article>
    `).join('');

    container.querySelectorAll('.order-product-card').forEach((card) => {
        card.addEventListener('click', () => {
            const produto = produtos.find((item) => String(item.id) === card.dataset.productId);
            if (!produto) {
                return;
            }

            document.querySelectorAll('.order-product-card').forEach((item) => item.classList.remove('selected'));
            card.classList.add('selected');
            estadoEncomenda.selecionadoId = produto.id;
            document.querySelector('#categoria').value = produto.categoria || '';
            document.querySelector('#produto').value = produto.nome || '';
            atualizarResumoSelecionado(produto);
        });
    });
}

function atualizarOpcoesFormulario(produtos) {
    const select = document.querySelector('#categoria');
    if (!select) {
        return;
    }

    const categorias = [...new Set(produtos.map((produto) => produto.categoria).filter(Boolean))];
    select.innerHTML = [
        '<option value="">Categoria do pedido *</option>',
        ...categorias.map((categoria) => `<option value="${escapeHtml(categoria)}">${escapeHtml(categoria)}</option>`),
    ].join('');
}

function atualizarResumoSelecionado(produto = null) {
    const summary = document.querySelector('#order-selected-summary');
    if (!summary) {
        return;
    }

    const escolhido = produto || estadoEncomenda.produtos.find((item) => String(item.id) === String(estadoEncomenda.selecionadoId));

    if (!escolhido) {
        summary.classList.remove('has-product');
        summary.querySelector('strong').textContent = 'Nenhum produto escolhido ainda';
        summary.querySelector('small').textContent = 'Clique em um produto do cardapio para preencher o pedido.';
        return;
    }

    summary.classList.add('has-product');
    summary.querySelector('strong').textContent = escolhido.nome || 'Produto selecionado';
    summary.querySelector('small').textContent = `${escolhido.categoria || 'Cardapio'} - R$ ${Number(escolhido.preco || 0).toFixed(2).replace('.', ',')}`;
}

function imagemProduto(produto) {
    if (produto.imagem) {
        return produto.imagem.startsWith('http') || produto.imagem.startsWith('/')
            ? produto.imagem
            : `/${produto.imagem}`;
    }

    return '/assets/images/bolo-morango.jpg';
}

function escapeHtml(value) {
    return String(value ?? '').replace(/[&<>"']/g, (char) => ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;',
    }[char]));
}
