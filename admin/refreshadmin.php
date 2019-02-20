<?php
	session_start();
	session_destroy();
	unset($_SESSION['user_admin']);

	echo '
		<script type="text/javascript">
			alert("'.$_SESSION['user_admin'].' lll");
			location.href = "index.php";	
		</script>	
	';

?>



