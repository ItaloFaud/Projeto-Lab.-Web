<!DOCTYPE html>
<html>
<head>
	<title>Administração</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/1293792.png">

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
			<script type="text/javascript">
				function VisuCat(){
					location.href = "visualizar.php?form=cat";
				}

				function VisuProdu(){
					location.href = "visualizar.php?form=produ";
				}

				function VisuPromo(){
					location.href = "visualizar.php?form=promo";
				}

			</script>

			<script type="text/javascript">
					function CadCat(){
						location.href = "cadastrar.php?form=cat";
					}

					function CadProdu(){
						location.href = "cadastrar.php?form=produ";
					}

					function CadPromo(){
						location.href = "cadastrar.php?form=promo";
					}
				</script>


			<!-- MATÉRIAS -->
			<main class="servicos">
				<article class="servico">
					<div class="inner">
						<a href="#">Visualizar</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button onclick="VisuCat()" class="btn-2 btn-cadastrar-2">Categorias</button>
							<button onclick="VisuProdu()" class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button onclick="VisuPromo()" class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
				

				<article class="servico">
					<div class="inner">
						<a href="#">Cadastrar</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button onclick="CadCat()" class="btn-2 btn-cadastrar-2">Categorias</button>
							<button onclick="CadProdu()" class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button onclick="CadPromo()" class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
				<!-- <script type="text/javascript">
					function Edi(){
						location.href = "editar.php";
					}

					function Edi(){
						location.href = "editar.php";
					}

					function Edi(){
						location.href = "editar.php";
					}
				</script> -->
				<article class="servico">
					<div class="inner">
						<a href="#">Editar</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button onclick="VisuCat()" class="btn-2 btn-cadastrar-2">Categorias</button>
							<button onclick="VisuProdu()" class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button onclick="VisuPromo()" class="btn-2 btn-cadastrar-2">Promoções</button>
						</div>
					</div>
				</article>
				<!-- <script type="text/javascript">
					function Del(){
						location.href = "deletar.php";
					}

					function Del(){
						location.href = "deletar.php";
					}

					function Del(){
						location.href = "deletar.php";
					}

					function Del(){
						location.href = "deletar.php";
					}
				</script> -->
				<article class="servico">
					<div class="inner">
						<a href="#">Excluir</a>
						<h4>Pet's Life &copy</h4>
						<div class="buttons-2">
							<button onclick="VisuCat()" class="btn-2 btn-cadastrar-2">Categorias</button>
							<button onclick="VisuProdu()" class="btn-2 btn-cadastrar-2">Produtos/Serviços</button>
							<button onclick="VisuPromo()" class="btn-2 btn-cadastrar-2">Promoções</button>
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

