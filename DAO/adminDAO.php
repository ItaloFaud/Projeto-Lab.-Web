<?php

/**
 * 
 */

include "../Classes/admin.php";
include "../Classes/conexao.php";

class AdminDAO
{
	function Logar(Admin $a)
	{
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$BuscaAdm = $con->prepare("SELECT * FROM admin WHERE email = ? AND senha = ?");
		$BuscaAdm->bindValue(1,$a->getEmail(),PDO::PARAM_STR);
		$BuscaAdm->bindValue(2,$a->getSenha(),PDO::PARAM_STR);

		$BuscaAdm->execute();

		$resultado = $BuscaAdm->fetchAll(PDO::FETCH_ASSOC);

		return $resultado;
	}
}

?>