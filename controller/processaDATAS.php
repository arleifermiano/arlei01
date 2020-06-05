<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
//		$ALUNO = $_POST['ALUNO'];
		//$show = new dados();
	//	$FREQUENCIA = $_POST['FREQUENCIA']; 
		$DIA = $_POST['DIA'];
	$LOCAL  = $_POST['LOCAL'];
	$INFORMACOES  = $_POST['INFORMACOES'];
	$NO_MES  = $_POST['NO_MES'];
	$DESCRICAO  = $_POST['DESCRICAO'];
		
		
		$query = "INSERT INTO dias_aulas   ( DIA ,LOCAL ,INFORMACOES,NO_MES, DESCRICAO)
		VALUES( :DIA, :LOCAL, :INFORMACOES, :NO_MES,:DESCRICAO)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam('DIA', $DIA);
        $stmt->bindParam('LOCAL', $LOCAL);
        $stmt->bindParam('INFORMACOES', $INFORMACOES);
        $stmt->bindParam('NO_MES', $NO_MES);
        $stmt->bindParam('DESCRICAO', $DESCRICAO);

		 
		
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
    window.location.href = '../view/DIAS.php';
}, 1000);
    </script>