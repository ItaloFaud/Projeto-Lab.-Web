<?php

include "Classes/fatura.php";

/**
 * 
 */
class FaturaDAO{
	function Cadastrar(Fatura $p){
		$pdo = new Conexao;
		$con = $pdo->Conectar();
		$Cadastra = $con->prepare("INSERT INTO fatura VALUES (DEFAULT,?,?,?)");
		$Cadastra->bindValue(1,$p->getIdusuario(),PDO::PARAM_INT);
		$Cadastra->bindValue(2,$p->getValor(),PDO::PARAM_STR);
		$Cadastra->bindValue(3,$p->getSituacao(),PDO::PARAM_STR);
		$Cadastra->execute();

		 $id = $con->lastInsertId();

		//echo $id;

		$p->setId($id);
		

		return $Cadastra;
	}

	
	
}







?>