<html>
					<?php require_once  ("css.php");
					require_once  ("menu.php");
	//				require_once  ("header.php");
?>					
<DIV CLASS="CENTRO">
<?PHP
	//iniciando a conexão com o banco de dados
	$cx = mysqli_connect("127.0.0.1", "root", "");	 
	
mysqli_set_charset($cx,"utf8"); 
	//selecionando o banco de dados
	$db = mysqli_select_db($cx, "LUCAS");//criando a query de consulta à tabela criada

	
$sql = mysqli_query($cx, "SELECT 
				C.NOME AS CURSO,
				AL.NOME,
				MENSALIDADE,
				VALOR			FROM 
			MATRICULA AS M
							INNER JOIN aluno AS AL ON AL.ID_ALUNO = M.ALUNO
								INNER JOIN CURSO AS C ON C.ID_CURSO = M.CURSO
								
								
					") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);
 
 
echo "
<table>
  <tr>
  

    <th>NOME</th>
    <th>CURSO</th>
    <th>MENSALIDADE</th>
    <th>VALOR</th>
</tr>"; 
  
//pecorrendo os registros da consulta.
while($aux = mysqli_fetch_assoc($sql))
{ECHO "<tr>";
	
	
 	
    ECHO "<td>";
	echo"	<fieldset class='f1'>";
	echo " ".$aux["NOME"]."<br /><br/>";
	echo"	</fieldset >";
	echo " </td>";
	
	
    ECHO "<td>";
	echo"	<fieldset class='f2'>";
	echo " ".$aux["CURSO"]."<br /><br/>";
	echo"	</fieldset>";
	echo " </td>";
	echo " </td>";
	
    ECHO "<td>";
	echo"	<fieldset class='f2'>";
	echo " ".$aux["MENSALIDADE"]."<br /><br/>";
	echo"	</fieldset>";
	echo " </td>";
	echo " </td>";
	
    ECHO "<td>";
	echo"	<fieldset class='f2'>";
	echo " ".$aux["VALOR"]."<br /><br/>";
	echo"	</fieldset>";
	echo " </td>";
	echo " </td>";
	
	ECHO "</tr>";
	
}

	?>
	
</div>
</body></html>	
	</html>
	