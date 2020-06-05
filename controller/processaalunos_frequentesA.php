<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
//	$id = $_POST['id'];
		$ALUNO = $_POST['ALUNO'];
		$NUMERO = $_POST['NUMERO'];
		$FREQUENCIA = $_POST['FREQUENCIA']; 
		$DIA = $_POST['DIA'];
		$ANOTACOES = $_POST['ANOTACOES'];
		$OBSERVACAO = $_POST['OBSERVACAO'];
	//	$mensagens  = $_POST['mensagens'];
// INSERT INTO `alunos_frequentes` ( `NUMERO`, `ALUNO`, `FREQUENCIA`, `DIA`, `ANOTACOES`, `OBSERVACAO`)

$query = "INSERT INTO alunos_frequentes  (ALUNO,NUMERO,FREQUENCIA, DIA, ANOTACOES,OBSERVACAO)
VALUES(:ALUNO,:NUMERO,  :FREQUENCIA, :DIA, :ANOTACOES, :OBSERVACAO)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':ALUNO', $ALUNO);
        $stmt->bindParam(':NUMERO', $NUMERO);
        $stmt->bindParam(':FREQUENCIA', $FREQUENCIA);
		$stmt->bindParam('DIA', $DIA);
		$stmt->bindParam('ANOTACOES', $ANOTACOES);
		$stmt->bindParam('OBSERVACAO', $OBSERVACAO);
		 
		
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