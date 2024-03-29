<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../painel/painel.css">
    <link rel="stylesheet" href="../radio.css">
    <title>Painel de controle</title>
</head>

<body>
    <aside class="menu-lateral">
        <div class="hamburguer"><i id="icon-menu-barra" class="fas fa-bars"></i><i id="icon-menu-x" class="fas fa-times"></i></div>
        <section class="topo_menu">
            <div class="logo">
                <h1>SERP</h1>
            </div>

        </section>
        <nav>
            <a href="">
                <li><i class="far fa-clone"></i> Inicio</li>
            </a>
            <a href="">
                <li><i class="far fa-envelope"></i> Mensagens</li>
            </a>
            <a href="">
                <li><i class="far fa-chart-bar"></i> Relatórios</li>
            </a>
            <a href="">
                <li><i class="far fa-sun"></i> Configurações</li>
            </a>
        </nav>
        <div class="box_logout"><a href="../index.php">
                <h3>Desconectar-se</h3>
            </a>

        </div>
    </aside>
    <div class="painel_dentro">
        <div class="radio_player">
            <div class="radio">
                <div class="playpause" id="botao" onclick="pause()">
                <i aria-hidden="true" class="fa fa-pause"></i></div>
                <div class="playpause" id="botao" onclick="play()">
                <i aria-hidden="true" class="fa fa-play"></i></div>
                <div class="radio-titulo"><i aria-hidden="true" class="fa fa-microphone"> NO AR</i></div>
                <audio autoplay="autoplay" id="stream" src="http://stream.zeno.fm/14hdwdkkw38uv" type="audio/mpeg">
                </audio>
                </div>
        </div>

        <header class="topo">
            <input type="search" class="pesquisa" placeholder="Pesquise">
            <div class="topo_icons">

                <div class="icon_header"><i class="far fa-bell"></i></div>
                <div class="icon_header"><i class="fas fa-award"></i></i></div>
                <div class="icon_header login_habbo">Entrar no jogo <i class="fas fa-arrow-right"></i></div>
            </div>
        </header>
        <div class="box_painel">
            <section class="header_section">
                <h1>Painel de controle</h1>
                <div class="filtro">Filtros <i class="fas fa-sort"></i></div>
            </section>
            <section class="infos">
                <div class="box">
                    <h1>Novos políciais</h1>
                    <div class="info_qtd"> +25</div>
                    <div class="info_acao">Ver relatório <i class="fas fa-angle-right"></i></div>
                </div>
                <div class="box">
                    <h1>Tarefas</h1>
                    <div class="info_qtd"> 5</div>
                    <div class="info_acao">Ver tarefas <i class="fas fa-angle-right"></i></div>
                </div>
                <div class="box">
                    <h1>Aplicar aula</h1>
                    <div class="info_qtd"> 4</div>
                    <div class="info_acao">Ver relatório <i class="fas fa-angle-right"></i></div>
                </div>
            </section>
        </div>

    </div>
    <script type="text/javascript" src="../json.js"></script>
</body>

</html>