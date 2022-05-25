<?php


if(isset($_POST['submit'])){

include ('config.php');
  
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $voucher = $_POST['voucher'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conexao = mysqli_connect(
      $host,
      $usuario,
      $senha,
      $bancodedados);

    mysqli_select_db($conexao, `$bancodedados`);
      $sql= "INSERT INTO usuarios(nome, cpf, email, telefone, voucher, senha) 
        VALUES ('$nome', '$email', '$telefone', '$voucher', '$senha', '$cpf')";
}
?>