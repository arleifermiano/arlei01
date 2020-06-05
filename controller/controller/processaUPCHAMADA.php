
<?php

    include_once '../model/classes/conexao.php';

	if(isset($_POST['submit'])){
		$CODIGO = $_POST['CODIGO'];
		$ALUNO = $_POST['ALUNO'];
		//$show = new dados();
		$FREQUENCIA = $_POST['FREQUENCIA']; 
		$DIA = $_POST['DIA'];
		$NUMERO = $_POST['NUMERO'];
		
	//            UPDATE `chamada` SET `ALUNO` = '3', `FREQUENCIA` = '1', `DIA` = '2019-05-21' WHERE `chamada`.`CODIGO` = 1;	
		$sql  = ' UPDATE chamada  SET ALUNO = ?, FREQUENCIA = ?, DIA = ?, NUMERO = ? WHERE CODIGO = ? ';
		try {
			$query = $conn->prepare($sql);
			$query->execute(Array($ALUNO,$FREQUENCIA,$DIA,$NUMERO));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
?>

<script>
        window.setTimeout(function() {
    window.location.href = '../view/VER.php';
}, 3000);
    </script>