<?php
// pedim

//Ver colunas q podem ser unicas

if (isset($_POST['nomecat']) && !$_POST['nomecat'] == "") {
	include "../DAO/categoriaDAO.php";

	$cat =new Categoria;
	$catDAO =new CategoriaDAO;

	$cat->setNome($_POST['nomecat']);
	$catDAO->Cadastrar($cat);

	echo "
		
		<script text='text/javascript'>

			alert('Categoria cadastrada');
			location.href = 'index.php';

		</script>

	";
}elseif (isset($_POST['nomepro']) && !$_POST['nomepro'] == "" && isset($_POST['categoria']) && !$_POST['categoria'] == "" && isset($_POST['valor']) && !$_POST['valor'] == "" && isset($_POST['descricao']) && !$_POST['descricao'] == "" && isset($_FILES['img']['name']) && !$_FILES['img']['name'] == "") {
	include "../DAO/produtoDAO.php";

	$pro = new Produto;
	$proDAO = new ProdutoDAO;

	$pro->setIdcategoria($_POST['categoria']);
	$pro->setNome($_POST['nomepro']);
	$pro->setValor($_POST['valor']);
	$pro->setDescricao($_POST['descricao']);
	$pro->setImg($_FILES['img']['name']);

	$proDAO->Cadastrar($pro);
	move_uploaded_file($_FILES['img']['tmp_name'], '../imgs/'.$_FILES['img']['name']);

	echo "
		
		<script text='text/javascript'>

			alert('Produto cadastrado');
			location.href = 'index.php';

		</script>

	";

}elseif(isset($_POST['produtopromo']) && !$_POST['produtopromo'] == "" && isset($_POST['porcento']) && !$_POST['porcento'] == "" && isset($_POST['estado']) && !$_POST['estado'] == ""){

	include "../DAO/promocaoDAO.php";

	$promo = new Promocao;
	$promoDAO = new PromocaoDAO;

	$promo->setIdproduto($_POST['produtopromo']);
	$promo->setPorcentagem($_POST['porcento']);
	$promo->setAtiva($_POST['estado']);

	if($promoDAO->Cadastrar($promo)){
		//Olhar pq só cai aqui
		echo "
		
		<script text='text/javascript'>

			alert('Promoção cadastrada');
			location.href = 'index.php';

		</script>

	";
	}else{
		echo "
		
		<script text='text/javascript'>

			alert('Produto já possui promoção');
			location.href = 'index.php';

		</script>

	";
	}

	

}else{
	echo "
		
		<script text='text/javascript'>

			alert('Página não acessível');
			location.href = 'index.php';

		</script>

	";
}
?>