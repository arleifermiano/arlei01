
<?php
// ECHO "id DIA LOCAL INFORMACOES DESCRICAO NO_MES";


    include_once '../model/classes/conexao.php';

	if(isset($_POST['submit'])){
		
	$id = $_POST['id'];
		$DIA = $_POST['DIA'];
	$LOCAL  = $_POST['LOCAL'];
	$INFORMACOES  = $_POST['INFORMACOES'];
	$NO_MES  = $_POST['NO_MES'];
	$DESCRICAO  = $_POST['DESCRICAO'];
//$query = "INSERT INTO dias_aulas   (  DIA ,     LOCAL ,     INFORMACOES,       NO_MES,    DESCRICAO)
		$sql  = ' UPDATE dias_aulas SET DIA = ? , LOCAL = ? , INFORMACOES = ? ,  NO_MES = ?, DESCRICAO = ?  WHERE id = ? ';
		try {
			$query = $conn->prepare($sql);
			$query->execute(Array($DIA,$LOCAL,$INFORMACOES,$NO_MES,$DESCRICAO,$id));
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
?>

<script>
        window.setTimeout(function() {
    window.location.href = '../view/DATAS.php';
}, 3000);
    </script>