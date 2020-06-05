<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {


		$ALUNO = $_POST['ALUNO'];
		//$show = new dados();
		$DATA = $_POST['DATA'];
		$SITUACAO = $_POST['SITUACAO'];
		$MESES = $_POST['MESES'];
	//	$mensagens  = $_POST['mensagens'];
		
		
		$query = "INSERT INTO MENSALIDADE  (ALUNO, DATA, SITUACAO,MESES	)
		VALUES (:ALUNO, :DATA, :SITUACAO, :MESES	)";
        $stmt=$conn->prepare($query);
		
        $stmt->bindParam(':ALUNO', $ALUNO);
		$stmt->bindParam('DATA', $DATA);
		$stmt->bindParam('SITUACAO', $SITUACAO);
		$stmt->bindParam('MESES', $MESES);
		

		 
		
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
    window.location.href = '../view/MENSALIDADE.php';
}, 1000);
    </script>