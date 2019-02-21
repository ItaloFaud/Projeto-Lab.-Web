<?php


include "../Classes/produto.php";
include "../Classes/conexao.php";


/**
 * 
 */
class ProdutoDAO{
	
	function Cadastrar(Produto $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Cadastra = $con->prepare("INSERT INTO produto VALUES (DEFAULT,?,?,?,?,?)");
		$Cadastra->bindValue(1,$p->getIdcategoria(),PDO::PARAM_INT);
		$Cadastra->bindValue(2,$p->getNome(),PDO::PARAM_STR);
		$Cadastra->bindValue(3,$p->getValor(),PDO::PARAM_STR);
		$Cadastra->bindValue(4,$p->getDescricao(),PDO::PARAM_STR);
		$Cadastra->bindValue(5,$p->getImg(),PDO::PARAM_STR);
		$Cadastra->execute();

		return $Cadastra;
	}

	function Deletar(Produto $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Deleta = $pdo->prepare("DELETE * FROM produto WHERE id = ?");
		$Deleta->bindValue(1,$p->getId(),PDO::PARAM_INT);
		$Deleta->execute();

		return $Deleta->rowCount();
	}

	function Atualizar(Produto $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Atualiza = $con->prepare("UPDATE produto SET idcategoria = ?, nome = ?, valor = ?, descricao = ?, img = ? WHERE id = ?");
		$Atualiza->bindValue(1,$p->getIdcategoria(),PDO::PARAM_INT);
		$Atualiza->bindValue(2,$p->getNome(),PDO::PARAM_STR);
		$Atualiza->bindValue(3,$p->getValor(),PDO::PARAM_STR);
		$Atualiza->bindValue(4,$p->getDescricao(),PDO::PARAM_STR);
		$Atualiza->bindValue(5,$p->getImg(),PDO::PARAM_STR);
		$Atualiza->bindValue(6,$p->getId(),PDO::PARAM_STR);
		$Atualiza->execute();

		return $Atualiza->rowCount();
	}

	function Consultar(){
		$pdo = new Conexao;
		$con = $pdo->Conectar();

		$Consulta=$con->prepare("SELECT * FROM produto");
		$Consulta->execute();

		$r = $Consulta->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
}

?>