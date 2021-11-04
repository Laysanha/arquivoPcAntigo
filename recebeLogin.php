<?php
    include 'bancoCadastro.php';

    $login = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];


    $sql = "INSERT INTO usuario (nm_nome, ds_senha, ds_email) VALUES ('$login' , '$senha', '$email')";
    
    mysqli_query($conexao, $sql);
    
	header("location: login.php");
    
?>

