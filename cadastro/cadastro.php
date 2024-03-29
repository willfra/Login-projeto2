<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../radio/radio.css">
    <link rel="stylesheet" href="../cadastro/cadastro.css">
    <title>Projeto Login</title>
</head>

<body>
    <div class="conteudo">
        <div class="radio_player">
            <div class="radio">
                <div class="playpause" id="botao" onclick="pause()">
                    <i aria-hidden="true" class="fa fa-pause"></i>
                </div>
                <div class="playpause" id="botao" onclick="play()">
                    <i aria-hidden="true" class="fa fa-play"></i>
                </div>
                <div class="radio-titulo"><i aria-hidden="true" class="fa fa-microphone"> NO AR</i></div>
                <audio autoplay="autoplay" id="stream" src="http://stream.zeno.fm/14hdwdkkw38uv" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="logo">

        </div>
        <div class="box_login">
            <h1>Criar conta</h1>
            <h3>Já tem uma conta? <a href="../index.php">Entrar</a></h2>
                <div class="input_login_grid">
                    <input class="campos_login" type="text" placeholder="E-mail">
                    <input class="campos_login" type="text" placeholder="Nome">
                    <input class="campos_login" type="text" placeholder="Nick do Habbo">
                    <input class="campos_login" type="text" placeholder="Senha">
                    <input class="campos_login" type="text" placeholder="Confirme a senha">
                </div>
                <button>Inscrever-se<i class="fas fa-angle-right"></i></button>
                <section class="sections">
                <!-- <input type="checkbox" name="check" id="check"> <b> Eu aceito os </b><a href=""><b> termos e condições</b></a> -->
                </section>
        </div>
    </div>
    <script type="text/javascript" src="./json.js"></script>
</body>

</html>