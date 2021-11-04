<?php 
    session_start();
    include 'bancoCadastro.php';

    if($_POST) {
        
        $login = $_POST['nome'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT id_usuario FROM usuario WHERE nm_nome = '$login' and ds_senha = '$senha'";
        $usuario = mysqli_fetch_array(mysqli_query($conexao,$sql));
        
        if ($usuario != null){
            $_SESSION['nome'] = $_POST['nome'];
            header("location: inicio.php");
        } else {
            $mensagemErro = "Cadastro Incorreto";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="topo">

</div>
    <div class="corpo">
        <p> <?php 
            echo "<div class='erro'> $mensagemErro </div>";
        ?>            
        </p>
    </div>


        <div class="cadastro">
                <form method="POST" action=""> 

                    <input type="text"     name="nome"    placeholder=" Nome" class="inputs">      <br><br>    
                    <input type="password" name="senha"   placeholder=" Senha" class="inputs">     <br><br>  
                <br>
                    <input type="submit" id="botao" class="botaoenviar"  value="LOGIN">   
            
            
            <a href="cadastrologin.php" id="botaoCadastro" class="botaocadastro">Ainda não criou uma conta? Cadastre-se</a>

                </form>
        </div>
</body>
</html>
