<?php

    include 'bancoCadastro.php';

	$horario   = $_POST['horario'];

	if ($_POST['cod']) {
		$sql = "UPDATE horariosdisponiveis SET 
                                                nr_horario= '$horario'

                                            WHERE cd_horario = " . $_POST['cod'];
	} else {
		$sql = "INSERT INTO horariosdisponiveis (nr_horario) VALUES ('$horario') ";
	}

	if (mysqli_query($conexao, $sql) == false) {
		die("Erro: " . mysqli_error($conexao));
	} else {
		header("location: listahorario.php");
	}