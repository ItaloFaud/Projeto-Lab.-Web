<?php
/**
 * 
 */

include "Classes/conexao.php";
include "Classes/usuario.php";
class UsuarioDAO {
	
	function Cadastrar(Usuario $u){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$CadastraU = $con->prepare("INSERT INTO usuario VALUES (DEFAULT,?,?,?,?)");
		$CadastraU->bindValue(1,$u->getNome(),PDO::PARAM_STR);
		$CadastraU->bindValue(2,$u->getEmail(),PDO::PARAM_STR);
		$CadastraU->bindValue(3,$u->getSenha(),PDO::PARAM_STR);
		$CadastraU->bindValue(4,$u->getTelefone(),PDO::PARAM_STR);
		$CadastraU->execute();

		return $CadastraU;
	}

	function Logar(Usuario $u){
			$pdo = new Conexao;
			$conexao = $pdo->Conectar();

			$BuscaUsuarios = $conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
			//$BuscaUsuarios->bindValue(1,$u->getEmail(),PDO::PARAM_STR);
			$BuscaUsuarios->bindValue(1,$u->getEmail(),PDO::PARAM_STR);
			$BuscaUsuarios->bindValue(2,$u->getSenha(),PDO::PARAM_STR);
			$BuscaUsuarios->execute();

			$resulta = $BuscaUsuarios->fetchAll(PDO::FETCH_ASSOC);

			return $resulta;
	}

}

?>