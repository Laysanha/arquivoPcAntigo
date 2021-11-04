<?php

    include 'bancoCadastro.php';

	$profissioanl   = $_POST['profissional'];
	$telefone       = $_POST['telefone'];
	$email          = $_POST['email'];
	$cpf            = $_POST['cpf'];
    $rg             = $_POST['rg'];
	$residencia     = $_POST['residencia'];
    

	if ($_POST['cod']) {
		$sql = "UPDATE cadastroprofissional SET 
                                                nm_profissional = '$profissioanl',
                                                nr_telefone= '$telefone',
                                                ds_email= '$email',
                                                nr_cpf= '$cpf',
                                                nr_rg= '$rg',
                                                nr_residencial= '$residencia'
        
                                            WHERE cd_profissional = " . $_POST['cod'];
	} else {
		$sql = "INSERT INTOcadastroprofissional (cd_profissional, nm_profissional, nr_telefone, ds_email, nr_cpf, nr_rg, nr_residencial) VALUES ('$profissioanl','$telefone','$email','$cpf','$rg','$residencia') ";
	}

	if (mysqli_query($conexao, $sql) == false) {
		die("Erro: " . mysqli_error($conexao));
	} else {
		header("location: listaProfissional.php");
	}