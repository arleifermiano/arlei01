<?php 
//    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		$ALUNO= $_POST['ALUNO'];
		$CURSO = $_POST['CURSO'];
		$MENSALIDADE = $_POST['MENSALIDADE'];
		$VALOR = $_POST['VALOR'];
		
		
		$query = "INSERT INTO matricula ( ALUNO, CURSO, MENSALIDADE, VALOR)
		VALUES( :ALUNO, :CURSO, :MENSALIDADE, :VALOR
		)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':ALUNO', $ALUNO);
        $stmt->bindParam(':CURSO', $CURSO);
        $stmt->bindParam(':MENSALIDADE', $MENSALIDADE);
        $stmt->bindParam(':VALOR', $VALOR);
       
		 
		
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
    window.location.href = '../view/MATRICULA.php';
}, 3000);
    </script>