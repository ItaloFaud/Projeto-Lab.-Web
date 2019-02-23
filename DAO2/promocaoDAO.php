<?php


include "Classes/promocao.php";
include "Classes/conexao.php";


/**
 * 
 */
class PromocaoDAO{
	
	function Cadastrar(Promocao $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Cadastra = $con->prepare("INSERT INTO promocao VALUES (DEFAULT,?,?,?)");
		$Cadastra->bindValue(1,$p->getIdproduto(),PDO::PARAM_INT);
		$Cadastra->bindValue(2,$p->getPorcentagem(),PDO::PARAM_STR);
		$Cadastra->bindValue(3,$p->getAtiva(),PDO::PARAM_STR);
		$Cadastra->execute();

		return $Cadastra;
	}

	function Deletar(Promocao $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Deleta = $con->prepare("DELETE FROM promocao WHERE id = ?");
		$Deleta->bindValue(1,$p->getId(),PDO::PARAM_INT);
		$Deleta->execute();

		return $Deleta->rowCount();
	}

	function Atualizar(Promocao $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Atualiza = $con->prepare("UPDATE promocao SET idproduto = ?, porcentagem = ?, ativa = ? WHERE id = ?");
		$Atualiza->bindValue(1,$p->getIdproduto(),PDO::PARAM_INT);
		$Atualiza->bindValue(2,$p->getPorcentagem(),PDO::PARAM_STR);
		$Atualiza->bindValue(3,$p->getAtiva(),PDO::PARAM_STR);
		$Atualiza->bindValue(4,$p->getId(),PDO::PARAM_INT);
		$Atualiza->execute();

		return $Atualiza->rowCount();
	}

	function Consultar(){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM promocao");
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function ConsultaUnica(Promocao $c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM promocao WHERE id = ?");
		$Consulta->bindValue(1,$c->getId(),PDO::PARAM_INT);
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function ConsultarPros(){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM produto");
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
}

?>