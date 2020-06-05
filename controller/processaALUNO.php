<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		$NOME = $_POST['NOME'];
		
		
		$query = "INSERT INTO ALUNO ( NOME)
		VALUES( :NOME)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':NOME', $NOME);
		 
		
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
    window.location.href = '../view/ALUNO.php';
}, 3000);
    </script>