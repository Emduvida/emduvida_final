<?php

include_once 'conexao/conect_db.php';

function inserir($tabela, $campos, $valores) {

    $exec = mysql_query("INSERT INTO $tabela (" . $campos . ") VALUES(" . $valores . ")") or die(mysql_error());
    if ($exec == true) {
        return true;
    } else {
        return mysql_error();
    }
}

function listar($tabela, $campos = "") {

    $sql = "SELECT ";
    if ($campos == "") {
        $sql .= " * ";
    } else {
        $sql .= " $campos ";
    }

    $sql .= " FROM $tabela";

    $exec = mysql_query($sql);
    return $exec;
}

function selecionar($tabela, $identificador, $valor, $campos = "") {
    $sql = "SELECT ";
    if ($campos == "") {
        $sql .= " * ";
    } else {
        $sql .= " $campos ";
    }

    $sql .= " FROM $tabela WHERE $identificador = '{$valor}'";


    $exec = mysql_query($sql);
    $rs = mysql_fetch_array($exec);
    return $rs;
}

function contarLinhas($sql) {



    $exec = mysql_query($sql);

    return mysql_num_rows($exec);
}

function alterar($tabela, $camposVal, $campo, $valor, $vaiPara) {
    $sql = "UPDATE $tabela SET $camposVal WHERE $campo = '$valor'";
    if (mysql_query($sql)) {
        echo "<script>alert('Dados alterados com sucesso!'); location.href='$vaiPara'</script>";
    } else {
        echo mysql_error();
    }
}

function gerarCampos($campos) {
    $cps = implode(',', array_keys($campos));
    return $cps;
}

function gerarValores($valores) {
    $values = "'" . implode("', '", array_values($valores)) . "'";
    return $values;
}

function gerarCamposAlteracao($u) {
    foreach ($u as $key => $value) {
        $updates[] = "$key = '$value'";
    }
    $qr = implode(', ', $updates);
    return $qr;
}

function mask($val, $mask) {
    $maskared = '';
    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
        if ($mask[$i] == '#') {
            if (isset($val[$k]))
                $maskared .= $val[$k++];
        }
        else {
            if (isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }
    return $maskared;
}

function redireciona($caminho) {

    echo "<script>location.href='$caminho'</script>";
}

function alert($mensagem) {
    echo "<script>alert('$mensagem')</script>";
}

function retorna() {
    echo "<script>history.back(-2)</script>";
}

function upMultiplasImagens($imagem) {

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

        $img = array('.jpg', '.jpeg', '.png', '.gif');

        if (!in_array($extensao, $img)) {
            $resultado = '2';
        } else {
            $pasta = '../img_resenhas/';

            if (!file_exists($pasta)) {
                mkdir($pasta, 0755);
            }

            if (move_uploaded_file($ImagemArray[$i]['tmp_name'], $pasta . $filename)) {

                $resultado = 3;
            }
        }
    }
}

function listarLimite($tabela, $limite, $order = "", $campo = "", $valor = "") {

    if ($campo == "" && $valor == "") {
        $sql = "SELECT * FROM {$tabela} $order LIMIT $limite ";
    } else {
        $sql = "SELECT * FROM {$tabela} WHERE {$campo} = '{$valor}' $order LIMIT $limite ";
    }



    $exec = mysql_query($sql) or die(mysql_error());
    return $exec;
}

function resumo($string, $chars) {
    if (strlen($string) > $chars) {
        while (substr($string, $chars, 1) <> ' ' && ($chars < strlen($string))) {
            $chars++;
        };
    };
    return substr($string, 0, $chars);
}

;

function upImagem($imagem, $diretorio) {

    $extensao = strchr($imagem['name'], '.');
    $filename = md5(time() . $imagem['tmp_name']) . $extensao;

    $img = array('.jpg', '.jpeg', '.png', '.gif');

    if (!in_array($extensao, $img)) {

        $resultado = '2';
    } else {

        $pasta = $diretorio;

        if (!file_exists($pasta)) {

            mkdir($pasta, 0755);
        }

        if (move_uploaded_file($imagem['tmp_name'], $pasta . $filename)) {

            return $filename;
        }
    }
}

function gen_slug($str) {
    # special accents
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?');
    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
    return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), str_replace($a, $b, $str)));
}
