<?php
    include ('conexao.php');
    $nome = $_POST['login'];
    $con = conectar();
    $senha = $_POST['pass'];
    $sql = "Select * from usuario where nome = '$nome' and senha = '$senha' ";
    $pull = mysqli_query($con,$sql) or die('Login ou senha errados');

    if ($pull){
        header("Location:telaInicial.html");
    }
?>