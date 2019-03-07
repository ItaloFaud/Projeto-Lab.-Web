<?php

error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pet's Life | Carrinho</title>
	<link rel="shortcut icon" type="image/x-icon" href="imgs/1293792.png">

	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<!-- Ver como retirar posicao do carrinho -->


<body>
	<div class="main">
			<!-- MENU -->
			<?php include "DAO2/produtoDAO.php"; include "menu.php";
			//session_destroy();

				if(isset($_GET['acao']) && $_GET['acao'] == "retirar"){
					if(isset($_GET['id'])) {
									
					$_SESSION['carrinho'][$_GET['id']] -= 1;
						//unset($_SESSION['carrinho'][$_GET['id']]);
				
					}else{

					}	
				}

			?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>O melhor lugar para o seu amigo</h3>
					<br>
					<h3><i>Carrinho</i></h3>
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
								<?php
								$proTotal = 0;
								$total = 0;
									

									if (isset($_SESSION['carrinho'])) {
									foreach ($_SESSION['carrinho'] as $id => $qtn){
									
									if ($qtn <> 0 && $qtn > 0) {
										# code...
										$pro = new Produto;
									$proDAO = new ProdutoDAO;

									$pro->setId($id);

									

										foreach ($proDAO->ConsultaUnica($pro) as $retorno){
											# code...
											foreach ($proDAO->ConsultaPromo($id) as $promo) {
												# code...
												if ($promo && $promo['ativa'] == "Ativa") {
												# code...
													$valor = $retorno['valor']*($promo['porcentagem']/100);
													$provalor = ($retorno['valor']-$valor);
													
													$proTotal = ($retorno['valor']-$valor)*$qtn;

													echo '
												<tr>
											<td>
												<center>
												<div class="cart-img">
													<img src="imgs/'.$retorno['img'].'">
												</div>
												</center>
												<a href="?acao=retirar&id='.$id.'">Retirar do carrinho</a>
											</td>
											<td>'.$retorno['nome'].'</td>
											<td>'.$qtn.'</td>
											<td>'.number_format($provalor,2).'</td>
											<td>'.number_format($proTotal,2).'</td>
												</tr>

											';


												}else{
												$proTotal = $retorno['valor']*$qtn;

												echo '
												<tr>
											<td>
												<center>
												<div class="cart-img">
													<img src="imgs/'.$retorno['img'].'">
												</div>
												</center>
												<a href="?acao=retirar&id='.$id.'">Retirar do carrinho</a>
											</td>
											<td>'.$retorno['nome'].'</td>
											<td>'.$qtn.'</td>
											<td>'.number_format($retorno['valor'],2).'</td>
											<td>'.number_format($proTotal,2).'</td>
												</tr>

											';
											}
											}
											
											
										}

										$total += $proTotal;
									}
									

					

									}
								}else{
									echo "<h2>Não tem nenhum produto em seu carrinho</h2>";
								}

								


								?>
								
							</tbody>
						</table>
						

						<div class="buttons">
							<p class="copy-2">Total: R$ <?php echo number_format($total,2); ?></p>
							<form action="detalhes.php" method="post">
							<input type="hidden" value="<?php echo $total;?>" name="total">
							<button class="btn-2 btn-sobre"> Finalizar compra <i class="fa fa-arrow-circle-right"></i></button>
							</form>	
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

