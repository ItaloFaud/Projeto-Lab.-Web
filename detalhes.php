<?php

if (!isset($_POST['total'])) {
	echo '<script type="text/javascript">
						alert("Compra não possui produtos");						
						location.href = "index.php";	
					</script>';
}elseif ($_POST['total'] == 0) {
	echo '<script type="text/javascript">
						alert("Compra não possui produtos");						
						location.href = "index.php";	
					</script>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pet's Life | Detalhes da compra</title>
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
			<?php include "DAO2/usuarioDAO.php"; include "menu.php"; ?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor lugar para o seu amigo</h3>
					<br>
					<h3><i>Finalizando compra</i></h3>
				</div>
				<div class="buttons">
					<button class="btn btn-cadastrar"> Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
					<button class="btn btn-sobre"> Sobre <i class="fa fa-question-circle"></i></button>
				</div>
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
					<div class="inner">
						<a href="#">Detalhes da compra</a>
						<h4>Pet's Life &copy</h4>
						<p>
						<?php

						

						$usuDAO = new UsuarioDAO;

						foreach ($usuDAO->Ver($_SESSION['user_id']) as $key){
							echo "
						Valor da compra: R$".$_POST['total']."<br>
						Cliente: ".$key['nome']."<br>
						Email: ".$key['email']."<br>
						Telefone: ".$key['telefone']."<br>";
						}
						?>


						
						
					</p>
					</div>
					<article class="servico-2">
					<section class="form-4">
						<form action="confirma_compra.php" method="post"><!-- INPUT HIDDEN -->
							<input type="hidden" value="<?php echo $_POST['total']?>" name="total">
							<button> Confirmar compra <i class="fas fa-shopping-cart"></i></button>
						</form>
					</section>			
				</article>
				</article>

				<article class="servico">			
					<div class="inner">
						<a href="#">Produto, quantidade e preço</a>
						<h4>Pet's Life &copy</h4>
						<p>
							<?php
							
								foreach ($_SESSION['carrinho'] as $id => $qtn) {
									if ($qtn <> 0 && $qtn > 0) {
										$userDAO = new UsuarioDAO;

										foreach ($userDAO->ConsultaUnica($id) as $key){
											
											foreach ($userDAO->ConsultaPromo($id) as $promo) {
												# code...
												if ($promo && $promo['ativa'] == "Ativa") {
													$desconto = $key['valor']*($promo['porcentagem']/100);
													$valorpro = $key['valor'] - $desconto;

													echo $key['nome'].' ---- '.$qtn.'x'.$valorpro.' ---- R$'.$valorpro*$qtn.'<br>';


												}else{
													echo $key['nome'].' ---- '.$qtn.'x'.$key['valor'].' ---- R$'.$key['valor']*$qtn.'<br>';
												}
											}


											
										}
									}
								}

							?>
						</p>
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

