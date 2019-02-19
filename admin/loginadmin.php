

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
			
			<!-- BANNER -->
			<div class="banner">
				<div class="title title-full">
					<h2>Pet's Life &copy</h2>
					<h3>Login Administrativo</h3>
				</div>
				<!-- <div class="buttons">
					<button class="btn btn-cadastrar"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
					<button class="btn btn-sobre"> Sobre <i class="fa fa-question-circle"></i></button>
				</div> -->
			</div>
			<!-- MATÉRIAS -->
			<main class="servicos">
				<!-- <article class="servico">
					<a href="#"><img src="scorpion-2880x1800-mortal-kombat-x-pc-games-xbox-one-ps4-24.jpg" alt="Sobre"></a>
					<div class="inner">
						<a href="#">Novo Lançamento Netherealm</a>
						<h4>O mais novo game da Netherealm promete ser um sucesso de vendas</h4>
						<p>O novo Mortal Kombat 11 da Netherealm está em fase final de desenvolvimento e os beta testers já tem uma ótima avaliação do game.</p>
					</div>
				</article> -->

				<article class="servico-2">
					<section class="form-2">
						<form action="teste.php" method="POST">
							<h3>Email</h3>
							<input type="email" placeholder="Email" name="email">
							<h3>Senha</h3>
							<input type="password" placeholder="Senha" name="senha">
							<button> Login </button>
						</form>
					</section>			
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

