<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | San Doces</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&family=Sacramento&display=swap"
        rel="stylesheet">
    @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js'])
</head>

<body id="top" class="products-page">
    <header class="site-header">
        <div class="container topbar"><a class="brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a>
            <nav class="main-nav"><a href="{{ route('san-doces.home') }}">Início</a><a class="active" href="{{ route('san-doces.produtos') }}">Produtos</a><a
                    href="{{ route('san-doces.sobre-nos') }}">Sobre Nós</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a
                    href="{{ route('san-doces.contato') }}">Contato</a></nav><a class="main-btn" href="{{ route('san-doces.encomendas') }}"><svg class="icon"
                    viewBox="0 0 24 24">
                    <path
                        d="M20.5 3.5A10.8 10.8 0 0 0 12.9 1C7 1 2.2 5.8 2.2 11.7c0 1.9.5 3.7 1.4 5.3L2 23l6.2-1.6a10.7 10.7 0 0 0 4.7 1.1h.1c5.9 0 10.7-4.8 10.7-10.7 0-2.9-1.1-5.6-3.2-7.7Z" />
                    <path
                        d="M8 6.8c.2-.4.4-.4.7-.4h.6c.2 0 .4.1.5.4l1 2.3c.1.3.1.5-.1.7l-.7.8c-.1.1-.1.3 0 .4.5 1 1.3 1.9 2.3 2.4.2.1.3.1.5 0l.8-.9c.2-.2.4-.2.7-.1l2.1 1c.3.1.4.3.4.5 0 .4-.2 1.3-.6 1.7-.4.4-1 .6-1.7.5-1.1-.2-2.5-.8-4.2-2.4-1.3-1.2-2.2-2.7-2.4-4.1-.1-.7.1-1.3.5-1.8Z" />
                </svg>Fazer pedido</a>
        </div>
    </header>
    <main>
        <section class="catalog-hero">
            <div class="container">
                <div class="overline">Nosso cardápio</div>
                <h1>Doces que tornam<br>a vida mais doce ♡</h1>
                <p>Aqui você encontra bolos, doces, sobremesas e muito mais, tudo feito com ingredientes de qualidade e
                    muito carinho.</p>
            </div>
        </section>
        <div class="scroll-content">
        <div class="container catalog">
            <aside class="sidebar" aria-label="Categorias">
                <div class="category active" data-category="all"><span class="category-icon">▦</span>Todos os produtos
                </div>
                <div class="category" data-category="bolos"><span class="category-icon">🎂</span>
                    <div>Bolos<small>Bolos tradicionais<br>e personalizados</small></div>
                </div>
                <div class="category" data-category="doces"><span class="category-icon">🧁</span>
                    <div>Doces<small>Brigadeiros, bombons<br>e muito mais</small></div>
                </div>
                <div class="category" data-category="sobremesas"><span class="category-icon">🍨</span>
                    <div>Sobremesas<small>Taças, copos e doces<br>irresistíveis</small></div>
                </div>
                <div class="category" data-category="personalizados"><span class="category-icon">♕</span>
                    <div>Bolos Personalizados<small>Do seu jeito,<br>com todo o carinho</small></div>
                </div>
                <div class="love-note">Feito<br>com<br>amor ♡</div>
            </aside>
            
            <section class="product-content">
                
                <div class="catalog-head">
                    <h2>Nossos Produtos　— ♡</h2><label class="search"><input id="search" type="search"
                            placeholder="Buscar produto..."><span>⌕</span></label>
                </div>
                <div class="product-group" data-group="bolos">
                    <div class="group-title">
                        <h3>Bolos</h3><a href="#">Ver todos　→</a>
                    </div>
                    <div class="card-grid">
                        <article class="product-card" data-name="Bolo de Morango">
                            <div class="product-image"><img src="{{ asset('assets/images/bolo-morango.jpg') }}"
                                    alt="Bolo de Morango"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo de Morango</h4>
                                <p>Massa fofinha, creme artesanal e morangos frescos.</p>
                                <div class="price">R$ 85,00 <small>(aprox. 1kg)</small></div><a class="details"
                                    href="#">Ver detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bolo de Chocolate">
                            <div class="product-image"><img src="{{ asset('assets/images/cardapio-doces.jpg') }}"
                                    alt="Bolo de Chocolate"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo de Chocolate</h4>
                                <p>Massa de chocolate, recheio cremoso e cobertura especial.</p>
                                <div class="price">R$ 78,00 <small>(aprox. 1kg)</small></div><a class="details"
                                    href="#">Ver detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bolo de Banana">
                            <div class="product-image"><img src="{{ asset('assets/images/torta-banana.jpg') }}" alt="Bolo de Banana"><b
                                    class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo de Banana</h4>
                                <p>Massa macia, creme de banana e toque de canela.</p>
                                <div class="price">R$ 72,00 <small>(aprox. 1kg)</small></div><a class="details"
                                    href="#">Ver detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bolo Personalizado">
                            <div class="product-image"><img src="{{ asset('assets/images/torta-limao.jpg') }}"
                                    alt="Bolo Personalizado"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo Personalizado</h4>
                                <p>Do seu jeito, com todo o carinho para sua ocasião.</p>
                                <div class="price">A partir de R$ 100,00</div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="product-group" data-group="doces">
                    <div class="group-title">
                        <h3>Doces</h3><a href="#">Ver todos　→</a>
                    </div>
                    <div class="card-grid">
                        <article class="product-card" data-name="Brigadeiro Gourmet">
                            <div class="product-image"><img src="{{ asset('assets/images/brigadeiros.jpg') }}" alt="Brigadeiros"><b
                                    class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Brigadeiro Gourmet</h4>
                                <p>O clássico que nunca sai de moda.</p>
                                <div class="price">R$ 5,00 <small>(unidade)</small></div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Brigadeiro de Morango">
                            <div class="product-image"><img src="{{ asset('assets/images/brigadeiros.jpg') }}"
                                    alt="Brigadeiro de Morango"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Brigadeiro de Morango</h4>
                                <p>Sabor marcante e irresistível.</p>
                                <div class="price">R$ 5,50 <small>(unidade)</small></div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Ferrero Rocher">
                            <div class="product-image"><img src="{{ asset('assets/images/copos-diversos.jpg') }}"
                                    alt="Bombom Ferrero"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Ferrero Rocher</h4>
                                <p>Crocante por fora, cremoso por dentro.</p>
                                <div class="price">R$ 6,00 <small>(unidade)</small></div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bombom de Morango">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1606312619070-d48b4c652a52?auto=format&fit=crop&w=500&q=80"
                                    alt="Bombom de Morango"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bombom de Morango</h4>
                                <p>Morango envolto em chocolate.</p>
                                <div class="price">R$ 6,50 <small>(unidade)</small></div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="product-group" data-group="sobremesas">
                    <div class="group-title">
                        <h3>Sobremesas</h3><a href="#">Ver todos　→</a>
                    </div>
                    <div class="card-grid">
                        <article class="product-card" data-name="Taça de Chocolate">
                            <div class="product-image"><img src="{{ asset('assets/images/copos-chocolate-morango.jpg') }}"
                                    alt="Taça de Chocolate"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Taça de Chocolate</h4>
                                <p>Camadas de puro sabor.</p>
                                <div class="price">R$ 16,00 <small>(unidade)</small></div><a class="details"
                                    href="#">Ver detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Taça de Morango">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1533134242443-d4fd215305ad?auto=format&fit=crop&w=500&q=80"
                                    alt="Taça de Morango"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Taça de Morango</h4>
                                <p>Creme, morangos e muito carinho.</p>
                                <div class="price">R$ 16,00 <small>(unidade)</small></div><a class="details"
                                    href="#">Ver detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Pavê">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?auto=format&fit=crop&w=500&q=80"
                                    alt="Pavê"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Pavê</h4>
                                <p>A combinação perfeita de sabores.</p>
                                <div class="price">R$ 18,00 <small>(unidade)</small></div><a class="details"
                                    href="#">Ver detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Torta de Banana">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=500&q=80"
                                    alt="Torta de Banana"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Torta de Banana</h4>
                                <p>Cremosa, doce na medida certa.</p>
                                <div class="price">R$ 8,00 <small>(fatia)</small></div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="product-group" data-group="personalizados">
                    <div class="group-title">
                        <h3>Bolos Personalizados</h3><a href="#">Ver todos　→</a>
                    </div>
                    <div class="card-grid">
                        <article class="product-card" data-name="Bolo de Aniversário">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&w=500&q=80"
                                    alt="Bolo de Aniversário"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo de Aniversário</h4>
                                <p>Do seu jeito, para o seu momento.</p>
                                <div class="price">A partir de R$ 100,00</div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bolo de Casamento">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?auto=format&fit=crop&w=500&q=80"
                                    alt="Bolo de Casamento"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo de Casamento</h4>
                                <p>Elegância e sabor em cada detalhe.</p>
                                <div class="price">A partir de R$ 150,00</div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bolo Infantil">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1558301211-0d8c8ddee6ec?auto=format&fit=crop&w=500&q=80"
                                    alt="Bolo Infantil"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo Infantil</h4>
                                <p>Diversão e sabor para os pequenos.</p>
                                <div class="price">A partir de R$ 120,00</div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                        <article class="product-card" data-name="Bolo Temático">
                            <div class="product-image"><img
                                    src="https://images.unsplash.com/photo-1557308536-ee471ef2c390?auto=format&fit=crop&w=500&q=80"
                                    alt="Bolo Temático"><b class="heart">♡</b></div>
                            <div class="product-info">
                                <h4>Bolo Temático</h4>
                                <p>Personalize com o tema que quiser.</p>
                                <div class="price">A partir de R$ 130,00</div><a class="details" href="#">Ver
                                    detalhes　→</a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        </div>
        
    </main>
    <footer class="sd-footer"><div class="sd-footer-main"><div class="sd-footer-intro"><a class="sd-footer-brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a><p>Doces artesanais feitos com carinho para tornar cada momento ainda mais especial.</p></div><div><h4>Navegação</h4><nav class="sd-footer-links" aria-label="Navegação do rodapé"><a href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a href="{{ route('san-doces.sobre-nos') }}">Sobre nós</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a href="{{ route('san-doces.contato') }}">Contato</a></nav></div><div class="sd-footer-contact"><h4>Fale conosco</h4><p>(15) 99144-4740</p><p>@sandoces_confeitaria</p><p>Tatuí — SP</p></div><div class="sd-footer-contact"><h4>Horário</h4><p>Segunda a sábado</p><p>Das 14:30 às 23:30</p><a class="sd-footer-cta" href="https://wa.me/5515991444740" target="_blank" rel="noopener">Fazer pedido pelo WhatsApp →</a></div></div><div class="sd-footer-bottom"><span>© 2026 San Doces. Todos os direitos reservados.</span><span>Doces que tornam a vida mais doce! ♡</span><span>Desenvolvido por <a href="https://brasildash.com.br" target="_blank" rel="noopener noreferrer">Brasildash</a></span><a href="#top">Voltar ao topo ↑</a></div></footer>
    </body>

</html>

