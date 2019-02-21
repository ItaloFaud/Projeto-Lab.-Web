<?php


	if (isset($_GET['form']) && !$_GET['form'] == "" && isset($_GET['id']) && !empty($_GET['id'])) {
		if ($_GET['form'] == 'cat') {
			
			include "../DAO/categoriaDAO.php";

			$cat = new Categoria;
			$catDAO = new CategoriaDAO;

			$cat->setId($_GET['id']);

			if($catDAO->Deletar($cat) == 1){
				echo '
					<script type="text/javascript">
						alert("Categoria de id ('.$_GET['id'].') deletada");
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



		}elseif ($_GET['form'] == 'produ') {
			# code...

			include "../DAO/produtoDAO.php";

			$pro = new Produto;
			$proDAO = new ProdutoDAO;

			$pro->setId($_GET['id']);

			if($proDAO->Deletar($pro) == 1){
				echo '
					<script type="text/javascript">
						alert("Produto de id('.$_GET['id'].') deletado");
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

		}elseif ($_GET['form'] == 'promo') {
			# code...

			include "../DAO/promocaoDAO.php";

			$pro = new Promocao;
			$proDAO = new PromocaoDAO;

			$pro->setId($_GET['id']);

			if($proDAO->Deletar($pro) == 1){
				echo '
					<script type="text/javascript">
						alert("Promoção de id('.$_GET['id'].') deletada");
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
		echo "
		
		<script text='text/javascript'>

			alert('Página não acessível');
			location.href = 'index.php';

		</script>

	";
	}

?>