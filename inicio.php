<?php 

	session_start();
        if ($_SESSION['nome'] == NULL) {
        header("location: login.php");
    }

?>
    oi 
    <a href="deslogar.php" id="botaoCadastro" class="botaocadastro">deslogar</a>

