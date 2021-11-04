<?php
    include 'bancoCadastro.php';

    session_start();
    if ($_SESSION['nome'] == NULL) {
    header("location: login.php");
}


    if ($_GET['cod']) {
	
		$sql = "SELECT * FROM cadastroprofissional WHERE cd_profissional = $_GET[cod]";
		$resultado = mysqli_query($conexao, $sql);
		$profissional = mysqli_fetch_array($resultado);
    } 
    

?>


<!DOCTYPE html>
    <html>
    <head>
        <title>CADASTRO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <form action="recebeProfissional.php" method="POST">
        
        <?php
            if ($_GET['cod']) {
                echo "<input readonly='readonly' type='text' name='cod' value='$_GET[cod]'><br><br>";
        } ?>

            <fieldset>
                <legend>ADICIONE O PROFISSIONAL</legend>
                    <input type="text" name="profissional"  value="<?php echo $profissional['nm_profissional']?>"  placeholder="Profissional"> 
                    <input type="text" name="telefone"      value="<?php echo $profissional['nr_telefone']?>"  placeholder="Telefone"><br><br>
                    <input type="text" name="email"         value="<?php echo $profissional['ds_email']?>"  placeholder="Email">
                    <input type="text" name="cpf"           value="<?php echo $profissional['nr_cpf']?>"  placeholder="CPF"><br><br>
                    <input type="text" name="rg"            value="<?php echo $profissional['nr_rg']?>"  placeholder="RG">
                    <input type="text" name="residencia"    value="<?php echo $profissional['nr_residencial']?>"  placeholder="Nº Residencial"><br><br>

                    <input type="submit" value="ENVIAR">
                </legend>
            </fieldset>

        </form>

