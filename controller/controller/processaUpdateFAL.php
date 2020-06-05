
<?php

    include_once '../model/classes/conexao.php';

	if(isset($_POST['submit'])){

//  echo "MESES, FALTAS, ALUNO, id";
	
	$id = $_POST['id'];
		$ALUNO = $_POST['ALUNO'];
		$FALTAS = $_POST['FALTAS'];
		$MESES = $_POST['MESES'];

		$sql  = ' UPDATE adminfaltas SET ALUNO = ? , FALTAS = ?, MESES = ? WHERE id = ? ';
		try {
			$query = $conn->prepare($sql);
			$query->execute(Array($ALUNO,$MESES,$FALTAS,$id));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
?>

<script>
        window.setTimeout(function() {
    window.location.href = '../view/FALTASpricinpal.php';
}, 3000);
    </script>
	
	
	
	
	