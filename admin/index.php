<?php
session_start();
include_once 'conexao/conect_db.php';
include_once 'funcoes.php';

if (!isset($_SESSION['admLogado'])) {

    redireciona('frmLogin.php');
}
?>   

<!DOCTYPE html>
<html>
    <head>
        <base href="http://localhost/emduvida_final/admin/"/>
        <meta charset="UTF-8">
        <title>Em duvida</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/js.js"></script>
        <style>
            body{
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div id="carregando">
            <div id="carFundo"></div>
            <div class="carregando"></div>
        </div>
        <div class="msg"></div>

        <section id="todo">

            <?php include_once './menu-lateral.php'; ?>
            <?php include_once 'header.php'; ?>

            <section id="conteudo">
                <article class="conteudo">
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

                    //echo $url[1];
                    ?>
                </article>
            </section>

            <?php //include_once 'footer.php'  ?>


        </section>
    </body>
</html>