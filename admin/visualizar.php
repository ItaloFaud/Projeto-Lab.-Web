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
					<h3>Visualizar --Nome aqui--</h3>
				</div>
			</div>
			<!-- MATÉRIAS -->
			<main class="servicos">
				<article class="servico-3">
					<section class="form-3">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>Cat.</th>
									<th>QTN.</th>
									<th>Valor</th>
									<th>Ações</th>						
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Cachorro</td>
									<td>Animais</td>
									<td>3</td>
									<td>200.00</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
								<tr>
									<td>1</td>
									<td>Cachorro</td>
									<td>Animais</td>
									<td>3</td>
									<td>200.00</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
								<tr>
									<td>1</td>
									<td>Cachorro</td>
									<td>Animais</td>
									<td>3</td>
									<td>200.00</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
							</tbody>
						</table>
						
					</section>			
				</article>
			</main>

			<main class="servicos">
				<article class="servico-3">
					<section class="form-3">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>Ações</th>					
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Animais</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>						
								</tr>
								<tr>
									<td>1</td>
									<td>Animais</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
								<tr>
									<td>1</td>
									<td>Animais</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
							</tbody>
						</table>
						
					</section>			
				</article>
			</main>

			<main class="servicos">
				<article class="servico-3">
					<section class="form-3">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Produto</th>
									<th>%</th>
									<th>Ativa</th>
									<th>Ações</th>						
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Cachorro</td>
									<td>3</td>
									<td>Sim</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
								<tr>
									<td>1</td>
									<td>Cachorro</td>
									<td>3</td>
									<td>Sim</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
								<tr>
									<td>1</td>
									<td>Cachorro</td>
									<td>3</td>
									<td>Sim</td>
									<td><a href="atualizar.php">Atualizar</a> || <a href="atualizar.php">Deletar</a></td>
								</tr>
							</tbody>
						</table>
						
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
			</script>
			
		</div>


</body>
</html>

