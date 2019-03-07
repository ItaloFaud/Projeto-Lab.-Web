<?php
error_reporting(0);

if (isset($_POST['form']) && !empty($_POST['form']) && isset($_POST['id']) && !empty($_POST['id'])) {
	if ($_POST['form'] == 'cat' && isset($_POST['nome'])) {
		include "../DAO/categoriaDAO.php";

		$cat = new Categoria;
		$catDAO = new CategoriaDAO;

		$cat->setId($_POST['id']);
		$cat->setNome($_POST['nome']);

		if ($catDAO->Atualizar($cat) == 1) {
			echo '
					<script type="text/javascript">
						alert("Categoria de id ('.$_POST['id'].') atualizada");
						location.href = "index.php";
					</script>
				';
		}else{
			echo '
					<script type="text/javascript">
						alert("Não houve nenhuma ação");
						location.href = "index.php";
					</script>
				';
		}
	
	}elseif ($_POST['form'] == 'produ' && isset($_POST['nome']) && isset($_POST['categoria']) && isset($_POST['valor']) && isset($_FILES['img']['name']) && isset($_POST['descricao'])) {
		# code...
		include "../DAO/produtoDAO.php";

		$pro= new Produto;
		$proDAO= new ProdutoDAO;

		$pro->setId($_POST['id']);
		$pro->setIdcategoria($_POST['categoria']);
		$pro->setNome($_POST['nome']);
		$pro->setValor($_POST['valor']);
		$pro->setDescricao($_POST['descricao']);
		$pro->setImg($_FILES['img']['name']);

		if ($proDAO->Atualizar($pro) == 1) {
			# code...
			move_uploaded_file($_FILES['img']['tmp_name'], '../imgs/'.$_FILES['img']['name']);
			echo '
					<script type="text/javascript">
						alert("Produto de id ('.$_POST['id'].') atualizado");
						location.href = "index.php";
					</script>
				';
			
		}else{
			echo '
					<script type="text/javascript">
						alert("Não houve nenhuma ação");
						location.href = "index.php";
					</script>
				';
		}

	}elseif ($_POST['form'] == 'promo' && isset($_POST['produto']) && isset($_POST['porcento']) && isset($_POST['estado'])) {
		# code...
		include "../DAO/promocaoDAO.php";

		$pro = new Promocao;
		$proDAO= new PromocaoDAO;

		$pro->setId($_POST['id']);
		$pro->setIdproduto($_POST['produto']);
		$pro->setPorcentagem($_POST['porcento']);
		$pro->setAtiva($_POST['estado']);

		if ($proDAO->Atualizar($pro) == 1) {
			# code...
			echo '
					<script type="text/javascript">
						alert("Promoção de id ('.$_POST['id'].') atualizada");
						location.href = "index.php";
					</script>
				';
		}else{
			echo '
					<script type="text/javascript">
						alert("Não houve nenhuma ação");
						location.href = "index.php";
					</script>
				';
		}
	}

	
}else{
	echo '
					<script type="text/javascript">
						alert("Página não acessível");
						location.href = "index.php";
					</script>
				';
}


?>