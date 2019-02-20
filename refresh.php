<?php


session_start();
if (isset($_GET['sair']) && $_GET['sair'] === "s") {
	
	session_destroy();
	unset($_SESSION['user']);
	//Procurar funçao que regarregue a pg
	echo '
		<script type="text/javascript">
			location.href = "index.php";	
		</script>	
	';
}
	

?>



