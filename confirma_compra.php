<?php
//
session_start();
include "Classes/conexao.php";
include "DAO2/faturaDAO.php";
include "DAO2/pedidoDAO.php";
include "DAO2/usuario2DAO.php";
include "Classes/PDF.php";

if (isset($_POST['total'])) {
	$Fatu = new Fatura;
	$FatuDAO = new FaturaDAO;

	$Fatu->setIdusuario($_SESSION['user_id']);
	$Fatu->setValor($_POST['total']);
	$Fatu->setSituacao("Á pagar");

	$FatuDAO->Cadastrar($Fatu);

	// echo "<b><h1>aaa  ".$Fatu->getId()."</h1></b>";


	$pedi = new Pedido;
	$pediDAO = new PedidoDAO;

	foreach ($_SESSION['carrinho'] as $id => $qtn) {
		if ($qtn <> 0 && $qtn > 0) {
			foreach ($pediDAO->ConsultaUnica($id) as $key) {
				foreach ($pediDAO->ConsultaPromo($id) as $promo) {
					if ($promo && $promo['ativa'] == "Ativa") {
						
						$desconto = $key['valor']*($promo['porcentagem']/100);
						$valorpro = $key['valor'] - $desconto;

						$pedi->setIdproduto($id);
						$pedi->setIdfatura($Fatu->getId());
						$pedi->setQtn($qtn);
						$pedi->setValor($valorpro);
						$pediDAO->Cadastrarr($pedi);

					}else{
						$pedi->setIdproduto($id);
						$pedi->setIdfatura($Fatu->getId());
						$pedi->setQtn($qtn);
						$pedi->setValor($key['valor']);
						$pediDAO->Cadastrarr($pedi);
					}
				}
				
			}


		}else{

		}
	}

	// echo '<script type="text/javascript">
	// 					alert("Compra realizada! Volte Sempre");						
	// 					location.href = "index.php";	
	// 				</script>';
	// session_destroy();





	if (isset($_SESSION['carrinho']) && isset($_SESSION['user_id'])) {
		$pdf = new PDF();
		// Column headings
		$header = array('Nome', 'Quantidade', 'Preco U.', 'Total');
		// Data loading
		//$data = $pdf->LoadData('countries.txt');
		$pdf->AddPage();
		$pdf->SetFont('Arial','',14);
		$pdf->FancyTable($header,$_SESSION['carrinho']);
		$pdf->Output();
	
}

								
								







	
}else{
	echo '<script type="text/javascript">
											alert("Você não tem acesso");						
											location.href = "index.php";	
										</script>';
}




?>



