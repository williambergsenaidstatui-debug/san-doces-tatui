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
  @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js'])
</head>

<body id="top">
    <header class="site-header">
        <div class="container topbar"><a class="brand" href="{{ route('san-doces.home') }}">SAN<br>DOCES<small>DOCERIA</small></a>
            <nav class="main-nav"><a href="{{ route('san-doces.home') }}">Início</a><a href="{{ route('san-doces.produtos') }}">Produtos</a><a
                    href="{{ route('san-doces.sobre-nos') }}">Sobre Nós</a><a class="active" href="{{ route('san-doces.encomendas') }}">Encomendas</a><a
                    href="{{ route('san-doces.contato') }}">Contato</a></nav><a class="main-btn" href="#formulario"><svg class="icon"
                    viewBox="0 0 24 24">
                    <path
                        d="M20.5 3.5A10.8 10.8 0 0 0 12.9 1C7 1 2.2 5.8 2.2 11.7c0 1.9.5 3.7 1.4 5.3L2 23l6.2-1.6a10.7 10.7 0 0 0 4.7 1.1h.1c5.9 0 10.7-4.8 10.7-10.7 0-2.9-1.1-5.6-3.2-7.7Z" />
                    <path
                        d="M8 6.8c.2-.4.4-.4.7-.4h.6c.2 0 .4.1.5.4l1 2.3c.1.3.1.5-.1.7l-.7.8c-.1.1-.1.3 0 .4.5 1 1.3 1.9 2.3 2.4.2.1.3.1.5 0l.8-.9c.2-.2.4-.2.7-.1l2.1 1c.3.1.4.3.4.5 0 .4-.2 1.3-.6 1.7-.4.4-1 .6-1.7.5-1.1-.2-2.5-.8-4.2-2.4-1.3-1.2-2.2-2.7-2.4-4.1-.1-.7.1-1.3.5-1.8Z" />
                </svg>Fazer pedido</a>
        </div>
    </header>
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
          <div class="category-list"><button class="category active">♨　 Bolos　›</button><button class="category">♧　
              Doces　›</button><button class="category">⌒　 Sobremesas　›</button><button class="category">☆　
              Personalizados　›</button></div>
          <div class="cards">
            <article class="card"><img src="{{ asset('assets/images/bolo-morango.jpg') }}" alt="Bolos">
              <div><b>Bolos</b>
                <p>Tradicionais e personalizados para todas as ocasiões.</p>
              </div>
            </article>
            <article class="card"><img src="{{ asset('assets/images/brigadeiros.jpg') }}" alt="Doces">
              <div><b>Doces</b>
                <p>Brigadeiros, bombons e muito mais.</p>
              </div>
            </article>
            <article class="card"><img src="{{ asset('assets/images/copos-chocolate-morango.jpg') }}" alt="Sobremesas">
              <div><b>Sobremesas</b>
                <p>Taças, copos e delícias irresistíveis.</p>
              </div>
            </article>
            <article class="card"><img src="{{ asset('assets/images/torta-limao.jpg') }}" alt="Bolos personalizados">
              <div><b>Bolos personalizados</b>
                <p>Seu momento do seu jeito, com todo carinho.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
      <form id="formulario" class="form">
        <div class="eyebrow">♨ &nbsp; Faça sua encomenda</div>
        <h2>Conte com a San Doces</h2>
        <p>Preencha o formulário abaixo e nos conte o que você deseja. Vamos adorar preparar algo especial para você!
        </p><input required placeholder="Nome completo *">
        <div class="two"><input required placeholder="WhatsApp *"><input type="email" required placeholder="E-mail *">
        </div><input type="date" required><select required>
          <option value="">Categoria do pedido *</option>
          <option>Bolos</option>
          <option>Doces</option>
          <option>Sobremesas</option>
          <option>Bolos personalizados</option>
        </select><textarea
          placeholder="Observações (opcional)&#10;Conte-nos mais sobre o seu pedido..."></textarea><button
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
  </body>

</html>

