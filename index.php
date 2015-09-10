<?php
session_start();

include_once './admin/conexao/conect_db.php';
include_once './admin/funcoes.php';
?>   

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Em duvida</title>
        <base href="http://localhost/emduvida_final/"/><!-- aqui é especificado a url base do site-->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!--importando o css geral do site-->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/><!--importando o fontawesome que é do caralho!-->
        <script src="admin/js/jquery-1.11.3.min.js"></script><!--importando o jquery local-->
        <script src="js/jquery.form.js"></script><!--importando a biblioteca jquery form para usar ajax lindo-->
        <script src="js/ajax.js"></script><!--importando o arquivo que esta fazendo os ajaxs lindos e maravilhosos-->
        <script src="js/js.js"></script><!--importando o js.js-->
        <script src="js/validate.js"></script><!--importando o arquivo de validação -->
        <script src="js/jquery.maskedinput.min.js"></script>
    </head>
    <body>
        <div id="carregando">
            <div id="carFundo"></div>
            <div class="carregando"></div>
        </div>
        <div class="msg"></div>
        
        
        <section id="todo">

            <?php include_once 'header.php'; ?>

            <section id="conteudo">

                <?php
                include_once './config.inc';
                $url[1] = (empty($url[1])) ? null : $url[1];

                if ($url[0] != 'index') {
                    if (file_exists('paginas' . '/' . $url[0] . '.php')) {
                        include_once 'paginas' . '/' . $url[0] . '.php';
                    } else {
                        include_once 'paginas' . '/404.php';
                    }
                } else {
                    include_once 'paginas' . '/home.php';
                }

              //  echo $url[1];
                ?>

            </section>

            <?php include_once 'footer.php' ?>


        </section>
    </body>
</html>