@php
    $adminName = $adminName ?? 'Admin';
    $metrics = $metrics ?? [
        ['label' => 'Pedidos Realizados', 'value' => 48, 'change' => '+12% em relacao ao mes passado', 'icon' => 'bag'],
        ['label' => 'Mensagens no Contato', 'value' => 23, 'change' => '+8% em relacao ao mes passado', 'icon' => 'message'],
        ['label' => 'Encomendas Agendadas', 'value' => 12, 'change' => '+20% em relacao ao mes passado', 'icon' => 'calendar'],
        ['label' => 'Clientes Ativos', 'value' => 156, 'change' => '+15% em relacao ao mes passado', 'icon' => 'star'],
    ];
    $endereco = $endereco ?? [
        'linha1' => 'Rua da Matriz, 123',
        'linha2' => 'Centro - Tatui, SP',
        'cep' => 'CEP: 18270-000',
    ];
    $horarioFuncionamento = $horarioFuncionamento ?? [
        'dias' => 'Segunda a Sabado',
        'horario' => 'Das 14:30 as 23:30',
        'observacao' => 'Nossa loja funciona todos os dias para melhor atender voce!',
    ];
    $horariosAgenda = $horariosAgenda ?? [
        ['dia' => 'Segunda', 'horario' => '14:30 - 20:00'],
        ['dia' => 'Terca', 'horario' => '14:30 - 20:00'],
        ['dia' => 'Quarta', 'horario' => '14:30 - 20:00'],
        ['dia' => 'Quinta', 'horario' => '14:30 - 20:00'],
        ['dia' => 'Sexta', 'horario' => '14:30 - 21:00'],
        ['dia' => 'Sabado', 'horario' => '14:30 - 21:00'],
    ];
    $pedidosRecentes = $pedidosRecentes ?? [
        ['id' => '#1048', 'cliente' => 'Ana Souza', 'produtos' => '1x Bolo de Morango', 'total' => 'R$ 89,90', 'status' => 'Em preparo', 'data' => '21/06 - 14:32'],
        ['id' => '#1047', 'cliente' => 'Lucas Ferreira', 'produtos' => '2x Brigadeiro no copo', 'total' => 'R$ 32,00', 'status' => 'Entregue', 'data' => '21/06 - 13:47'],
        ['id' => '#1046', 'cliente' => 'Juliana Costa', 'produtos' => '1x Torta de Banana', 'total' => 'R$ 75,00', 'status' => 'Em preparo', 'data' => '21/06 - 12:20'],
        ['id' => '#1045', 'cliente' => 'Rafael Martins', 'produtos' => '4x Doces variados', 'total' => 'R$ 48,00', 'status' => 'Entregue', 'data' => '20/06 - 11:10'],
        ['id' => '#1044', 'cliente' => 'Camila Alves', 'produtos' => '1x Bolo Personalizado', 'total' => 'R$ 120,00', 'status' => 'Em preparo', 'data' => '20/06 - 10:05'],
    ];
    $mensagensContato = $mensagensContato ?? [
        ['nome' => 'Mariana Silva', 'mensagem' => 'Gostaria de saber se voces fazem bolos...', 'data' => 'Hoje, 10:24'],
        ['nome' => 'Carlos Henrique', 'mensagem' => 'Quais sao os sabores de brigadeiro no copo?', 'data' => 'Ontem, 17:32'],
        ['nome' => 'Fernanda Lima', 'mensagem' => 'Tem como agendar uma encomenda para o dia 28?', 'data' => 'Ontem, 14:18'],
        ['nome' => 'Beatriz Alves', 'mensagem' => 'Qual o valor do delivery para o bairro Centro?', 'data' => '20/06, 19:45'],
        ['nome' => 'Paulo Santos', 'mensagem' => 'Voces aceitam cartao de credito?', 'data' => '20/06, 16:20'],
    ];
@endphp

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | San Doces</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&family=Sacramento&display=swap" rel="stylesheet">
    @vite(['resources/css/san-doces.css', 'resources/js/san-doces.js', 'resources/js/dashboard.js'])
</head>

<body class="dashboard-page">
    <aside class="dash-sidebar">
        <a class="dash-logo" href="{{ route('san-doces.home') }}">SAN<br>DOCE<small>DOCERIA</small></a>
        <nav class="dash-menu" aria-label="Menu administrativo">
            <a class="active" href="{{ route('san-doces.dashboard') }}"><span class="dash-ico home"></span>Inicio</a>
            <a href="#produtos-admin" data-dashboard-link="produtos"><span class="dash-ico box"></span>Produtos</a>
            <a href="#pedidos-admin" data-dashboard-link="pedidos"><span class="dash-ico bag"></span>Pedidos</a>
            <a href="#mensagens-admin" data-dashboard-link="mensagens"><span class="dash-ico message"></span>Mensagens</a>
            <a href="#config-admin" data-dashboard-link="config"><span class="dash-ico gear"></span>Configuracoes</a>
        </nav>
        <div class="dash-sidebar-decoration" aria-hidden="true">
            <div class="dash-sidebar-note">Doce e sempre<br>uma boa ideia!</div>
            <img class="dash-sidebar-img" src="{{ asset('assets/images/bolo-morango.jpg') }}" alt="">
        </div>
    </aside>

    <div class="dash-shell">
        <header class="dash-topbar">
            <div>
                <h1>Ola, {{ $adminName }}!</h1>
                <p>Seja bem-vindo(a) ao painel da San Doce.</p>
            </div>
            <div class="dash-admin">
                <button class="dash-alert" type="button" aria-label="Notificacoes"><span id="dash-alert-count">0</span></button>
                <span class="dash-avatar"></span>
                <strong id="dash-admin-name">Administrador</strong>
                <span class="dash-chevron"></span>
                <button id="dash-logout" class="dash-logout" type="button">Sair</button>
            </div>
        </header>

        <main class="dash-main">
            <section class="dash-metrics" aria-label="Resumo">
                @foreach ($metrics as $metric)
                    <article class="dash-metric">
                        <span class="metric-icon {{ $metric['icon'] ?? 'star' }}"></span>
                        <div>
                            <h2>{{ $metric['label'] }}</h2>
                            <strong>{{ $metric['value'] }}</strong>
                            <p>{{ $metric['change'] }}</p>
                        </div>
                    </article>
                @endforeach
            </section>

            <section class="dash-grid">
                <article class="dash-panel dash-address">
                    <div class="panel-title">
                        <h2><span class="dash-pin"></span>Endereco da Loja</h2>
                        <button id="dash-toggle-address" class="dash-link-button" type="button">Editar</button>
                    </div>
                    <div class="address-body">
                        <div class="address-card">
                            <p id="dash-address-line-1">{{ $endereco['linha1'] }}</p>
                            <p id="dash-address-line-2">{{ $endereco['linha2'] }}</p>
                            <p id="dash-address-cep">{{ $endereco['cep'] }}</p>
                        </div>
                        <div class="mini-map">
                            <span class="map-pin">San Doce Doceria</span>
                            <strong id="dash-address-city">Tatui</strong>
                        </div>
                    </div>
                    <form id="dash-address-form" class="dash-inline-form is-hidden">
                        <div class="dash-address-form-grid">
                            <label>CEP
                                <input id="dash-address-cep-input" name="cep" inputmode="numeric" maxlength="9" required placeholder="18270-000">
                            </label>
                            <label>Numero
                                <input id="dash-address-number" name="numero" required placeholder="123">
                            </label>
                            <label>Rua
                                <input id="dash-address-street" name="street" required placeholder="Rua da Matriz">
                            </label>
                            <label>Bairro
                                <input id="dash-address-neighborhood" name="neighborhood" required placeholder="Centro">
                            </label>
                            <label>Cidade
                                <input id="dash-address-city-input" name="city" required placeholder="Tatui">
                            </label>
                            <label>UF
                                <input id="dash-address-state" name="state" maxlength="2" required placeholder="SP">
                            </label>
                        </div>
                        <small>Digite o CEP para preencher automaticamente pela BrasilAPI.</small>
                        <div class="dash-inline-actions">
                            <button id="dash-search-address" class="dash-action muted" type="button">Buscar CEP</button>
                            <button class="dash-action primary" type="submit">Salvar endereco</button>
                            <button class="dash-action muted" type="button" data-close-panel="dash-address-form">Cancelar</button>
                        </div>
                    </form>
                    <p class="panel-note">Este endereco sera utilizado para o calculo automatico do frete no momento do pedido.</p>
                </article>

                <article class="dash-panel">
                    <div class="panel-title">
                        <h2><span class="dash-clock"></span>Horario de Funcionamento</h2>
                        <button id="dash-toggle-hours" class="dash-link-button" type="button">Editar</button>
                    </div>
                    <div class="hours-card">
                        <strong>{{ $horarioFuncionamento['dias'] }}</strong>
                        <span>{{ $horarioFuncionamento['horario'] }}</span>
                    </div>
                    <p class="hours-note">{{ $horarioFuncionamento['observacao'] }}</p>
                    <form id="dash-hours-form" class="dash-inline-form is-hidden">
                        <label>Dias
                            <input id="dash-hours-days" name="dias" required value="{{ $horarioFuncionamento['dias'] }}">
                        </label>
                        <label>Horario
                            <input id="dash-hours-range" name="horario" required value="{{ $horarioFuncionamento['horario'] }}">
                        </label>
                        <label>Observacao
                            <textarea id="dash-hours-note" name="observacao">{{ $horarioFuncionamento['observacao'] }}</textarea>
                        </label>
                        <div class="dash-inline-actions">
                            <button class="dash-action primary" type="submit">Salvar horario</button>
                            <button class="dash-action muted" type="button" data-close-panel="dash-hours-form">Cancelar</button>
                        </div>
                    </form>
                </article>

                <article class="dash-panel dash-schedule">
                    <div class="panel-title">
                        <h2><span class="dash-calendar"></span>Horarios Disponiveis para Agendar Encomendas</h2>
                        <button id="dash-toggle-schedule" class="dash-link-button" type="button">Editar</button>
                    </div>
                    <div class="schedule-list">
                        @foreach ($horariosAgenda as $item)
                            <div><span>{{ $item['dia'] }}</span><strong>{{ $item['horario'] }}</strong></div>
                        @endforeach
                    </div>
                    <form id="dash-schedule-form" class="dash-inline-form is-hidden">
                        <label>Horarios de encomenda
                            <textarea id="dash-schedule-lines" name="horarios" rows="6">@foreach ($horariosAgenda as $item){{ $item['dia'] }}: {{ $item['horario'] }}
@endforeach</textarea>
                        </label>
                        <small>Use uma linha por dia. Ex: Segunda: 14:30 - 20:00</small>
                        <div class="dash-inline-actions">
                            <button class="dash-action primary" type="submit">Salvar agenda</button>
                            <button class="dash-action muted" type="button" data-close-panel="dash-schedule-form">Cancelar</button>
                        </div>
                    </form>
                </article>
            </section>

            <section id="produtos-admin" class="dash-manage">
                <article class="dash-panel">
                    <div class="panel-title">
                        <h2><span class="dash-ico box"></span>Cadastrar Produto</h2>
                    </div>
                    <form id="cadastro-produto-form" class="dash-product-form" enctype="multipart/form-data">
                        <div class="dash-form-grid">
                            <label>Nome<input id="produto_nome" name="nome" required placeholder="Ex: Bolo de Morango"></label>
                            <label>Categoria<input id="produto_categoria" name="categoria" required placeholder="Ex: Bolos"></label>
                            <label>Preco<input id="produto_preco" name="preco" type="number" min="0" step="0.01" required placeholder="89.90"></label>
                            <label class="dash-image-field">Arquivo da imagem
                                <input id="produto_imagem" name="imagem_upload" type="file" accept="image/jpeg,image/png,image/webp">
                                <span>JPG, PNG ou WEBP, ate 5 MB</span>
                            </label>
                            <label>URL da imagem
                                <input id="produto_imagem_url" name="imagem" type="url" maxlength="255" placeholder="https://site.com/imagem.jpg">
                            </label>
                            <label>Sobre<input id="produto_sobre" name="sobre" required placeholder="Resumo curto do produto"></label>
                            <label>Descricao<textarea id="produto_descricao" name="descricao" required placeholder="Descricao completa"></textarea></label>
                        </div>
                        <div id="produto-imagem-colar" class="dash-paste-zone" tabindex="0">
                            <strong>Colar imagem</strong>
                            <span>Copie uma imagem ou uma URL e pressione Ctrl+V aqui.</span>
                        </div>
                        <div id="produto-imagem-preview" class="dash-image-preview is-hidden">
                            <img alt="Previa da imagem selecionada">
                            <button type="button" aria-label="Remover imagem selecionada" title="Remover imagem">&times;</button>
                        </div>
                        <button class="dash-action primary" type="submit">Salvar produto</button>
                    </form>
                </article>

                <article class="dash-panel">
                    <div class="panel-title">
                        <h2><span class="dash-ico box"></span>Produtos Cadastrados</h2>
                        <button id="dash-refresh-products" class="dash-link-button" type="button">Atualizar</button>
                    </div>
                    <div id="dash-products-list" class="dash-products-list">
                        <p class="dash-empty">Carregando produtos...</p>
                    </div>
                </article>
            </section>

            <section id="pedidos-admin" class="dash-bottom">
                <article class="dash-panel">
                    <div class="panel-title">
                        <h2><span class="dash-orders"></span>Pedidos Recentes</h2>
                        <button id="dash-refresh-orders" class="dash-link-button" type="button">Atualizar</button>
                    </div>
                    <div class="orders-table">
                        <div class="orders-head">
                            <span>#</span><span>Cliente</span><span>Produto(s)</span><span>Total</span><span>Status</span><span>Data</span>
                        </div>
                        @foreach ($pedidosRecentes as $pedido)
                            <div class="orders-row">
                                <span>{{ $pedido['id'] }}</span>
                                <span>{{ $pedido['cliente'] }}</span>
                                <span>{{ $pedido['produtos'] }}</span>
                                <span>{{ $pedido['total'] }}</span>
                                <span><b class="{{ $pedido['status'] === 'Entregue' ? 'done' : 'prep' }}">{{ $pedido['status'] }}</b></span>
                                <span>{{ $pedido['data'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </article>

                <article id="mensagens-admin" class="dash-panel">
                    <div class="panel-title">
                        <h2><span class="dash-chat"></span>Mensagens do Contato</h2>
                        <a href="#">Ver todas</a>
                    </div>
                    <div class="message-list">
                        @foreach ($mensagensContato as $mensagem)
                            <a class="message-item" href="#">
                                <span>{{ mb_substr($mensagem['nome'], 0, 1) }}</span>
                                <div>
                                    <strong>{{ $mensagem['nome'] }}</strong>
                                    <p>{{ $mensagem['mensagem'] }}</p>
                                </div>
                                <time>{{ $mensagem['data'] }}</time>
                            </a>
                        @endforeach
                    </div>
                </article>
            </section>

            <section id="config-admin" class="dash-panel dash-config">
                <div class="panel-title">
                    <h2><span class="dash-ico gear"></span>Configuracoes Rapidas</h2>
                </div>
                <p>Use o painel para acompanhar pedidos, atualizar status e manter o catalogo de produtos da San Doce.</p>
            </section>
        </main>

        <footer class="dash-footer">
            <a class="dash-logo small" href="{{ route('san-doces.home') }}">SAN<br>DOCE<small>DOCERIA</small></a>
            <p>Obrigada por fazer parte da nossa historia!</p>
            <div>
                <span>@sandoce_confeitaria</span>
                <span>(15) 99144-4740</span>
                <span>Tatui - SP</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
