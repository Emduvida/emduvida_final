<?php

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
                        echo 'Você não tem acesso lindo!';
                    } else {

                        if ($rs['COD_TIPO'] == 2) {
                            echo "Seja bem vindo Administrador";
                        }else{
                            echo "Seja bem vindo Master";
                        }
                        
                        //redireciona('admin/home');
                    }
                } else {
                    echo 'Usuario bloqueado';
                }
            } else {
                echo "Usuario não encontrado";
            }
            break;
    }
}