<?php

//echo "<meta charset='utf-8'/>";

include_once '../funcoes.php';

@$ac = $_POST['acao'];


if (isset($ac)) {

    if ($ac == 'altCat') {

        $c['NOME_CATEGORIA'] = mysql_real_escape_string($_POST['nomeCat']);
        $c['COR_CATEGORIA'] = mysql_real_escape_string('#' . $_POST['corCat']);
        $c['STATUS_CATEGORIA'] = mysql_real_escape_string($_POST['status']);

        $u['COD_CATEGORIA'] = mysql_real_escape_string($_POST['cod']);


        $camposVal = gerarCamposAlteracao($c);

        alterar('categoria', $camposVal, 'COD_CATEGORIA', $u['COD_CATEGORIA'], "../index.php?link=1&l&pagina=1");
    }

    if ($ac == 'altProd') {

        $c['NOME_PRODUTO'] = $_POST['nomeProduto'];
        $c['FABRICANTE'] = $_POST['nomeFabricante'];
        $c['COD_CATEGORIA'] = $_POST['categoria'];
        $c['STATUS_PRODUTO'] = $_POST['status'];
        $cod = $_POST['cod'];



        $camposVal = gerarCamposAlteracao($c);

        alterar('produtos', $camposVal, "COD_PRODUTO", $cod, "../index.php?link=2&l&pagina=1");
    }

    if ($ac == 'altUsuario') {

        $u['COD_USUARIO'] = mysql_real_escape_string($_POST['cod']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string($_POST['STATUS_USUARIO']);
        $c['COD_TIPO'] = mysql_real_escape_string($_POST['COD_TIPO']);
        //print_r($c);
        $camposVal = gerarCamposAlteracao($c);

        if (alterar('usuario', $camposVal, 'COD_USUARIO', $u['COD_USUARIO'])) {
            echo '1';
        } else {
            echo '2';
        }
    }
}

if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'toAdm') {

        $u['COD_USUARIO'] = mysql_real_escape_string($_GET['cod']);
        $c['COD_TIPO'] = mysql_real_escape_string('2');

        $camposVal = gerarCamposAlteracao($c);

        if (alterar('usuario', $camposVal, 'COD_USUARIO', $u['COD_USUARIO'])) {
            echo '1';
        } else {
            echo '2';
        }
    }

    if ($_GET['acao'] == 'toComum') {
        $u['COD_USUARIO'] = mysql_real_escape_string($_GET['cod']);
        $c['COD_TIPO'] = mysql_real_escape_string('1');

        $camposVal = gerarCamposAlteracao($c);

        if (alterar('usuario', $camposVal, 'COD_USUARIO', $u['COD_USUARIO'])) {
            echo '1';
        } else {
            echo '2';
        }
    }
    
    if($_GET['acao'] == 'toAtivo'){
        $u['COD_USUARIO'] = mysql_real_escape_string($_GET['cod']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string('1');

        $camposVal = gerarCamposAlteracao($c);

        if (alterar('usuario', $camposVal, 'COD_USUARIO', $u['COD_USUARIO'])) {
            echo '1';
        } else {
            echo '2';
        }
    }
    
    if($_GET['acao'] == 'toInativo'){
        $u['COD_USUARIO'] = mysql_real_escape_string($_GET['cod']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string('0');

        $camposVal = gerarCamposAlteracao($c);

        if (alterar('usuario', $camposVal, 'COD_USUARIO', $u['COD_USUARIO'])) {
            echo '1';
        } else {
            echo '2';
        }
    }
}