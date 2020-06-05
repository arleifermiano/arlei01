<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
		$EVENTOS = $_POST['EVENTOS'];
		$TIPO = $_POST['TIPO'];
		$DIA = $_POST['DIA'];
		$NUMERO = $_POST['NUMERO'];
		
		
		$query = "INSERT INTO EVENTOS (EVENTOS, DIA, TIPO, NUMERO)
		VALUES(:EVENTOS, :DIA, :TIPO, :NUMERO)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':EVENTOS', $EVENTOS);
        $stmt->bindParam(':TIPO', $TIPO);
        $stmt->bindParam(':DIA', $DIA);
        $stmt->bindParam(':NUMERO', $NUMERO);
       
		 
		
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
    window.location.href = '../view/EVENTOS.php';
}, 3000);
    </script>