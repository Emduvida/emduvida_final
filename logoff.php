<?php
session_start();

unset($_SESSION['COD_USUARIO']);
unset($_SESSION['NOME_USUARIO']);
unset($_SESSION['EMAIL_USUARIO']);
unset($_SESSION['usuarioLogado']);

echo "<script>location.href='home'</script>";