<?php

include 'bancoCadastro.php';

session_start();
if ($_SESSION['nome'] == NULL) {
header("location: login.php");
}

	$sql = "SELECT * FROM cadastroprofissional";
	$resultado = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>CADASTRO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <table border="1">
        	<tr>
        		<td>Cógigo</td>
        		<td>Nome</td>
        		<td>Telefone</td>
                <td>Email</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Nº Residencial</td>

        	</tr>
        <?php
        	while($linha = mysqli_fetch_array($resultado)) {
        		echo "<tr>";
        		echo "<td>$linha[cd_profissional]</td>";
                echo "<td>$linha[nm_profissional]</td>";
        		echo "<td>$linha[nr_telefone]</td>";
        		echo "<td>$linha[ds_email]</td>";
                echo "<td>$linha[nr_cpf]</td>";
        		echo "<td>$linha[nr_rg]</td>";
        		echo "<td>$linha[nr_residencial]</td>";
                
        		echo "<td>  <a href='cadastroProfissional.php?cod=$linha[cd_profissional]'> Edit</a>   </td> ";
        		echo "<td>  <a href='excluirProfissional.php?cod=$linha[cd_profissional]'>EXC</a>  </td> ";
        	}
        ?>
        </table>


