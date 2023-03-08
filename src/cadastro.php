<?php
    include ("conexao.php");
    $con = conectar();
    $nome = $_POST['nome'];
    $senha = $_POST['passnov'];
    $conf = $_POST['passconf'];
    $check = "select * from usuario where nome = '$nome'";
    $teste = mysqli_query($con, $check);
    $linhas = mysqli_num_rows($teste);
    if ($linhas >= 1){
        echo"<script>alert('usuario existente')</script>";
    }else{
        if ($senha == $conf){
            $sql = "insert into usuario(nome, senha) values ('$nome', '$senha')";
            $pull = mysqli_query($con, $sql);
            if($pull){
                header("Location:index.html");
            }
        }else{
            echo"<script>alert('senhas não sao iguais')</script>";
            header("Location:telaCadastro.html");
        }
    
    }
    
    
?>