
<?php

    include_once '../model/classes/conexao.php';

// echo " id,ALUNO,FREQUENCIA,DIA,NUMERO";
	if(isset($_POST['submit'])){
		
	$id = $_POST['id'];
		$ALUNO = $_POST['ALUNO'];
		$FREQUENCIA = $_POST['FREQUENCIA'];
		$NUMERO = $_POST['NUMERO'];
		$DIA = $_POST['DIA'];
		

//		$sql  = 'UPDATE `chamada` SET `ALUNO` = '3', `FREQUENCIA` = '3', `DIA` = '2019-03-13',
//			 `NUMERO` = '32' WHERE `chamada`.`id` = 538
		$sql  = ' UPDATE chamadab SET ALUNO = ? , FREQUENCIA = ?,  DIA = ?, NUMERO = ?
		WHERE id = ? ';
		
		try {
			$query = $conn->prepare($sql);
			$query->execute(Array($ALUNO,$FREQUENCIA, $DIA,$NUMERO, $id));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
?>

<script>
        window.setTimeout(function() {
    window.location.href = '../view/VER2.php';
}, 3000);
    </script>