<?php require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

		verificaUsuario();

		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		$categoria_id = $_POST["categoria_id"];

		if(array_key_exists('usado',$_POST)){
			$usado = "true";
		}else{
			$usado = "false";
		}


		if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
			<p class="text-success">Produto <?php echo $nome; ?>, <?= $preco; ?>  adicionado com sucesso!</p>
		<?php } else { ?>
			$msg = mysqli_error($conexao);		
			<p class="text-danger">Produto <?php echo $nome; ?> não foi adicionado com sucesso: <?= $msg; ?></p>
		<?php } ?>
<?php include("rodape.php") ?>