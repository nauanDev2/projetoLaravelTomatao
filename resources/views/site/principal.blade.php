<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
        <meta charset="utf-8">

        <style>
            html, body {
                height: 100%;
                margin: 0;
                font-family: 'Roboto', sans-serif;
            }

            p, span {
                color: #ffffff;
            }

            h1 {
                color: #ffffff;
                font-size: 28px;
            }

            h2 {
                color: #333333;
                font-size: 22px;
            }

            input, select, textarea, button {
                width: 100%;
                padding: 10px 15px;
                margin: 10px 0px 10px 0px;
                box-sizing: border-box;
                border-radius: 3px;
                background-color: transparent;
                color: #333;
            }

            .texto-branco {
                color: #ffffff;
            }

            .borda-branca {
                border: solid 1px #fff;
            }

            .borda-preta {
                border: solid 1px #333;
            }

            button {
                background-color: #7ab829;
                cursor: pointer;
                color: #fff;
            }

            button:hover {
                background-color: #6ea22c;
            }

            ::placeholder {
                color: #333333;
                opacity: 1;
            }

            :-ms-input-placeholder {
                color: #333333;
            }

            ::-ms-input-placeholder {
                color: #333333;
            }

            .topo {
                width: 100%;
                background-color: #f8f8f8;
                position: absolute;
                padding: 20px 0px 10px 0px;
            }

            .logo {
                width: 50px;
                float: left;
                margin-left: 40px;
            }

            .menu {
                float: right;
                margin-right: 40px;
            }

            .menu li {
                display: inline;
                float: left;
            }

            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .menu a {
                text-decoration: none;
                padding: 14px 16px;
                color: #333;
            }

            .menu a:hover {
                color: #268fd0;
            }

            .conteudo-destaque {
                width: 100%;
                height: 100%;
                min-height: 800px; 
            }

            .esquerda {
                float:left;
                background-color: #268fd0;
                width: 60%;
                height: 100%;
            }

            .direita {
                float:right;
                background-color: #2a9ee2;
                width: 40%;
                height: 100%;
            }

            .informacoes, .contato {
                margin: 100px 40px 40px 40px;
            }

            .contato-principal {
                margin: 0px 60px 60px 40px;
            }

            .chamada {
                margin-top: 30px;
                margin-left: 20px;
            }

            .video {
                margin: 40px;
            }

            .video img {
                max-width: 100%;
                max-height: 100%;
            }

            .conteudo-pagina {
                width: 100%;
                height: 100%;
                text-align: center;
                margin-bottom: 100px;
            }

            .titulo-pagina {
                padding: 100px 0px 60px 0px;
                background-color: #2a9ee2;
                text-align: center;
            }

            .informacao-pagina {
                text-align: center;
                margin-top: 30px;
            }

            .informacao-pagina p{
                color: #333;
            }

            .rodape {
                width: 100%;
            }

            .redes-sociais, .area-contato, .localizacao {
                width: 33.333%;
                border-top:solid 1px #ccc;
                float: left;
                text-align: center;
                background-color: #f8f8f8;
                height: 250px;
            }

            .redes-sociais, .area-contato, .localizacao p, span {
                color: #333333;
            }

            .redes-sociais img {
                margin: 0px 15px 0px 15px;
            }

        </style>
    </head>

    <body>
        <div class="topo">

            <div class="logo">
                <img src="img/logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('site.principal') }}">Principal</a></li>
                    <li><a href="{{ route('site.sobre-nos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="img/player_video.jpg">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form>
                        <input type="text" placeholder="Nome" class="borda-branca">
                        <br>
                        <input type="text" placeholder="Telefone" class="borda-branca">
                        <br>
                        <input type="text" placeholder="E-mail" class="borda-branca">
                        <br>
                        <select class="borda-branca">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="">Dúvida</option>
                            <option value="">Elogio</option>
                            <option value="">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="borda-branca">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>