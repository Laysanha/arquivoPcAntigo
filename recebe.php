<?php

include 'bancoCadastro.php';


	if ($_POST['codigo']) {
		if (!mysqli_query($conexao, "UPDATE cadastropaciente
                                                    SET 
                                                        nm_paciente          =  '$_POST[nome]', 
                                                        dt_nascimento        =  '$_POST[dtnascimento]',
                                                        ds_sexo              =  '$_POST[sexo]',
                                                        ds_estadocivil       =  '$_POST[estadocivil]',   
                                                        ds_profissao         =  '$_POST[profissao]' ,
                                                        nr_fone              =  '$_POST[fone]',
                                                        ds_endereco          =  '$_POST[endereco]', 
                                                        ds_peso              =  '$_POST[peso]',  
                                                        ds_altura            =  '$_POST[altura]',  
                                                        ds_cirurgias         =  '$_POST[cirurgias]', 
                                                        ds_acidentes         =  '$_POST[acidentes]', 
                                                        ds_problemassaude    =  '$_POST[problemassaude]',    
                                                        ds_medicamentos      =  '$_POST[medicamentos]',  
                                                        ds_queixas           =  '$_POST[queixas]',
                                                        ds_exames            =  '$_POST[exames]',
                                                        profissional_codigo  =  '$_POST[profissional]',
                                                        horario_codigo       =  '$_POST[horario]'
                                                    WHERE 
                                                        cd_paciente = ". $_POST['codigo'])) {
			                            die("Erro: " . mysqli_error($conexao));
		} 
	        } else {

		        if (!mysqli_query($conexao, "INSERT INTO cadastropaciente 	
                                                                (
                                                                    nm_paciente,
                                                                    dt_nascimento,  
                                                                    ds_sexo,    
                                                                    ds_estadocivil, 
                                                                    ds_profissao,   
                                                                    nr_fone,    
                                                                    ds_endereco,    
                                                                    ds_peso,    
                                                                    ds_altura,  
                                                                    ds_cirurgias,   
                                                                    ds_acidentes,   
                                                                    ds_problemassaude,  
                                                                    ds_medicamentos,    
                                                                    ds_queixas, 
                                                                    ds_exames,
                                                                    profissional_codigo,
                                                                    horario_codigo
                                                                ) 
                                                VALUES     (
                                                    '$_POST[nome]',
                                                    '$_POST[dtnascimento]',
                                                    '$_POST[sexo]',
                                                    '$_POST[estadocivil]',
                                                    '$_POST[profissao]' ,
                                                    '$_POST[fone]',
                                                    '$_POST[endereco]', 
                                                    '$_POST[peso]',
                                                    '$_POST[altura]',
                                                    '$_POST[cirurgias]',
                                                    '$_POST[acidentes]', 
                                                    '$_POST[problemassaude]', 
                                                    '$_POST[medicamentos]', 
                                                    '$_POST[queixas]',
                                                    '$_POST[exames]',
                                                    '$_POST[profissonal]',
                                                    '$_POST[horario]'
                                                    )
                                                    ")) {
			die("Erro: " . mysqli_error($conexao));
		}
	}
	


	

	header("location: listaCadastro.php");