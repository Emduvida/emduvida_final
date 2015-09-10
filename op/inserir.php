<?php
session_start();
//echo "<meta charset='utf-8'/>";
include_once '../admin/funcoes.php';
date_default_timezone_set('America/Sao_Paulo');
$ac = $_POST['acao'];


switch ($ac) {
    case 'cadUsuario':
        $data = $_POST['DATA_NASCIMENTO'];
        $dt = explode('/', $data);

        $dtFInal = $dt[2] . '-' . $dt[1] . '-' . $dt[0];

        $c['NOME_USUARIO'] = mysql_real_escape_string($_POST['NOME_USUARIO']);
        $c['SOBRENOME_USUARIO'] = $_POST['SOBRENOME'];
        $c['IMAGEM_PERFIL'] = mysql_real_escape_string($_POST['txtImagemUsuario']);
        $c['DATA_NASCIMENTO'] = mysql_real_escape_string($dtFInal);
        $c['CPF_USUARIO'] = mysql_real_escape_string($_POST['CPF_USUARIO']);
        $c['EMAIL_USUARIO'] = mysql_real_escape_string($_POST['EMAIL_USUARIO']);
        $c['SENHA_USUARIO'] = mysql_real_escape_string(base64_encode(md5($_POST['SENHA_USUARIO'])));
        $c['UF_USUARIO'] = mysql_real_escape_string($_POST['ESTADO_USUARIO']);
        $c['CIDADE_USUARIO'] = mysql_real_escape_string($_POST['CIDADE_USUARIO']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string('1');
        $c['COD_TIPO'] = mysql_real_escape_string('1');



        $n = contarLinhas("SELECT * FROM usuario WHERE CPF_USUARIO = '{$c['CPF_USUARIO']}'");

        if ($n > 0) {
            echo '1';
        } else {
            $nEmail = contarLinhas("SELECT * FROM usuario WHERE EMAIL_USUARIO= '{$c['EMAIL_USUARIO']}'");

            if ($nEmail > 0) {
                echo '2';
            } else {

                $campos = gerarCampos($c);
                $valores = gerarValores($c);

                if (inserir('usuario', $campos, $valores)) {
                    echo '3';
                    unset($_SESSION['emailCadastro']);
                    unset($_SESSION['senhaCadastro']);
                }
            }
        }

        break;


    case 'cadResenha':

        //verificar se o produto da resenha se encontra no banco
        //caso ele não esteja no banco, inserir
        //verificar se o usuario já não fez uma resenha desse mesmo produto
        //fazer upload (multiplo) das imagens
        //cadastrar resenha
        //cadastrar qualidades
        //cadastrar defeitos
        //redirecionar usuario para a pagina da resenha



        $sql = "SELECT * FROM produtos WHERE NOME_PRODUTO = '{$_POST['produto']}'";
        $nProd = contarLinhas($sql);

        if ($nProd == 1) {
            $rs = selecionar("produtos", 'NOME_PRODUTO', $_POST['produto']);

            $r['COD_PRODUTO'] = $rs['COD_PRODUTO'];
        } else {

            $c['NOME_PRODUTO'] = mysql_real_escape_string($_POST['produto']);
            $c['STATUS_PRODUTO'] = mysql_real_escape_string('1');
            $c['FABRICANTE'] = mysql_real_escape_string($_POST['fabricante']);

            $campos = gerarCampos($c);
            $valores = gerarValores($c);

            inserir("produtos", $campos, $valores);

            $r['COD_PRODUTO'] = mysql_insert_id();
        }

        $r['NOTA_PRODUTO'] = mysql_real_escape_string($_POST['NOTA_PRODUTO']);
        $r['titulo_resenha'] = mysql_real_escape_string($_POST['titulo_resenha']);
        $r['CORPO_RESENHA'] = $_POST['DESCRICAO_RESENHA'];
        $r['STATUS_RESENHA'] = '1';
        $r['QTDE_DENUNCIAS'] = 0;
        $r['COD_USUARIO'] = $_SESSION['COD_USUARIO'];
        $r['DATA_RESENHA'] = date('Y-m-d H:i:s');
        $r['slugfy'] = gen_slug($r['titulo_resenha']);

        //print_r($r);
        $campos = gerarCampos($r);

        $valores = gerarValores($r);

        if (inserir("resenha", $campos, $valores)) {
            $resultado = '3';
        }


        $codResenha = mysql_insert_id();


        foreach ($_POST['qualidades'] as $qualidades) {

            $sqlQualidades = "INSERT INTO qualidades(COD_RESENHA,QUALIDADES)VALUES('$codResenha','$qualidades')";
            //echo "INSERT INTO qualidades(COD_RESENHA,QUALIDADES)VALUES('$codResenha','$qualidades')";
            mysql_query($sqlQualidades);
        }

        foreach ($_POST['defeitos'] as $defeitos) {

            $sqlDefeitos = "INSERT INTO defeitos(COD_RESENHA,DEFEITOS)VALUES('$codResenha','$defeitos')";
            mysql_query($sqlDefeitos);
        }

        $imagem = $_FILES['imagem'];

        $ImagemArray = array();
        $contarImagens = count($imagem['name']);
        $file_keys = array_keys($_FILES['imagem']);


        for ($i = 0; $i < $contarImagens; $i++) {
            foreach ($file_keys as $key) {
                $ImagemArray[$i][$key] = $imagem[$key][$i];
            }
        }

        for ($i = 0; $i < count($ImagemArray); $i++) {

            $extensao = strchr($ImagemArray[$i]['name'], '.');
            $filename = md5(time() . $ImagemArray[$i]['tmp_name']) . $extensao;

            $img = array('.jpg', '.jpeg', '.png', '.gif', '.JPG', '.JPEG', '.PNG', '.GIF');
            if (!in_array($extensao, $img)) {
                $resultado = '4';
            } else {
                $resultado = '3';
            }
        }

        if ($resultado == '3') {
            for ($i = 0; $i < count($ImagemArray); $i++) {


                $extensao = strchr($ImagemArray[$i]['name'], '.');
                $filename = md5(time() . $ImagemArray[$i]['tmp_name']) . $extensao;



                $pasta = '../img_resenhas/';

                if (!file_exists($pasta)) {
                    mkdir($pasta, 0755);
                }

                if (move_uploaded_file($ImagemArray[$i]['tmp_name'], $pasta . $filename)) {
                    $caminho = $filename;
                    $alt_imagem = gen_slug($ImagemArray[$i]['name']);
                    $sqlImagens = "INSERT INTO imagens(COD_RESENHA,CAMINHO_IMAGEM,ALT_IMAGEM,STATUS_IMAGEM)VALUES('$codResenha','$caminho','$alt_imagem','1')";
                    mysql_query($sqlImagens) or die(mysql_error());
                    $resultado = 3;
                }
            }
        }
        echo $resultado;
        break;

    case 'cadCOmentario':

        $c['TEXTO_COMENTARIO'] = mysql_real_escape_string($_POST['texto_comentario']);
        $c['NOTA_COMENTARIO'] = mysql_real_escape_string($_POST['notaResenha']);
        $c['COD_RESENHA'] = mysql_real_escape_string($_POST['cod_resenha']);
        $c['COD_USUARIO'] = mysql_real_escape_string($_SESSION['COD_USUARIO']);
        $c['DATAHORA_COMENTARIO'] = mysql_real_escape_string(date("Y-m-d H:i:s"));


        if ($c['TEXTO_COMENTARIO'] == "" or $c['NOTA_COMENTARIO'] == "") {
            echo '3';
        } else {
            
            $campos = gerarCampos($c);
            $valores = gerarValores($c);
            
            if (inserir('comentarios', $campos, $valores)) {

                echo '1';
            } else {

                echo '2';
            }
        }

        //1 - sucesso
        //2 - erro inesperado
        //3 - campos em branco
        break;
}
