<?php
require('../fpdf/fpdf.php');


class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}

// Better table
function ImprovedTable($header, $data)
{
    // Column widths
    $w = array(40, 35, 40, 45);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

function Header()
{
    // Logo
    $this->Image('imgs/1293792.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    //$this->Cell(30,10,"Pet's Life",1,0,'C');
    // Line break
    $this->Ln(20);
}

// Colored table
function FancyTable($header, $carrinho)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $this->Cell(15);
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    
    $userDAO = new UsuarioDAO;
    foreach ($carrinho as $id => $qtn) {
        if ($qtn <> 0 && $qtn > 0) {
            foreach($userDAO->ConsultaUnica($id) as $row){
                foreach ($userDAO->ConsultaPromo($id) as $promo) {
                    if ($promo && $promo['ativa'] == "Ativa") {
                        $desconto = $row['valor']*($promo['porcentagem']/100);
                        $valorpro = $row['valor'] - $desconto;
                        $this->Cell(15);
                        $this->Cell($w[0],6,$row['nome'],'LR',0,'L',$fill);
                        $this->Cell($w[1],6,$qtn,'LR',0,'L',$fill);
                        $this->Cell($w[2],6,number_format($valorpro,2),'LR',0,'R',$fill);
                        $this->Cell($w[3],6,number_format($valorpro*$qtn,2),'LR',0,'R',$fill);
                        $this->Ln();
                        $fill = !$fill;
                    }else{

                        $valorpro = $row['valor'];
                        $this->Cell(15);
                        $this->Cell($w[0],6,$row['nome'],'LR',0,'L',$fill);
                        $this->Cell($w[1],6,$qtn,'LR',0,'L',$fill);
                        $this->Cell($w[2],6,$valorpro,'LR',0,'R',$fill);
                        $this->Cell($w[3],6,$valorpro*$qtn,'LR',0,'R',$fill);
                        $this->Ln();
                        $fill = !$fill;
                    }
                    
                }
                
            }
    }
}   $this->Cell(15);
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}


?>