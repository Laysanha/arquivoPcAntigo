<?php
error_reporting(E_ALL ^E_NOTICE);

$host="localhost";
$login="root";
$senha="";
$banco="tcc";

$conexao= mysqli_connect (
                            $host,
                            $login,
                            $senha,
                            $banco );