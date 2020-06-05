
	<html>
<?php  require_once('menu.php'); ?>
<?php  require_once('css.php'); ?>

	<body>
<?PHP
	
	include("../controller/Conexao.php");

	 
	//iniciando a conexão com o banco de dados
	$cx = mysqli_connect("127.0.0.1", "root", "");	 
	
mysqli_set_charset($cx,"utf8"); 
	//selecionando o banco de dados
	$db = mysqli_select_db($cx, "LUCAS");
	?>			

			<div class="centro">
				<!-------------------------------------- -->
				
			<form method="post" action="../controller/processaMATRICULA.php" id="">
					<fieldset class="f1" >
						ALUNO:</br></br>
						<select name="ALUNO" id="ALUNO">
						<?php
						$sql = mysqli_query($cx, "SELECT ID_ALUNO, NOME FROM ALUNO ORDER BY ID_ALUNO") or die(mysqli_error($cx)); //caso haja um erro na consulta
						?>
						
						<?PHP 
while($aux = mysqli_fetch_assoc($sql)) {
?>
			<option value="<?PHP ECHO $aux['ID_ALUNO']?>"><?PHP ECHO strtoupper($aux['NOME'])?></option>
<?PHP
}
?>

						</select>
						</fieldset>
					<fieldset class="f1" >
						CURSO:</br></br>
						<select name="CURSO" id="CURSO">
						<?php
						$sql = mysqli_query($cx, "SELECT ID_CURSO, NOME FROM CURSO ORDER BY ID_CURSO") or die(mysqli_error($cx)); //caso haja um erro na consulta
						?>
						
						<?PHP 
while($aux = mysqli_fetch_assoc($sql)) {
?>
			<option value="<?PHP ECHO $aux['ID_CURSO']?>"><?PHP ECHO strtoupper($aux['NOME'])?></option>
<?PHP
}
?>

						</select>
</fieldset>						
						
						 	<fieldset class="f1">
						MENSALIDADE: </br></br>
						<input class="fa" id="MENSALIDADE" type="tex" name="MENSALIDADE">
					
					
					</fieldset>

						 	<fieldset class="f1">
						VALOR: </br></br>
						<input class="fa" id="VALOR" type="tex" name="VALOR">
					
					
					</fieldset>

						<input type="submit" value="Entrar!" class="button" name="Entrar" /></p>
					</fieldset>
				</form>	
			</div>
				<DIV class="esq">
			<form method="post" action="../controller/processaALUNO.php" id="">
					<fieldset class="f1" >
						
						 	<fieldset class="f1">
						NOME: </br></br>
						<input class="fa" id="NOME" type="tex" name="NOME">
					
					
					</fieldset>

						</fieldset>
								
						
						<input type="submit" value="Entrar!" class="button" name="Entrar" /></p>
					</fieldset>
				</form>	
			</div>	

	</div>
			
			
				<!--/////////////////////////////////-->
			 
	</body>
	

	</html>