<?php
session_start();
include_once './conexao/conect_db.php'
?>
<!DOCTYPE html>
<html lang="pt-br">   
    <head>       
        <meta charset="utf-8"/>        
        <title>Em Duvida - administração</title>       
        <link rel="stylesheet" type="text/css" href="css/style.css"/>      
        <script src="js/jscolor/jscolor.js"></script>     
        <script src="js/jquery-1.11.3.min.js"></script>    
        <script src="js/js.js"></script>    </head> 
    <body>
                <?php if (isset ( $_SESSION['email_usuario']) and $_SESSION['tipo_usuario'] == 2) { ?>    
                <?php
        include_once './header.php';
                @$link = $_GET['link'];
                $pag[1] = "paginas/frmCategoria.php";
                $pag[2] = "paginas/lstCategorias.php";
                $pag[3] = "paginas/frmProdutos.php";
                        $pag[4] = "paginas/lstProdutos.php";
                        if(!empty($link)) {
                if (file_exists($pag[$link])) {
        include $pag[$link];
        } else {

        }
        } else {

        }
        ?>        <?php } else { ?>      
        <form method="post" class="formulario" action="" id="logAdmin">         
            <label for="email">E-mail:</label>           
            <input type="email" name="email" class="input" id="email"/>        
            <label for="senha">Senha:</label>        
            <input type="password" name="senha" class="input" id="senha"/>         
            <input type="submit" value="Entrar" name="logar"/>       
        </form>
        <?php } ?>
                <?php
        if (isset($_POST['logar'])) {
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $sql = mysql_query("SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email' AND SENHA_USUARIO = '$senha' AND COD_TIPO = '2'");
                $numLinhas = mysql_num_rows($sql);
                $exec = mysql_fetch_array($sql);
                if ($numLinhas > 0) {
        $_SESSION['email_usuario'] = $exec['EMAIL_USUARIO'];
        $_SESSION['tipo_usuario'] = $exec['COD_TIPO'];
        $_SESSION['nome_usuario'] = $exec['NOME_USUARIO'];
        echo "<script>alert('Seja bem vindo" . $_SESSION['nome'] . "'); location.href='index.php'</script>";
    } else {
            echo "<script>alert('Verifique se digitou seus dados corretamente!')</script>";
    } if ($exec['COD_TIPO'] != 2) {
    echo "<script>alert('Verifique se você pode acessar este local!'); location.href='../'</script>";
                }
            } else {
                
            }
            ?>   
    </body>
</html>