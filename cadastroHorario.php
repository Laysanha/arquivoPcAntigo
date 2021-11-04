<?php

	include 'bancoCadastro.php';

	session_start();
	if ($_SESSION['nome'] == NULL) {
	header("location: login.php");
}

	if ($_GET['cod']) {
	
		$sql = "SELECT nr_horario FROM horariosdisponiveis WHERE cd_horario = $_GET[cod]";
		$resultado = mysqli_query($conexao, $sql);
		$hora = mysqli_fetch_array($resultado);
	} 
?>

<meta charset="utf-8">

<h2>Cadastro de Horario</h2>

<form method="post" action="recebeHorario.php">
<?php
	if ($_GET['cod']) {
		echo "Código: <input readonly='readonly' type='text' name='cod' value='$_GET[cod]'><br><br>";
	}
?>
	<input type="time" name="horario" value="<?php echo $hora['nr_horario'] ?>"><br><br>
	<input type="submit" value="Enviar" />
</form>