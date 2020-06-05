<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
		$ANOTACOES = $_POST['ANOTACOES'];
		$TIPO = $_POST['TIPO'];
//		$DIA = $_POST['DIA'];
		
		
		$query = "INSERT INTO ANOTACOES (ANOTACOES,  TIPO)
		VALUES(:ANOTACOES, :TIPO)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':ANOTACOES', $ANOTACOES);
        $stmt->bindParam(':TIPO', $TIPO);
  //      $stmt->bindParam(':DIA', $DIA);
       
		 
		
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
    window.location.href = '../view/ANOTACOES.php';
}, 3000);
    </script>