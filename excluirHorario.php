<?php
    ini_set('display_errors', 0 );
    include 'bancoCadastro.php';

    $codigo = $_GET['cod'];

    $sql = "DELETE FROM  horariosdisponiveis WHERE cd_horario = $_GET[cod]";

    if (mysqli_query($conexao, $sql) == false) {
        die("erro: " . mysqli_error($conexao));
    } else {
        header("location: listaHorario.php");
    }
