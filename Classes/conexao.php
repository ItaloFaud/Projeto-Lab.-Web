<?php

	/**
	 * Conexao com Banco de dados usando PDO
	 */
	class Conexao{
		
		function Conectar(){
			try{
				$pdo = new PDO("mysql:host=localhost;dbname=pet_shop","root","");

			}catch(PDOException $e){
				echo $e->getMessage();;
			}

			return $pdo;
		}
	}

?>