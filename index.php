<!DOCTYPE html>
<html>
<head>
	<title>Pet's Life | Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="imgs/1293792.png">

	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
	<div class="main">
			<!-- MENU -->
			<?php include "DAO2/produtoDAO.php"; include 'menu.php'; ?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor lugar para o seu amigo</h3>
				</div>
				<script type="text/javascript">
					function Cadastro() {
						location.href = "cadastro.php";
					}

					function Sobre() {
						location.href = "sobre.php";
					}
				</script>
				<div class="buttons">
					<!-- Colocar links -->
					<button onclick="Cadastro()" class="btn btn-cadastrar"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
					<button onclick="Sobre()" class="btn btn-sobre"> Sobre <i class="fa fa-question-circle"></i></button>
				</div>
			</div>
			<!-- MATÉRIAS -->
			<main class="servicos">
				
				<?php 
				

				$proDAO = new ProdutoDAO;

				if (isset($_GET['cat']) && !empty($_GET['cat'])) {
						foreach ($proDAO->ConsultaCat($_GET['cat']) as $key) {
									# code...
							echo '<article class="servico">
						<a href="produto.php?id='.$key['id'].'"><img src="imgs/'.$key['img'].'" alt="Sobre"></a>
						<div class="inner">
							<a href="produto.php?id='.$key['id'].'">'.$key['nome'].'</a>
							<h4>R$: '.number_format($key['valor'],2).'</h4>
						</div>
					</article>';


						}		
				}else{
					foreach ($proDAO->Consultar() as $key){
						echo '<article class="servico">
						<a href="produto.php?id='.$key['id'].'"><img src="imgs/'.$key['img'].'" alt="Sobre"></a>
						<div class="inner">
							<a href="produto.php?id='.$key['id'].'">'.$key['nome'].'</a>
							<h4>R$: '.number_format($key['valor'],2).'</h4>
						</div>
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
				<p class="copy">Pet Shop Pets's Life &copy. Todos os direitos reservados</p>
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

