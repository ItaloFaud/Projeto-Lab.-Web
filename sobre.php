<!DOCTYPE html>
<html>
<head>
	<title>Pet's Life | Sobre</title>
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
			<?php include "DAO2/produtoDAO.php"; include "menu.php"; ?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor lugar para o seu amigo.</h3>
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
				
				
				<article class="servico">			
					<div class="inner">
						<a href="#">Missão</a>
						<h4>Pet's Life &copy</h4>
						<p>Nossa empresa tem como compromisso levar aos nossos clientes os melhores produtos e serviços em cuidados com os Pets em geral, como: banho e tosa, vacinas, consulta médica, remédios e produtos para o seu Pet.</p>
					</div>
				</article>



				<article class="servico">
					<div class="inner">
						<a href="#">Descrição dos serviços</a>
						<h4>Pet's Life &copy</h4>
						<p>A nossa tosa usa o que há de melhor no mercado de cósmeticos, perfumaria e produtos de limpeza para o seu Pet, com profissionais altamente capacitados para realizar a atividade.</p>
					</div>
				</article>

				<article class="servico">
					<div class="inner">
						<a href="#">Visão</a>
						<h4>Pet's Life &copy</h4>
						<p>Estar em um patamar elevado e assim ser indispensável no mercado de Pet Shop, crescer a demanda gradativamente em decorrência da qualidade e confiança transmitida, sendo evidenciado como um sinônimo de Pet Shop no mercado que atua.</p>
					</div>
				</article>

				<article class="servico">
					<div class="inner">
						<a href="#">Endereço Loja</a>
						<h4>Pet's Life &copy</h4>
						<p>
							CEP: 63460-000<br>
							Estado: Ceará<br>
							Cidade: Pereiro<br>
							Rua: Santos Dummont<br>
							Número: 120<br>
							Referências: EEEM Virgílio Correia Lima, Cemitério antigo.
						</p>

					</div>
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0016.jpg" alt="Sobre"></a>
					<div class="inner">						
						<h4>Huskys siberianos</h4>
					</div>
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0025.jpg" alt="Sobre"></a>
					<div class="inner">						
						<h4>Peixes colorido</h4>
					</div>
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0026.jpg" alt="Sobre"></a>
					<div class="inner">						
						<h4>Peixe beta branco com azul</h4>
					</div>
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0011.jpg" alt="Sobre"></a>
					<div class="inner">						
						<h4>Pit bull adulto</h4>
					</div>
				</article>

				

				

				

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0008.jpg" alt="Sobre"></a>
						<div class="inner">
						
						<h4>Filhote de pit bull</h4>
					</div>				
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0014.jpg" alt="Sobre"></a>
					<div class="inner">
						<h4>filhote de pastor alemão com pedgree</h4>
					</div>
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0017.jpg" alt="Sobre"></a>
					<div class="inner">
						<h4>Filhote Husky</h4>
					</div>
				</article>

				<article class="servico">
					<a href="#"><img src="imgs/IMG-20190226-WA0019.jpg" alt="Sobre"></a>
					<div class="inner">
						<h4>Filhotes de gatos em geral</h4>
					</div>
				</article>

				


			</main>

			<!-- Slide Show -->

			

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

