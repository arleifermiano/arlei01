 <?php

    include_once '../model/classes/conexao.php';


		if(isset($_POST['submit'])){
			
				//$CODIGO = $_POST['CODIGO'];
				$ALUNO = $_POST['ALUNO'];
				$NUMERO = $_POST['NUMERO'];
				$FREQUENCIA = $_POST['FREQUENCIA'];
		      $result_msg_cont = "UPDATE chamada SET ALUNO=:ALUNO, NUMERO=:NUMERO WHERE id=$id";
//				$sql = ' UPDATE chamada  SET ALUNO = ? , NUMERO = ? ,  FREQUENCIA = ? WHERE ID_CHA = ?';
			try {
			$query = $conn->prepare($sql);
			$query->execute(array($ALUNO,$NUMERO,$FREQUENCIA));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
		
?>
