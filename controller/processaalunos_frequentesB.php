<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
	$id = $_POST['id'];
//		$ALUNO = $_POST['ALUNO'];
		//$show = new dados();
	///	$FREQUENCIA = $_POST['FREQUENCIA']; 
		$DIA = $_POST['DIA'];
		//$ANOTACOES = $_POST['ANOTACOES'];
		//$NUMERO = $_POST['NUMERO'];
		//$OBSERVACAO = $_POST['OBSERVACAO'];
	//	$mensagens  = $_POST['mensagens'];
$query = " UPDATE alunos_frequentes SET  DIA = :DIA WHERE id = :id ";		


		
		//$query = "INSERT INTO alunos_frequentes  (ALUNO,FREQUENCIA, DIA, ANOTACOES)
		//VALUES(:ALUNO, :FREQUENCIA, :DIA, :ANOTACOES)";
        $stmt=$conn->prepare($query);
		$stmt->bindParam('DIA', $DIA);
		$stmt->bindParam('id', $id);
		 
		
        $stmt->execute();		
    } 
        catch (Exception $e) 
    { 
        echo $e->getMessage();
		
    } 
        $conn = null;
		
?>



<script>
        window.setTimeout(function() {
    window.location.href = '../view/alunos_frequentes2.php';
}, 1000);
    </script>