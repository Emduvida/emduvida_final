<?php

session_start();
include_once '../funcoes.php';
include_once '../conexao/conect_db.php';
$ac = $_POST['acao'];

if (isset($ac)) {
    switch ($ac) {
        case 'loginAdm':

            $c['EMAIL_USUARIO'] = mysql_real_escape_string($_POST['email']);
            $c['SENHA_USUARIO'] = mysql_real_escape_string(base64_encode(md5($_POST['senha'])));

            $sql = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '{$c['EMAIL_USUARIO']}' AND SENHA_USUARIO = '{$c['SENHA_USUARIO']}'";
            $exec = mysql_query($sql);

            $n = contarLinhas($sql);

            if ($n == 1) {

                $rs = mysql_fetch_assoc($exec);

                if ($rs['STATUS_USUARIO'] == 1) {

                    if ($rs['COD_TIPO'] == 1) {
                        echo '3';
                    } else {

                        if ($rs['COD_TIPO'] == 2) {

                            $_SESSION['admLogado'] = 2;
                            echo "4";
                        } else {

                            $_SESSION['admLogado'] = 3;

                            echo "5";
                        }


                        $_SESSION['nomeAdm']    = $rs['NOME_USUARIO'];
                        $_SESSION['codigoAdm']  = $rs['COD_USUARIO'];
                        $_SESSION['emailAdm']   = $rs['EMAIL_USUARIO'];
                    }
                } else {

                    echo '2';
                }
            } else {

                echo "1";
            }


            //FALLBACK
            //
            // 1 - Usuario não encontrado!
            // 2 - Usuario bloqueado
            // 3 - tipo não tem acesso
            // 4 - Administrador comum
            // 5 - Administrador Master
            break;
    }
}   
 
 
            


