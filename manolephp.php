<?php

$dhost = 'localhost';
$ser = 'root';
$password = '';
$db = 'Manole';
 
  $mysqli = @new mysqli(
    $host,
    $user,
    $assword,
    $db
  );


    $nome = $_POST['nome'];
    $cfp = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $voucher = $_POST['voucher'];
    $email = $_POST['email'];
    $senhar= $_POST['senha'];

    if ($conexao -> connect_errno)
    echo "Falha na Conexao: (".$conexao -> connect_errno .")" . $conexao -> connect_errno;


?>








   

