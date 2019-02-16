<!DOCTYPE html>
<html>
<head>
	<title>Testando SASS</title>

	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
	<div class="main">
			<!-- MENU -->
			<?php include "menuadmin.php";?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title title-full">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor lugar para o seu amigo.</h3>
				</div>
			</div>
			<!-- MATÉRIAS -->
			<main class="servicos">
				<article class="servico">
					<div class="inner">
						<a href="#">Visualizar</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button class="btn-2 btn-cadastrar-2">Categorias</button>
							<button class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
				<article class="servico">
					<div class="inner">
						<a href="#">Cadastrar</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button class="btn-2 btn-cadastrar-2">Categorias</button>
							<button class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
				<article class="servico">
					<div class="inner">
						<a href="#">Editar</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button class="btn-2 btn-cadastrar-2">Categorias</button>
							<button class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
				<article class="servico">
					<div class="inner">
						<a href="#">Excluir</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button class="btn-2 btn-cadastrar-2">Categorias</button>
							<button class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
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
			</script>
			
		</div>


</body>
</html>

