<?php


include "Classes/categoria.php";



/**
 * 
 */
class CategoriaDAO{
	
	function Cadastrar(Categoria $c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Cadastra = $con->prepare("INSERT INTO categoria VALUES (DEFAULT,?)");
		$Cadastra->bindValue(1,$c->getNome(),PDO::PARAM_STR);
		$Cadastra->execute();

		return $Cadastra;
	}

	function Deletar(Categoria $c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Deleta = $con->prepare("DELETE FROM categoria WHERE id = ?");
		$Deleta->bindValue(1,$c->getId(),PDO::PARAM_INT);

		$Deleta->execute();

		return $Deleta->rowCount();
	}

	function Atualizar(Categoria $c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Atualiza = $con->prepare("UPDATE categoria SET nome = ? WHERE id = ?");
		$Atualiza->bindValue(1,$c->getNome(),PDO::PARAM_STR);
		$Atualiza->bindValue(2,$c->getId(),PDO::PARAM_INT);
		$Atualiza->execute();

		return $Atualiza->rowCount();
	}

	function Consultar(){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM categoria");
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function ConsultaUnica(Categoria $c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM categoria WHERE id = ?");
		$Consulta->bindValue(1,$c->getId(),PDO::PARAM_INT);
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	
}

?>