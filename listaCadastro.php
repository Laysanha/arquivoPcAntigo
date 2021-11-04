<?php
include 'bancoCadastro.php';

session_start();
        if ($_SESSION['nome'] == NULL) {
        header("location: login.php");
}

  $sql = "SELECT *, cadastroprofissional.nm_profissional, horariosdisponiveis.nr_horario
  FROM cadastropaciente 
  LEFT JOIN cadastroprofissional 
  ON profissional_codigo = cadastroprofissional.cd_profissional
  LEFT JOIN horariosdisponiveis
  ON horario_codigo = horariosdisponiveis.cd_horario;          
          ";

  $resultado= mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>lista</title>
</head>

<body>
 <div class="cadastro">
         <table class="tabela">
          <tr>
            <td>codigo</td>
            <td>paciente</td>
            <td>dtnascimento</td>
            <td>estadocivil</td>
            <td>profissao</td>
            <td>endereco</td>
            <td>peso</td>
            <td>altura</td>
            <td>cirurgias</td>
            <td>acidentes</td>
            <td>problemas</td>
            <td>medicamentos</td>
            <td>queixas</td>
            <td>exames</td>
            <td>Hora</td>
            <td>profissional</td>
            <td>editar</td>
            <td>exlcuir</td>
          </tr>
<?php
   ini_set('display_errors', 0 );
   while ($result=mysqli_fetch_array($resultado)) {
       echo "<tr>";
       echo "<td>$result[cd_paciente]</td>";
       echo "<td>$result[nm_paciente]</td>";
       echo "<td>$result[dt_nascimento]</td>";
       echo "<td>$result[ds_estadocivil]</td>";
       echo "<td>$result[ds_profissao]</td>";
       echo "<td>$result[ds_endereco]</td>";
       echo "<td>$result[ds_peso]</td>";
       echo "<td>$result[ds_altura]</td>";
       echo "<td>$result[ds_cirurgias]</td>";
       echo "<td>$result[ds_acidentes]</td>";
       echo "<td>$result[ds_problemassaude]</td>";
       echo "<td>$result[ds_medicamentos]</td>";
       echo "<td>$result[ds_queixas]</td>";
       echo "<td>$result[ds_exames]</td>";
       echo "<td>$result[nm_profissional]</td>";
       echo "<td>$result[nr_horario]</td>";

       echo "<td><a href='cadastrar.php?cod=$result[cd_paciente]'>editar</a></td>";
      echo "<td><a href='excluir.php?cod=$result[cd_paciente]'>excluir</a></td>";
       echo "</tr>";
   }
?>
 </table>


</body>
</html>