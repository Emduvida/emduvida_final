<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
        
        <style>
            body{
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <section id="containerLogin">
            <div id="carregando">
                <div id="carFundo"></div>
                <div class="carregando"><i class="fa fa-spinner fa-pulse"></i></div>
            </div>

            
            <div class="msg"></div>
            
            <header class="cabecalho-login">
                <img src="imagens/logo.png" alt="logo">
                <div class="sociais">
                    <a href="" class="link-sociais face"><i class="fa fa-facebook"></i></a>
                    <a href="" class="link-sociais tt"><i class="fa fa-twitter"></i></a>
                    <a href="" class="link-sociais gplus"><i class="fa fa-google-plus"></i></a>
                </div>
            </header>
            
            <section id="box-login">
                <h1 class="titulo-form-login">login administrativo</h1>
                <form method="post" action="" class="formulario-login-adm" name="loginAdm">
                    <label for="email" class="lblLogin">E-mail</label>

                    <input type="email" id="email" class="inputLogin" name="email" />

                    <label for="senha" class="lblLogin">Senha</label>

                    <input type="password" id="senha" class="inputLogin" name="senha" />
                    <a href="">Esqueceu sua senha?</a>
                    <input type="submit" class="inputENtrar" value="Entrar" name="cadastrar"/>
                </form>
            </section>
            
            <footer class="rodape-login">
                <article class="box-logo-rodape">
                    <hr class="linha-rodape"/>
                </article>
                 <img src="imagens/logo-authentic-sem-solution.png" class="logo-authentic" alt="logo-authentic"/>
                <article class="content-rodape"></article>
            </footer>
        </section>
    </body>
</html>