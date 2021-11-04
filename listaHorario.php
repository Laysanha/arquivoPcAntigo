<?php

include 'bancoCadastro.php';

session_start();
if ($_SESSION['nome'] == NULL) {
header("location: login.php");
}

	$sql = "SELECT * FROM  horariosdisponiveis";
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
        		<td>Horário</td>
                <td></td>
                <td></td>
        	</tr>

            <?php
        	while($linha = mysqli_fetch_array($resultado)) {
        		echo "<tr>";
        		echo "<td>$linha[cd_horario]</td>";
                echo "<td>$linha[nr_horario]</td>";
        		
        		echo "<td>  <a href='cadastroHorario.php?cod=$linha[cd_horario]'> Edit</a>   </td> ";
        		echo "<td>  <a href='excluirHorario.php?cod=$linha[cd_horario]'>EXC</a>  </td> ";
        	}
        ?>
        </table>
