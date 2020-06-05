<?php 
    include_once '../model/classes/dados.php';
    include_once '../model/classes/conexao.php';

    try {
		
		$nome = $_POST['nome'];
		$show = new dados();
		$sobrenome = $_POST['sobrenome']; 
		$telefone = $_POST['telefone'];
		$mensagens  = $_POST['mensagens'];
		
		
		$query = "INSERT INTO mensagens_cli (nome,sobrenome, telefone, mensagens ) VALUES(:nome,:sobrenome, :telefone, :mensagens )";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
		$stmt->bindParam(':telefone', $telefone);
		$stmt->bindParam(':mensagens', $mensagens);
		 
		
        $stmt->execute();		
    } 
        catch (Exception $e) 
    { 
        echo $e->getMessage(); 
    } 
        $conn = null;
		
?>
<?php 
    echo '<h1>'.$show->dadosCadastrado().'</h1>' . '<br />'; 

?> 
 <script>
        window.setTimeout(function() {
    window.location.href = '../view/formulario.php';
}, 3000);
    </script>
				<?php  require_once('mensagem_cadastro.php'); ?>