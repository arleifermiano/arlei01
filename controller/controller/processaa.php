
<?php

    include_once '../model/classes/conexao.php';

	if(isset($_POST['submit'])){
		
	$id = $_POST['id'];
		$NOME = $_POST['NOME'];
		$FAIXA = $_POST['FAIXA'];
		$NUMERO = $_POST['NUMERO'];

		$sql  = ' UPDATE aluno SET NOME = ? , FAIXA = ?, NUMERO = ? WHERE id_aluno = ? ';
		try {
			$query = $conn->prepare($sql);
			$query->execute(Array($NOME,$FAIXA,$NUMERO,$id));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
?>

<script>
        window.setTimeout(function() {
    window.location.href = '../view/VERatleca.php';
}, 3000);
    </script>