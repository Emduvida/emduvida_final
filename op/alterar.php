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

    case 'alterarUsuario':
        //print_r($_POST);

        $data = $_POST['DATA_NASCIMENTO'];
        $dt = explode('/', $data);

        $dtFInal = $dt[2] . '-' . $dt[1] . '-' . $dt[0];

        $c['NOME_USUARIO'] = mysql_real_escape_string($_POST['NOME_USUARIO']);
        $c['SOBRENOME_USUARIO'] = $_POST['SOBRENOME'];
        $c['IMAGEM_PERFIL'] = mysql_real_escape_string($_POST['txtImagemUsuario']);
        $c['DATA_NASCIMENTO'] = mysql_real_escape_string($dtFInal);
        $c['CPF_USUARIO'] = mysql_real_escape_string($_POST['CPF_USUARIO']);
        $c['EMAIL_USUARIO'] = mysql_real_escape_string($_POST['EMAIL_USUARIO']);
        $c['UF_USUARIO'] = mysql_real_escape_string($_POST['ESTADO_USUARIO']);
        $c['CIDADE_USUARIO'] = mysql_real_escape_string($_POST['CIDADE_USUARIO']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string('1');
        $c['COD_TIPO'] = mysql_real_escape_string('1');
        $u['COD_USUARIO'] = mysql_real_escape_string($_POST['cod']);

        $res = selecionar('usuario', 'COD_USUARIO', $u['COD_USUARIO']);

        if ($c['EMAIL_USUARIO'] != $res['EMAIL_USUARIO']) {

            $linhas = contarLinhas("SELECT * FROM usuario WHERE EMAIL_USUARIO = '{$c['EMAIL_USUARIO']}'");
            if ($linhas == 1) {
                $erro = 1;
            }
        }

        if ($c['CPF_USUARIO'] != $res['CPF_USUARIO']) {
            $linhas = contarLinhas("SELECT * FROM usuario WHERE CPF_USUARIO = '{$c['CPF_USUARIO']}'");
            if ($linhas == 1) {
                $erro = 2;
            }
        }

        if(isset($erro)){
            echo $erro;
        }else{
            $camposVal = gerarCamposAlteracao($c);
            if(alterar('usuario', $camposVal, "COD_USUARIO", $u['COD_USUARIO'])){
                echo '3';
            }
        }
        //print_r($c);
        break;
}