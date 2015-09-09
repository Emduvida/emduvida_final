<?php

include_once '../admin/funcoes.php';
include_once '../admin/conexao/conect_db.php';
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} else if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];
}

switch ($acao) {
    case 'AlterarResenha':
        //print_r($_POST);
        $cod = $_POST['cod'];

        $r['NOTA_PRODUTO'] = mysql_real_escape_string($_POST['NOTA_PRODUTO']);
        $r['titulo_resenha'] = mysql_real_escape_string($_POST['titulo_resenha']);
        $r['CORPO_RESENHA'] = $_POST['DESCRICAO_RESENHA'];
        $r['slugfy'] = gen_slug($r['titulo_resenha']);

        $camposVal = gerarCamposAlteracao($r);

        if (alterar('resenha', $camposVal, "COD_RESENHA", $cod)) {
            echo '1';
        }

        print_r($_POST['cod_qualidade']);

        foreach ($_POST['qualidades'] as $qualidades) {

            foreach ($_POST['cod_qualidade'] as $codQUal) {
                $sqlQualidades = "UPDATE qualidades SET QUALIDADES = '$qualidades' WHERE COD_DEFEITO = '$codQUal'";
                //echo "INSERT INTO qualidades(COD_RESENHA,QUALIDADES)VALUES('$codResenha','$qualidades')";
                mysql_query($sqlQualidades);
            }
        }

        foreach ($_POST['defeitos'] as $defeitos) {

            $sqlDefeitos = "UPDATE defeitos SET DEFEITOS = '$defeitos' WHERE COD_RESENHA = '$cod'";
            mysql_query($sqlDefeitos);
        }


        break;
}