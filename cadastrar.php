<?php
include 'bancoCadastro.php';

session_start();
if ($_SESSION['nome'] == NULL) {
header("location: login.php");
}

if($_GET['cod']){
    $sql="SELECT  cd_paciente,nm_paciente, dt_nascimento, ds_sexo, ds_estadocivil, ds_profissao, nr_fone, ds_endereco, ds_peso, ds_altura, ds_cirurgias, ds_acidentes, ds_problemassaude, ds_medicamentos, ds_queixas, ds_exames FROM cadastropaciente WHERE cd_paciente=$_GET[cod]";
    
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado == false) {
        die("Erro: " . mysqli_error($conexao));
    } else {
        $paciente = mysqli_fetch_array($resultado);
    }
} 

    $sqlProfissional = "SELECT * FROM cadastroprofissional ORDER BY nm_profissional";
    $resultadoProfissional = mysqli_query($conexao, $sqlProfissional);

    $sqlHorario = "SELECT * FROM horariosdisponiveis ORDER BY nr_horario";
    $resultadoHorario = mysqli_query($conexao, $sqlHorario);


?>
<!DOCTYPE html>
<html>
<head>
	<title>CADASTRO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        <form action="recebe.php" method="POST">

            <?php  if($_GET['cod']){  ?>
                    <input type="text" readonly="readonly" value="<?php echo $paciente['cd_paciente']?>" name="codigo" class="inputs" ><br></br>
            <?php } ?>    


            <input type="text" value="<?php echo $paciente['nm_paciente']?>" name="nome" class="inputs" placeholder="NOME"><br><br>
            <input type="date" value="<?php echo $paciente['dt_nascimento']?>" name="dtnascimento" class="inputs" placeholder="DATANASCIMENTO"><br><br>
            <input type="text" value="<?php echo $paciente['ds_sexo']?>" name="sexo" class="inputs" placeholder="SEXO"><br><br>
            <input type="text" value="<?php echo $paciente['ds_estadocivil']?>" name="estadocivil" class="inputs" placeholder="ESTADO CIVIL"><br><br>
            <input type="text" value="<?php echo $paciente['ds_profissao']?>" name="profissao" class="inputs"placeholder="PROFISSÃO"><br><br>
            <input type="text" value="<?php echo $paciente['nr_fone']?>"  name="fone" class="inputs" placeholder="FONE"><br><br>
            <input type="text" value="<?php echo $paciente['ds_endereco']?>" name="endereco"class="inputs" placeholder="ENDEREÇO"><br><br>
            <input type="text" value="<?php echo $paciente['ds_peso']?>" name="peso" class="inputs"placeholder="PESO"><br><br>
            <input type="text" value="<?php echo $paciente['ds_altura']?>" name="altura" class="inputs" placeholder="ALTURA"><br><br> 
            <input type="text" value="<?php echo $paciente['ds_cirurgias']?>" name="cirurgias" class="inputs" placeholder="CIRURGIAS"><br><br> 
            <input type="text" value="<?php echo $paciente['ds_acidentes']?>" name="acidentes" class="inputs" placeholder="ACIDENTES" ><br><br>
            <input type="text" value="<?php echo $paciente['ds_problemassaude']?>" name="problemassaude" class="inputs"placeholder="PROBLEMASSAUDE"><br><br>
            <input type="text" value="<?php echo $paciente['ds_medicamentos']?>" name="medicamentos" class="inputs" placeholder="MEDICAMENTOS"><br><br>
            <input type="text" value="<?php echo $paciente['ds_queixas']?>" name="queixas" class="inputs" placeholder="QUEIXAS"><br><br>
            <input type="text" value="<?php echo $paciente['ds_exames']?>" name="exames" class="inputs" placeholder="EXAMES"><br><br>

            
            <select name="profissional">
                <option>  Profissional  </option>

            <?php
                    while ($linha = mysqli_fetch_array($resultadoProfissional)) {

                        if ($linha['cd_profissional'] == $produto['cd_profissional']) {
                            echo "<option value='$linha[cd_profissional]' selected='selected'>";
                        
                        } else {
                            echo "<option value='$linha[cd_profissional]'>";
                        }		
                            echo $linha['nm_profissional'];
                            echo "</option>";
                    }
            ?>
            </select> 
            
            </br></br>
            
            <select name="horario">
                <option>  Horário  </option>

            <?php
                    while ($linha = mysqli_fetch_array($resultadoHorario)) {

                        if ($linha['cd_horario'] == $produto['cd_horario']) {
                            echo "<option value='$linha[cd_horario]' selected='selected'>";
                        
                        } else {
                            echo "<option value='$linha[cd_horario]'>";
                        }		
                            echo $linha['nr_horario'];
                            echo "</option>";
                    }
            ?>
            </select>



            <input type="submit" value="CADASTRAR"  id= "cadastrarPaciente" class="inputscadastro"name="cadastrar"/>
            </form>

        </div>
	<div id="rodape">	
	
	</div>
</body>
</html>