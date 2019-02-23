
<!DOCTYPE html>
<html>
<head>
	<title>Pet's Life</title>

	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
	<div class="main">
			<!-- MENU -->
			<?php include "DAO2/produtoDAO.php"; include "menu.php"; 

			if (isset($_POST['idpro']) && !empty($_POST['idpro'])) {
				if (isset($_SESSION['user'])) {

					if (!isset($_SESSION['carrinho'])) {

						$_SESSION['carrinho'] = array();

					}
							if(!isset($_SESSION['carrinho'][$_POST['idpro']])) {
								
								$_SESSION['carrinho'][$_POST['idpro']] = 1;
								header('location: index.php');

							}else{

								$_SESSION['carrinho'][$_POST['idpro']] += 1;
								header('location: index.php');

							}

						

					}else{
					echo '
					<script type="text/javascript">
						alert("Você tem que ter uma conta para adicionar um produto ao seu carrinho");
						location.href = "cadastro.php";	
					</script>';
					}
					
				}
			

			?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title title-full">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor para o seu amigo</h3>
				</div>
				<!-- <div class="buttons">
					<button class="btn btn-cadastrar"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
					<button class="btn btn-sobre"> Sobre <i class="fa fa-question-circle"></i></button>
				</div> -->
			</div>
			<!-- MATÉRIAS -->
			
				
			<main class="servicos">

				<?php

				

				if (isset($_GET['id']) && !empty($_GET['id'])) {
					# code...
					
					

					$pro = new Produto;
					$proDAO = new ProdutoDAO;

					$pro->setId($_GET['id']);

					foreach ($proDAO->ConsultaUnica($pro) as $key) {
						# code...
						echo '<article class="servico">
					<a href="#"><img src="imgs/'.$key['img'].'" alt="Sobre"></a>
					<div class="inner">
						
						<h4>'.$key['nome'].'</h4>
					</div>
				</article>

				<article class="servico">				
					<div class="inner">
						<a href="#">'.$key['nome'].'</a>
						';

						foreach ($proDAO->ConsultaPromo($key['id']) as $promo) {
							# code...
							if ($promo && $promo['ativa'] == "Ativa") {
								$preco = $key['valor'] - $key['valor']*($promo['porcentagem']/100);

								echo '<h4><strike>R$: '.$key['valor'].'</strike>   R$: '.$preco.'</h4>';
							}else{
								echo '<h4>R$: '.$key['valor'].'</h4>'; 
							}
						}
						



						echo '
						<p>Descrição: '.$key['descricao'].'</p>';

						foreach ($proDAO->ConsultarCats() as $k) {
							if ($key['idcategoria'] == $k['id']) {
								echo '<p>Categoria: '.$k['nome'].'</p>';
							}else{
								echo "";
							}
						}

						
					echo '</div>
					<article class="servico-2">
					<section class="form-4">
						<form method="post"><!-- INPUT HIDDEN -->
							<input type="hidden" value="'.$key['id'].'" name="idpro">
							<button>Adicionar ao carrinho <i class="fas fa-shopping-cart"></i></button>
						</form>
					</section>			
				</article>
				</article>';
					}
				}


				?>

				
			</main>


			<!-- FORMULÁRIO -->

			<!--Rodapé-->

			<footer class="rodape">
				<div class="social-icons">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-google"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</div>
				<p class="copy">Pet Shop Dog's Life &copy. Todos os direitos reservados</p>
			</footer>


			<!--JQUERY-->
			<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
			<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script type="text/javascript">
				$(".btn-menu").click(function() {
				   	$(".nav").show();
				});
			  	$(".btn-close").click(function() {
			   		$(".nav").hide();
			  	}); 
			  	$("#categoria").click(function(){
			  		$(".categoria").show();
			  	});
			  	$("#categoria").click(function(){
			  		$(".nav").hide();
			  	});
			  	$(".btn-close-cat").click(function(){
			  		$(".categoria").hide();
			  	});
			</script>
			
		</div>


</body>
</html>

