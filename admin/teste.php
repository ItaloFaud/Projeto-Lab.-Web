<?php
include "../DAO/adminDAO.php";
session_start();
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
	$Admin = new Admin;
	$AdminDAO = new AdminDAO;
			
			$Admin->setEmail($_POST['email']);
			$Admin->setSenha(md5($_POST['senha']));


			
			foreach ($AdminDAO->Logar($Admin) as $key) {	
			$_SESSION['user_admin'] = $key['nome'];
			echo '
				<script type="text/javascript">
					alert("Logado!");
					location.href = "index.php";
				</script>			
				';
		}
}

?>