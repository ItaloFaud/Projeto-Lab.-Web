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
					
			</header>
			<!-- BANNER -->
			<div class="banner">
				<div class="title title-full">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>Atualização de <?php
						if ($_GET['form'] == 'cat') {
							echo "Categorias";
						}elseif ($_GET['form'] == 'produ') {
							# code...
							echo "Produtos";
						}else if ($_GET['form'] == 'promo') {
							# code...
							echo "Promoções";
						}
					?></h3>
				</div>
			</div>
			<!-- MATÉRIAS -->

			<!-- OPTION->SELECTED -->
			<?php
			if (isset($_GET['form']) && !$_GET['form'] == "") {
				if ($_GET['form'] == 'cat') {
					echo '

					<main class="servicos">
						<article class="servico-2">
							<section class="form-2">
								<!-- Categoria -->
								<form>
									<h3>Nome</h3>
									<input type="text" placeholder="Nome da categoria" name="nome">	
									<button> Atualizar </button>
								</form>
							</section>			
						</article>
					</main>
					';

				}elseif ($_GET['form'] == 'produ') {
					echo '

					<main class="servicos">
						<article class="servico-2">
							<section class="form-2">
								<!-- Produtos -->
								<form enctype="multipart/form-data">
									<h3>Nome</h3>
									<input type="text" placeholder="Nome do produto" name="nome">
									<h3>Categoria</h3>
									<select name="categoria">
										<option value="1">Nome cat</option>
										<option value="1">Nome cat</option>
										<option value="1">Nome cat</option>
									</select>
									<h3>Valor</h3>
									<input step="0.99" type="number" placeholder="Valor do produto" name="valor">
									<h3>Descrição</h3>
									<input type="text" placeholder="Descrição do produto" name="descricao">
									<h3>Imagem</h3>
									<input type="file" id="img" placeholder="Imagem" name="img">
	
									

									<button> Atualizar </button>
								</form>
							</section>			
						</article>
					</main>
					';

				}elseif ($_GET['form'] == 'promo') {
					echo '
					<main class="servicos">
						<article class="servico-2">
							<section class="form-2">
								<!-- Promoção -->
								<form>
									<h3>Produto</h3>
									<select>
										<option value="1">Nome pro</option>
									</select>
									<h3>Porcentagem</h3>
									<input class="input-2" type="number" placeholder="Porcentagem de desconto (não insira '."'%'".')" name="porcento">
									<h3>Estado</h3>
									<select>
										<option>Ativa</option>
										<option>Desativada</option>
									</select>	
									<button> Atualizar </button>
								</form>
							</section>			
						</article>
					</main>

					';

				}else{
					echo '
				<script type="text/javascript">
					alert("Valor inválido");
					location.href = "index.php";
				</script>';
				}
			}else{
				echo '
				<script type="text/javascript">
					alert("Volte a página inicial");
					location.href = "index.php";
				</script>';
			}

			?>

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

