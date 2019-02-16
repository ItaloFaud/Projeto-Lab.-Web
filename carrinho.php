<!DOCTYPE html>
<html>
<head>
	<title>Testando SASS</title>

	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
	<div class="main">
			<!-- MENU -->
			<?php include "menu.php"; ?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor lugar para o seu amigo</h3>
					<br>
					<h3><i>Carrinho</i></h3>
				</div>
				<div class="buttons">
					<button class="btn btn-cadastrar"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
					<button class="btn btn-sobre"> Sobre <i class="fa fa-question-circle"></i></button>
				</div>
			</div>
			<!-- MATÉRIAS -->
			<main class="servicos">
				<article class="servico-3">
					<section class="form-3">
						<table class="table">
							<thead>
								<tr>
									<th>Imagem</th>
									<th>Nome</th>
									<th>QTN.</th>
									<th>Valor</th>
									<th>Subtotal</th>						
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<center>
										<div class="cart-img">
											<img src="imgs/Darth_Vader_TFU.jpg">
										</div>
										</center>
									</td>
									<td>Cachorro</td>
									<td>2</td>
									<td>100.00</td>
									<td>200.00</td>
								</tr>
							</tbody>
						</table>
						

						<div class="buttons">
							<p class="copy-2">Total: R$ 200.00</p>
							<button class="btn-2 btn-sobre"> Finalizar compra <i class="fa fa-arrow-circle-right"></i></button>	
						</div>
						<p class="copy-2">*Não oferecemos serviço de entrega<br>*Você deve retirar seu pedido em nossa loja com o comprovante de pagamento</p>
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
