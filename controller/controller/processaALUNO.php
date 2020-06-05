<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
		$NOME = $_POST['NOME'];
		$DATA = $_POST['DATA'];
		
		
		$query = "INSERT INTO ALUNO (NOME,DATA)
		VALUES(:NOME, :DATA)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':NOME', $NOME);
        $stmt->bindParam(':DATA', $DATA);
       
		 
		
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
}, 3000);
    </script>