<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encomendas | San Doces</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&family=Sacramento&display=swap"
    rel="stylesheet">
  @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js', 'resources/js/pedidos.js'])
</head>

<body id="top" class="orders-page">
    @include('san-doces.navigation')
  <main>
    <section class="hero">
      <div class="container">
        <div class="eyebrow">Encomendas</div>
        <h1>Seu momento<br>mais doce começa<br>aqui! ♡</h1>
        <p>Faça sua encomenda e deixe cada ocasião ainda mais especial com os nossos doces gourmet!</p>
       
      </div>
    </section>
    <div class="scroll-content">
    <section class="container steps">
      <div class="title">Como fazer sua encomenda?　♡</div>
      <div class="steps-grid">
        <article class="step"><b>1</b>
          <h3>Escolha os produtos</h3>
          <p>Veja nosso cardápio e selecione o que deseja.</p>
        </article>
        <article class="step"><b>2</b>
          <h3>Entre em contato</h3>
          <p>Nos chame pelo WhatsApp para confirmar sua encomenda.</p>
        </article>
        <article class="step"><b>3</b>
          <h3>Combinamos os detalhes</h3>
          <p>Data, horário e forma de pagamento.</p>
        </article>
        <article class="step"><b>4</b>
          <h3>Seu pedido é preparado</h3>
          <p>Tudo feito com muito amor e carinho!</p>
        </article>
      </div>
    </section>
    <section class="container order-area">
      <div class="products">
        <h2>Nossos produtos　♡</h2>
        <p>Escolha a categoria e veja todas as opções disponíveis.</p>
        <div class="selection">
          <div id="order-category-list" class="category-list">
            <button class="category active" type="button" data-category="all">Todos &rsaquo;</button>
          </div>
          <div id="order-products" class="cards">
            <p class="order-products-empty">Carregando produtos...</p>
          </div>
        </div>
      </div>
      <form id="formulario" class="form">
        <div class="eyebrow">♨ &nbsp; Faça sua encomenda</div>
        <h2>Conte com a San Doces</h2>
        <p>Preencha o formulário abaixo e nos conte o que você deseja. Vamos adorar preparar algo especial para você!
        </p>
        <div id="order-selected-summary" class="order-selected-summary">
          <span>Produto selecionado</span>
          <strong>Nenhum produto escolhido ainda</strong>
          <small>Clique em um produto do cardápio para preencher o pedido.</small>
        </div>
        <div class="order-form-fields">
        <label for="nome">Nome completo *</label>
        <input id="nome" name="nome" autocomplete="name" required placeholder="Como podemos te chamar?">
        <label for="whatsapp">WhatsApp *</label>
        <input id="whatsapp" name="whatsapp" type="tel" inputmode="tel" autocomplete="tel" required placeholder="(15) 99999-9999">
        <label for="email">E-mail *</label>
        <input id="email" name="email" type="email" autocomplete="email" required placeholder="voce@exemplo.com">
        <label for="data_encomenda">Data da encomenda *</label>
        <input id="data_encomenda" name="data_encomenda" type="date" required>
        <label for="categoria">Categoria do pedido *</label>
        <select id="categoria" name="categoria" required>
          <option value="">Categoria do pedido *</option>
          <option>Bolos</option>
          <option>Doces</option>
          <option>Sobremesas</option>
          <option>Bolos personalizados</option>
        </select>
        <label for="produto">Produto desejado *</label>
        <input id="produto" name="produto" required placeholder="Selecione acima ou descreva seu pedido">
        <label for="observacao">Observações <span>(opcional)</span></label>
        <textarea id="observacao" name="observacao" placeholder="Conte sobre sabores, quantidades ou detalhes da ocasião..."></textarea>
        </div>
        <button
          class="button" type="submit">◉ &nbsp; Enviar pedido pelo WhatsApp</button>
        <div class="secure">♙ &nbsp; Seus dados estão seguros conosco.<br>&nbsp;&nbsp;&nbsp;&nbsp; Não compartilhamos
          suas informações.</div>
      </form>
    </section>
    <section class="container celebrate">
      <h2>Vai comemorar? ♡</h2>
      <p>Temos opções especiais para aniversários, casamentos, eventos, datas especiais e para aquele café da tarde
        perfeito!</p><a class="button" href="{{ route('san-doces.produtos') }}">Ver opções de encomendas　→</a>
       <div class="celebrate-items">
                    <div class="occasion"><img src="{{ asset('assets/images/bolo-de-aniversario.png') }}" alt="Ícone de bolo">Aniversários</div>
                    <div class="occasion"><img src="{{ asset('assets/images/casal-de-noivos.png') }}" alt="Ícone de casamento">Casamentos</div>
                    <div class="occasion"><img src="{{ asset('assets/images/evento.png') }}" alt="Ícone de evento">Eventos</div>
                    <div class="occasion"><span>♡</span>Datas<br>especiais</div>
                    <div class="occasion"><img src="{{ asset('assets/images/cha.png') }}" alt="Ícone de chá">Café da tarde</div>
                </div>
    </section>
    </div>
  </main>
  <footer class="sd-footer"><div class="sd-footer-main"><div class="sd-footer-intro"><a class="sd-footer-brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a><p>Doces artesanais feitos com carinho para tornar cada momento ainda mais especial.</p></div><div><h4>Navegação</h4><nav class="sd-footer-links" aria-label="Navegação do rodapé"><a href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a href="{{ route('san-doces.sobre-nos') }}">Sobre nós</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a href="{{ route('san-doces.contato') }}">Contato</a></nav></div><div class="sd-footer-contact"><h4>Fale conosco</h4><p>(15) 99144-4740</p><p>@sandoces_confeitaria</p><p>Tatuí — SP</p></div><div class="sd-footer-contact"><h4>Horário</h4><p>Segunda a sábado</p><p>Das 14:30 às 23:30</p><a class="sd-footer-cta" href="https://wa.me/5515991444740" target="_blank" rel="noopener">Fazer pedido pelo WhatsApp →</a></div></div><div class="sd-footer-bottom"><span>© 2026 San Doces. Todos os direitos reservados.</span><span>Doces que tornam a vida mais doce! ♡</span><span>Desenvolvido por <a href="https://brasildash.com.br" target="_blank" rel="noopener noreferrer">Brasildash</a></span><a href="#top">Voltar ao topo ↑</a></div></footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>

</html>
