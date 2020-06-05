<?php


    include_once '../model/classes/conexao.php';

	if(isset($_POST['submit'])){
		$id    = $_POST['id'];
		
		$sql  = ' DELETE FROM aluno WHERE id_aluno = ? ';
		try {
			$query = $conn->prepare($sql);

			$query->bindParam(1,$id,PDO::PARAM_INT);
			$query->execute();
			echo 'repertorio deletado!';
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
	
	
?>


 
<script>
        window.setTimeout(function() {
    window.location.href = '../view/ATLECA.php';
}, 3000);
    </script>