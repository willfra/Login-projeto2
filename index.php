<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./radio/radio.css">
    <link rel="stylesheet" href="./Login/login.css">
    <title>Projeto Login</title>
</head>

<body>
    <div class="conteudo">
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
        <div class="logo">

        </div>
        <div class="box_login">
            <h1>Login</h1>
            <h3>Precisa de uma conta? <a href="./cadastro/cadastro.php">Cadastre-se</a></h2>
                <div class="input_login_grid">
                    <input class="campos_login" type="text" placeholder="Nick do habbo">
                    <input class="campos_login" type="text" placeholder="Senha">
                </div>
                <a href="./painel/painel.html"><button>Entrar<i class="fas fa-angle-right"></i></button>
                    </a>
        </div>
    </div>
    <script type="text/javascript" src="./json.js"></script>
</body>

</html>