<?php
error_reporting(0);
	session_start();
	session_destroy();
	unset($_SESSION['user_admin']);

	echo '
		<script type="text/javascript">
			
			location.href = "../index.php";	
		</script>	
	';

?>



