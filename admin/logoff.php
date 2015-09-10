<?php
session_start();
include_once './funcoes.php';

unset($_SESSION['nomeAdm']);
unset($_SESSION['codigoAdm']);
unset($_SESSION['emailAdm']);
unset($_SESSION['admLogado']);

redireciona('../');

