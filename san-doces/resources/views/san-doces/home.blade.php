<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Doces | Doceria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&family=Sacramento&display=swap"
        rel="stylesheet">
    @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js'])
</head>

<body id="top">
      <header class="site-header">
        <div class="container topbar"><a class="brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a>
            <nav class="main-nav"><a class="active" href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a
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
        <section id="inicio" class="hero">
            <div class="container hero-inner">
                <div class="eyebrow">Doces feitos para</div>
                <h1>momentos especiais ♡</h1>
                <p>Bolos, doces, sobremesas e muito mais para adoçar o seu dia!</p>
                <div class="hero-actions"><a class="button" href="{{ route('san-doces.produtos') }}">Conheça nossos produtos&nbsp; →</a><a
                        class="button outline" href="{{ route('san-doces.encomendas') }}">Fazer encomenda</a></div>
            </div>
        </section>
        <div class="page-content">
        <section id="produtos" class="container">
            <div class="section-title">
                <div class="eyebrow">Nossos queridinhos</div>
                <h2>Produtos em destaque</h2>
                <div class="flourish">— ♡ —</div>
            </div>

            <div class="products">
                <article class="card"><img src="{{ asset('assets/images/bolo-morango.jpg') }}" alt="Bolo de morangos">
                    <div class="card-bottom">
                        <h3>Bolos</h3>
                        <p>Dos clássicos aos personalizados, para todas as ocasiões.</p><b class="circle-arrow">→</b>
                    </div>
                </article>
                <article class="card"><img src="{{ asset('assets/images/brigadeiros.jpg') }}" alt="Doces variados">
                    <div class="card-bottom">
                        <h3>Doces</h3>
                        <p>Brigadeiros, bombons e muito mais.</p><b class="circle-arrow">→</b>
                    </div>
                </article>
                <article class="card"><img src="{{ asset('assets/images/copos-chocolate-morango.jpg') }}" alt="Sobremesas em taças">
                    <div class="card-bottom">
                        <h3>Sobremesas</h3>
                        <p>Taças, copos e delícias irresistíveis.</p><b class="circle-arrow">→</b>
                    </div>
                </article>
                <article class="card"><img src="{{ asset('assets/images/torta-banana.jpg') }}" alt="Bolo personalizado">
                    <div class="card-bottom">
                        <h3>Bolos Personalizados</h3>
                        <p>Seu momento do seu jeito, com todo o carinho.</p><b class="circle-arrow">→</b>
                    </div>
                </article>
            </div>
        </section>
        <section id="sobre" class="story-section">
            <div class="story">
                <div class="story-photo"></div>
                <div class="story-copy">
                    <div class="eyebrow">Sobre nós</div>
                    <h2>Mais que doces,<br>momentos especiais.</h2>
                    <p>Na San Doces, cada produto é preparado com cuidado, utilizando ingredientes de qualidade e muito
                        carinho, para levar sabor e alegria para a sua vida.</p><a class="button"
                        href="{{ route('san-doces.sobre-nos') }}">Conheça nossa história&nbsp; →</a>
                </div>
            </div>
        </section>
        <section id="encomendas" class="order">
            <div class="container order-inner">
                <div>
                    <div class="eyebrow" style="color:#fff">Vai comemorar?</div>
                    <h2>Encomende seus doces</h2>
                    <p>Deixe seu momento ainda mais doce e especial<br>com a San Doces.</p><a class="button light"
                        href="{{ route('san-doces.encomendas') }}">◉ &nbsp; Montar minha encomenda</a>
                </div>
                <div class="occasions">
                    <div class="occasion"><img src="{{ asset('assets/images/bolo-de-aniversario.png') }}" alt="Ícone de bolo">Aniversários</div>
                    <div class="occasion"><img src="{{ asset('assets/images/casal-de-noivos.png') }}" alt="Ícone de casamento">Casamentos</div>
                    <div class="occasion"><img src="{{ asset('assets/images/evento.png') }}" alt="Ícone de evento">Eventos</div>
                    <div class="occasion"><span>♡</span>Datas<br>especiais</div>
                    <div class="occasion"><img src="{{ asset('assets/images/cha.png') }}" alt="Ícone de chá">Café da tarde</div>
                </div>
            </div>
        </section>
        <section class="container social">
            <div class="instagram">
                <div class="eyebrow">◎</div>
                <h2>Siga a San Doces</h2>
                <p>Confira nossos doces, novidades e muito mais no nosso Instagram!</p><a class="button"
                    href="#">Acompanhar no Instagram&nbsp; →</a>
            </div>
            <div class="gallery"><img
                    src="https://images.unsplash.com/photo-1558636508-e0db3814bd1d?auto=format&fit=crop&w=350&q=80"
                    alt="Bolo"><img
                    src="https://images.unsplash.com/photo-1488477181946-6428a0291777?auto=format&fit=crop&w=350&q=80"
                    alt="Taças de doce"><img
                    src="https://instadelivery-public.nyc3.cdn.digitaloceanspaces.com/groups/17683664776967218ddb73c.jpeg"
                    alt="Brigadeiros"><img
                    src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=350&q=80"
                    alt="Bolo recheado"></div>
        </section>
        <section class="testimonials">
            <div class="container">
                <div class="section-title">
                    <div class="eyebrow">Depoimentos</div>
                    <h2>O que nossos clientes dizem</h2>
                    <div class="flourish">— ♡ —</div>
                </div>
                <div class="reviews">
                    <article class="review">
                        <div class="stars">★★★★★</div>
                        <span class="review-author">Jorge Paes</span>
                        <span class="review-date">Avaliação publicada há 5 anos</span>
                        <p>“Sempre pontual. Atendimento excelente, qualidade além do esperado e ambiente de preparo bem organizado. Conheci a área interna. Parabéns, continue assim.”</p>
                    </article>
                    <article class="review">
                        <div class="stars">★★★★★</div>
                        <span class="review-author">Moka#13</span>
                        <span class="review-date">Local Guide · avaliação publicada há 5 anos</span>
                        <p>“Super recomendo! Ótimos lanches e cada vez melhorando mais para agradar o paladar de seus clientes.”</p>
                    </article>
                    <article class="review">
                        <div class="stars">★★★★★</div>
                        <span class="review-author">Vanderley Sobrinho</span>
                        <span class="review-date">Avaliação publicada há 2 anos</span>
                        <p>“Fantástico, sou cliente de longa data. Lanche muito bom e excelente atendimento.”</p>
                        <div class="review-scores">Comida: 5 &nbsp;·&nbsp; Serviço: 5 &nbsp;·&nbsp; Ambiente: 5</div>
                    </article>
                </div>
            </div>
        </section>
        <section class="container visit">
            <div class="visit-text">
                <div class="eyebrow" style="color:#fff">Venha nos visitar</div>
                <h2>Estamos te esperando! ♡</h2>
                <p>Nossa loja física está localizada em Tatuí - SP. Venha conhecer de perto nossos doces e se encantar
                    com cada detalhe!</p><a class="button" href="https://maps.app.goo.gl/aGw49bdpHnLDqECd8"
                    target="_blank" rel="noopener">⌖　Ver no mapa　→</a>
            </div>
            <div class="map"><iframe title="Mapa San Doce Doceria em Tatuí"
                    src="https://www.google.com/maps?q=San%20Doce%20Doceria%20Tatui%20SP&output=embed"
                    loading="lazy"></iframe></div>
        </section>
        </div>
    </main>
    <footer class="sd-footer"><div class="sd-footer-main"><div class="sd-footer-intro"><a class="sd-footer-brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a><p>Doces artesanais feitos com carinho para tornar cada momento ainda mais especial.</p></div><div><h4>Navegação</h4><nav class="sd-footer-links" aria-label="Navegação do rodapé"><a href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a href="{{ route('san-doces.sobre-nos') }}">Sobre nós</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a href="{{ route('san-doces.contato') }}">Contato</a></nav></div><div class="sd-footer-contact"><h4>Fale conosco</h4><p>(15) 99144-4740</p><p>@sandoces_confeitaria</p><p>Tatuí — SP</p></div><div class="sd-footer-contact"><h4>Horário</h4><p>Segunda a sábado</p><p>Das 14:30 às 23:30</p><a class="sd-footer-cta" href="https://wa.me/5515991444740" target="_blank" rel="noopener">Fazer pedido pelo WhatsApp →</a></div></div><div class="sd-footer-bottom"><span>© 2026 San Doces. Todos os direitos reservados.</span><span>Doces que tornam a vida mais doce! ♡</span><span>Desenvolvido por <a href="https://brasildash.com.br" target="_blank" rel="noopener noreferrer">Brasildash</a></span><a href="#top">Voltar ao topo ↑</a></div></footer>
</body>

</html>

