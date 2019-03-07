<!DOCTYPE html>
<html>
<head>
	<title>Visualizar</title>
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
			<?php error_reporting(0); include "menuadmin.php";?>
			<!-- BANNER -->
			<div class="banner">
				<div class="title title-full">
					<h2><i>Pet's Life &copy</i></h2>
					<h3>Visualizar 
					<?php
						if ($_GET['form'] == 'cat') {
							echo "Categorias";
						}elseif ($_GET['form'] == 'produ') {
							# code...
							echo "Produtos";
						}else if ($_GET['form'] == 'promo') {
							# code...
							echo "Promoções";
						}
					?>
					</h3>
				</div>
			</div>
			<!-- MATÉRIAS -->
			<!-- Guilherme e epifânio -->
			<?php 
			if (isset($_GET['form']) && !$_GET['form'] == "") {
				if ($_GET['form'] == 'cat') {
					# code...
					include "../DAO/categoriaDAO.php";
					echo '
					<main class="servicos">
						<article class="servico-3">
							<section class="form-3">
								<!-- Categorias -->
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nome</th>
											<th>Ações</th>					
										</tr>
									</thead>
									<tbody>';

								$CatDAO = new CategoriaDAO;

								foreach ($CatDAO->Consultar() as $key) {
									echo '
										<tr>
											<td>'.$key['id'].'</td>
											<td>'.$key['nome'].'</td>
											<td><a href="atualizar.php?id='.$key['id'].'&form='.$_GET['form'].'">Atualizar</a> || <a href="deletar.php?id='.$key['id'].'&form='.$_GET['form'].'">Deletar</a></td>						
										</tr>
									';
								}



										
								echo '</tbody>
								</table>
								
							</section>			
						</article>
					</main>
					';

				}elseif ($_GET['form'] == 'produ') {
					# code...]
					include "../DAO/produtoDAO.php";
					echo '
					
					<main class="servicos">
						<article class="servico-3">
							<section class="form-3">
								<!-- PRODUTO -->
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nome</th>
											<th>Cat.</th>
											<th>Valor</th>
											<th>Ações</th>						
										</tr>
									</thead>
									<tbody>';

									$sql = new ProdutoDAO;

									foreach ($sql->Consultar() as $key ) {
										echo '

										<tr>
											<td>'.$key['id'].'</td>
											<td>'.$key['nome'].'</td>
											<td>'.$key['idcategoria'].'</td>
											<td>'.$key['valor'].'</td>
											<td><a href="atualizar.php?id='.$key['id'].'&form='.$_GET['form'].'">Atualizar</a> || <a href="deletar.php?id='.$key['id'].'&form='.$_GET['form'].'">Deletar</a></td>
										</tr>

										';
									}
										
								

								echo'	</tbody>
								</table>
								
							</section>			
						</article>
					</main>

					';

				}elseif ($_GET['form'] == 'promo') {
					
					echo '

					<main class="servicos">
						<article class="servico-3">
							<section class="form-3">
								<!-- Promoçoes -->
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
									<tbody>';

									include "../DAO/promocaoDAO.php";

									$sql = new PromocaoDAO;

									foreach ($sql->Consultar() as $key) {
										# code...
										echo '
										
										<tr>
											<td>'.$key['id'].'</td>
											<td>'.$key['idproduto'].'</td>
											<td>'.$key['porcentagem'].'</td>
											<td>'.$key['ativa'].'</td>
											<td><a href="atualizar.php?id='.$key['id'].'&form='.$_GET['form'].'">Atualizar</a> || <a href="deletar.php?id='.$key['id'].'&form='.$_GET['form'].'">Deletar</a></td>
										</tr>


										';
									}
										


										
								
								echo '</tbody>
								</table>
								
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

