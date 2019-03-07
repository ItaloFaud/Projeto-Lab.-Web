<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['user_admin'])) {
	echo '<script type="text/javascript">
			alert("VOCÊ NÃO TEM PERMISSÃO");
			location.href = "loginadmin.php";	
		</script>';
}else{
	echo '
		<header class="menu">
					<a href="#"><h1 class="logo"></h1></a>
					<nav class="nav-2">
						<ul>
							<li><a href="#">'.$_SESSION['user_admin'].'</a>
								<ul>
									<li><a href="refreshadmin.php?sair=s">Sair</a><i class="fas fa-sign-out-alt"></i></li>
								</ul>
							</li>
							<LI><a href="index.php">Home Admin</a></LI>
						</ul>
					</nav>
			</header>
	';
}

?>

