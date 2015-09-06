
<?php

session_start();

unset( $_SESSION['email_usuario']);
unset( $_SESSION['tipo_usuario']);
unset( $_SESSION['nome_usuario']);
unset( $_SESSION['admLogado']);


echo "<script>location.href='../home'</script>";
