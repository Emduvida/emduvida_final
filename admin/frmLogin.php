<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
    </head>
    <body>
        <div id="carregando">
            <div id="carFundo"></div>
            <div class="carregando"></div>
        </div>
        <div class="msg"></div>
        <form method="post" action="" name="loginAdm">
            <label for="email" class="lblPadrao">E-mail</label>
            <input type="email" id="email" name="email" />

            <label for="senha" class="lblPadrao">Senha</label>
            <input type="password" id="senha" name="senha" />

            <input type="submit" class="inputPadrao" name="cadastrar"/>
        </form>
        
        <div class="retorno"></div>
    </body>
</html>