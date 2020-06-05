<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';
//include_once './conexao.php';
    try {
		
		$ALUNO = $_POST['ALUNO'];
		$FALTAS = $_POST['FALTAS']; 
	$MESES = $_POST['MESES'];
	//	$mensagens  = $_POST['mensagens'];
		
		
		$query = "INSERT INTO ADMINFALTAS  (ALUNO, FALTAS,MESES)
		VALUES(:ALUNO, :FALTAS, :MESES)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':ALUNO', $ALUNO);
        $stmt->bindParam(':FALTAS', $FALTAS);
        $stmt->bindParam(':MESES', $MESES);
//		$stmt->bindParam('DIA', $DIA);

		 
		
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
    window.location.href = '../view/FALTASpricinpal.php';
}, 3000);
    </script>