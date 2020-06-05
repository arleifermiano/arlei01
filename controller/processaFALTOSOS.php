<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
		$ALUNO = $_POST['ALUNO'];
		//$show = new dados();
		$FREQUENCIA = $_POST['FREQUENCIA']; 
	//	$DIA = $_POST['DIA'];
	//	$mensagens  = $_POST['mensagens'];
		
		
		$query = "INSERT INTO FALTOSOS  (ALUNO, FREQUENCIA)
		VALUES(:ALUNO, :FREQUENCIA)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':ALUNO', $ALUNO);
        $stmt->bindParam(':FREQUENCIA', $FREQUENCIA);
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
    window.location.href = '../view/CHAMADA.php';
}, 1000);
    </script>