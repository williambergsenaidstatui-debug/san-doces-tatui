<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | San Doces</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&family=Sacramento&display=swap" rel="stylesheet">
    @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js', 'resources/js/produtos.js'])
</head>
<body id="top" class="products-page">
    <header class="site-header">
        <div class="container topbar">
            <a class="brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a>
            <nav class="main-nav">
                <a href="{{ route('san-doces.home') }}">Inicio</a>
                <a class="active" href="{{ route('san-doces.produtos') }}">Produtos</a>
                <a href="{{ route('san-doces.sobre-nos') }}">Sobre Nos</a>
                <a href="{{ route('san-doces.encomendas') }}">Encomendas</a>
                <a href="{{ route('san-doces.contato') }}">Contato</a>
            </nav>
            <a class="main-btn" href="{{ route('san-doces.encomendas') }}">
                <svg class="icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20.5 3.5A10.8 10.8 0 0 0 12.9 1C7 1 2.2 5.8 2.2 11.7c0 1.9.5 3.7 1.4 5.3L2 23l6.2-1.6a10.7 10.7 0 0 0 4.7 1.1h.1c5.9 0 10.7-4.8 10.7-10.7 0-2.9-1.1-5.6-3.2-7.7Z" />
                    <path d="M8 6.8c.2-.4.4-.4.7-.4h.6c.2 0 .4.1.5.4l1 2.3c.1.3.1.5-.1.7l-.7.8c-.1.1-.1.3 0 .4.5 1 1.3 1.9 2.3 2.4.2.1.3.1.5 0l.8-.9c.2-.2.4-.2.7-.1l2.1 1c.3.1.4.3.4.5 0 .4-.2 1.3-.6 1.7-.4.4-1 .6-1.7.5-1.1-.2-2.5-.8-4.2-2.4-1.3-1.2-2.2-2.7-2.4-4.1-.1-.7.1-1.3.5-1.8Z" />
                </svg>
                Fazer pedido
            </a>
        </div>
    </header>
    <main>
        <section class="catalog-hero">
            <div class="container">
                <div class="overline">Nosso cardapio</div>
                <h1>Doces que tornam<br>a vida mais doce ♡</h1>
                <p>Aqui voce encontra bolos, doces, sobremesas e muito mais, tudo feito com ingredientes de qualidade e muito carinho.</p>
            </div>
        </section>
        <div class="scroll-content">
            <div class="container catalog">
                <aside id="catalog-categories" class="sidebar" aria-label="Categorias de produtos">
                    <button class="category active" type="button" data-category="all"><span class="category-icon">▦</span><span>Todos os produtos</span></button>
                    <div class="love-note">Feito<br>com<br>amor ♡</div>
                </aside>
                <section class="product-content">
                    <div class="catalog-head">
                        <h2>Nossos Produtos — ♡</h2>
                        <label class="search"><input id="catalog-search" type="search" placeholder="Buscar produto..." autocomplete="off"><span aria-hidden="true">⌕</span></label>
                    </div>
                    <div id="catalog-products" aria-live="polite"><div class="catalog-empty">Carregando produtos...</div></div>
                </section>
            </div>
        </div>
    </main>
    <footer class="sd-footer">
        <div class="sd-footer-main">
            <div class="sd-footer-intro"><a class="sd-footer-brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a><p>Doces artesanais feitos com carinho para tornar cada momento ainda mais especial.</p></div>
            <div><h4>Navegacao</h4><nav class="sd-footer-links" aria-label="Navegacao do rodape"><a href="{{ route('san-doces.home') }}">Inicio</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a href="{{ route('san-doces.sobre-nos') }}">Sobre nos</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a href="{{ route('san-doces.contato') }}">Contato</a></nav></div>
            <div class="sd-footer-contact"><h4>Fale conosco</h4><p>(15) 99144-4740</p><p>@sandoces_confeitaria</p><p>Tatui - SP</p></div>
            <div class="sd-footer-contact"><h4>Horario</h4><p>Segunda a sabado</p><p>Das 14:30 as 23:30</p><a class="sd-footer-cta" href="https://wa.me/5515991444740" target="_blank" rel="noopener">Fazer pedido pelo WhatsApp →</a></div>
        </div>
        <div class="sd-footer-bottom"><span>© 2026 San Doces. Todos os direitos reservados.</span><span>Doces que tornam a vida mais doce! ♡</span><span>Desenvolvido por <a href="https://brasildash.com.br" target="_blank" rel="noopener noreferrer">Brasildash</a></span><a href="#top">Voltar ao topo ↑</a></div>
    </footer>
</body>
</html>
