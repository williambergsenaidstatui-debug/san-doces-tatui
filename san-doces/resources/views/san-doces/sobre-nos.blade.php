<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | San Doces</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&family=Sacramento&display=swap"
        rel="stylesheet">
    @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js'])
</head>

<body id="top" class="about-page">
     <header class="site-header">
        <div class="container topbar"><a class="brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a>
            <nav class="main-nav"><a href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a
                    class="active" href="{{ route('san-doces.sobre-nos') }}">Sobre Nós</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a
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
        <section class="about-hero">
            <div class="container hero-content">
                <div class="eyebrow">Sobre nós</div>
                <h1>Mais que doces,<br>é sobre pessoas ♡</h1>
                <p>A San Doce é uma confeitaria feita com amor, onde cada doce carrega um pouco do nosso carinho e
                    dedicação. Aqui, acreditamos que o doce tem o poder de adoçar a vida e tornar cada momento ainda
                    mais especial.</p>
            </div>
        </section>
        <div class="scroll-content">
        <section class="container about-grid">
            <div class="photo-collage">
                <div class="mini-photo"><img src="{{ asset('assets/images/brigadeiros.jpg') }}" alt="Doces artesanais"></div>
            </div>
            <div class="essence">
                <div class="eyebrow">Nossa essência</div>
                <h2>Doces gourmet<br>feitos manualmente ♡</h2>
                <p>Somos uma confeitaria especializada em doces gourmet, como brigadeiro no copo, pudins, tortas, bolos
                    e muito mais. Tudo é feito de forma artesanal, com ingredientes de qualidade e muito carinho, do
                    nosso jeito, para o seu jeito.</p>
                <div class="values">
                    <div class="value"><b>♨</b>Produção<br>artesanal</div>
                    <div class="value"><b>♡</b>Ingredientes<br>de qualidade</div>
                    <div class="value"><b>☆</b>Sabor e<br>carinho</div>
                    <div class="value"><b>♧</b>Doces para<br>toda ocasião</div>
                </div>
            </div>
        </section>
        <section class="container story">
            <div>
                <div class="eyebrow">Nossa história</div>
                <h2>Um sonho que<br>virou doce realidade ♡</h2>
                <p>A San Doce nasceu da paixão por confeitaria e do desejo de compartilhar sabores que fazem bem. Cada
                    receita é preparada com dedicação, de forma artesanal, para que você sinta todo o carinho em cada
                    mordida.</p>
                <div class="script">Aqui, o doce é sempre<br>uma boa ideia! ♡</div>
            </div>
            <div class="story-photo" aria-label="Sobremesas San Doces"></div>
        </section>
        <section id="contato" class="container contact-box">
            <div class="contact-info">
                <div class="eyebrow">Informações</div>
                <p><strong>◎ &nbsp; @sandoces_confeitaria</strong><br>Siga nosso Instagram e acompanhe novidades e fotos
                    dos nossos doces!</p>
                <p><strong>⌖ &nbsp; Tatuí, SP</strong><br>Estamos localizados em Tatuí - SP. Venha nos visitar!</p>
                <p><strong>◉ &nbsp; (15) 99144-4740</strong><br>Tire suas dúvidas ou faça seu pedido pelo WhatsApp.</p>
                <div class="hours">◷ &nbsp; HORÁRIO DE FUNCIONAMENTO<b>Segunda à Sábado<br>Das 14:30 às 23:30</b></div>
                <br><a class="button" href="https://wa.me/5515991444740">◉ &nbsp; Fazer pedido pelo WhatsApp →</a>
            </div>
            <div class="contact-photo"></div>
        </section>
        </div>
    </main>
    <footer class="sd-footer"><div class="sd-footer-main"><div class="sd-footer-intro"><a class="sd-footer-brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a><p>Doces artesanais feitos com carinho para tornar cada momento ainda mais especial.</p></div><div><h4>Navegação</h4><nav class="sd-footer-links" aria-label="Navegação do rodapé"><a href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a href="{{ route('san-doces.sobre-nos') }}">Sobre nós</a><a href="{{ route('san-doces.encomendas') }}">Encomendas</a><a href="{{ route('san-doces.contato') }}">Contato</a></nav></div><div class="sd-footer-contact"><h4>Fale conosco</h4><p>(15) 99144-4740</p><p>@sandoces_confeitaria</p><p>Tatuí — SP</p></div><div class="sd-footer-contact"><h4>Horário</h4><p>Segunda a sábado</p><p>Das 14:30 às 23:30</p><a class="sd-footer-cta" href="https://wa.me/5515991444740" target="_blank" rel="noopener">Fazer pedido pelo WhatsApp →</a></div></div><div class="sd-footer-bottom"><span>© 2026 San Doces. Todos os direitos reservados.</span><span>Doces que tornam a vida mais doce! ♡</span><span>Desenvolvido por <a href="https://brasildash.com.br" target="_blank" rel="noopener noreferrer">Brasildash</a></span><a href="#top">Voltar ao topo ↑</a></div></footer>
</body>

</html>

