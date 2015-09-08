<?php

    /*//casa 
    $host = 'localhost';
    $db = 'emduvidabd';
    $user = 'root';
    $password = '123456';
    
  
    //servidor
    $host = '179.188.16.43';
    $db = 'emduvida';
    $user = 'emduvida';
    $password = 'emduvidabd123';
  */


    $host = 'localhost';
    $db = 'emduvidabd';
    $user = 'root';
    $password = '12345678';

    $conn = @mysql_connect($host, $user, $password) or die(mysql_error());
    if($conn){
        
    }else{
 
     

    }
    mysql_select_db($db, $conn) or die(mysql_error());
