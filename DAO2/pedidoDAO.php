<?php

include "Classes/pedido.php";

/**
 * 
 */
class PedidoDAO{
	function Cadastrarr(Pedido $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Cadastra = $con->prepare("INSERT INTO pedido VALUES (DEFAULT,?,?,?,?)");
		$Cadastra->bindValue(1,$p->getIdproduto(),PDO::PARAM_INT);
		$Cadastra->bindValue(2,$p->getIdfatura(),PDO::PARAM_INT);
		$Cadastra->bindValue(3,$p->getQtn(),PDO::PARAM_INT);
		$Cadastra->bindValue(4,$p->getValor(),PDO::PARAM_STR);
		$Cadastra->execute();

		return $Cadastra;
	}

	function ConsultaUnica($c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM produto WHERE id = ?");
		$Consulta->bindValue(1,$c,PDO::PARAM_INT);
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function ConsultaPromo($c){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM promocao WHERE idproduto = ?");
		$Consulta->bindValue(1,$c,PDO::PARAM_INT);
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	
}





?>