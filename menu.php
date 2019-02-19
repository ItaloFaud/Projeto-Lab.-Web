<?php
//error_reporting(0);
session_start();
if (isset($_GET['sair']) && $_GET['sair'] === "s") {
	
	session_destroy();
	unset($_SESSION['sair']);
	//Procurar funçao que regarregue a pg
}

?>
<header class="menu">
					<a href="index.php"><h1 class="logo"></h1></a>
					<button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
					<nav class="nav">
						<a class="btn-close" href="#"><i class="fa fa-times "></i></a>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a id="categoria" href="#">Categorias</a></li>
							<li><a href="sobre.php">Sobre nos</a></li>
							<li><a href="cadastro.php">Cadastro</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</nav>
					
					<nav class="nav-2">
						<ul>
							<?php


									if (isset($_SESSION['user'])) {
									echo '
									<li><a href="index.php">'.$_SESSION['user'].'</a>
									<ul>
							
								
										<li><a href="carrinho.php">Ver carrinho</a><i class="fas fa-shopping-cart"></i></li>
										<li><a href="refresh.php?sair=s">Sair</a><i class="fas fa-sign-out-alt"></i></li>
									</ul>
									';	
									}else{
									 echo '
									<li><a href="login.php">Faça seu login</a>';
									}


								?>
								
							</li>
						</ul>
					</nav>

					<nav class="categoria">
						<a class="btn-close-cat" href="#"><i class="fa fa-times "></i></a>
						<ul>
							<li><a href="#">Animais</a></li>					
						</ul>
					</nav>
			</header>