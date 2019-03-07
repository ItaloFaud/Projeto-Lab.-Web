<?php
include "../DAO/adminDAO.php";
session_start();
error_reporting(0);
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
	$Admin = new Admin;
	$AdminDAO = new AdminDAO;
			
			$Admin->setEmail($_POST['email']);
			$Admin->setSenha(md5($_POST['senha']));


			if ($AdminDAO->Logar($Admin)) {
				foreach ($AdminDAO->Logar($Admin) as $key) {	
					$_SESSION['user_admin'] = $key['nome'];
					echo '
						<script type="text/javascript">
							alert("Logado!");
							location.href = "index.php";
						</script>			
						';
				}
			}else{
				echo '
						<script type="text/javascript">
							alert("Senha ou email errados");
							location.href = "loginadmin.php";
						</script>			
						';
			}
			
}else{
	echo '
						<script type="text/javascript">
							alert("VOCÊ NÃO TEM PERMISSÃO");
							location.href = "index.php";
						</script>			
						';
}

?>