<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
		$ALUNO = $_POST['ALUNO'];
		//$show = new dados();
		$FREQUENCIA = $_POST['FREQUENCIA']; 
		$DIA = $_POST['DIA'];
		$NUMERO = $_POST['NUMERO'];
		
	//	$mensagens  = $_POST['mensagens'];
		
		
		$query = "INSERT INTO chamadab  (ALUNO, FREQUENCIA, DIA,NUMERO)
		VALUES( :ALUNO, :FREQUENCIA, :DIA, :NUMERO)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':ALUNO', $ALUNO);
        $stmt->bindParam(':FREQUENCIA', $FREQUENCIA);
		$stmt->bindParam('DIA', $DIA);
		$stmt->bindParam('NUMERO', $NUMERO);
		
		 
		
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