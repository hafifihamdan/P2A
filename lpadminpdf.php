<?php
session_start();
require('fpdf17/fpdf.php');

include("db.php");
?>




		
   <?php

        
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

    
//set font to arial, bold, 14pt
             
$pdf->SetFont('Arial','B',12);

$pdf->Cell(85	,5,'',0,0);
$pdf->Cell(90	,5,'P2A Enterprise',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(75	,5,'',0,0);
$pdf->Cell(90	,5,'Kampung Belat,Kubur Panjang,',0,1);

$pdf->Cell(95	,5,'',0,0);
$pdf->Cell(90	,5,'06760,',0,1);
$pdf->Cell(93	,5,'',0,0);
$pdf->Cell(90	,5,'Pendang,',0,1);
$pdf->Cell(95	,5,'',0,0);
$pdf->Cell(90	,5,'Kedah.',0,1);
$pdf->Cell(189	,5,'',0,1);  

$pdf->Cell(12	,5,'Tajuk: ',0,0);
$pdf->Cell(90	,6,'Senarai Tempahan P2A Enterprise',0,1);

$pdf->Cell(189	,5,'',0,1);  

        $pdf->Cell(15	,6,'No.',1,0);        
        $pdf->Cell(27	,6,'gred',1,0);

        $pdf->Cell(25	,6,'Kategori',1,0);
        $pdf->Cell(17	,6,'Kuantiti',1,0);

        $pdf->Cell(30	,6,'Tarikh Tempah',1,0);
        $pdf->Cell(17	,6,'Jumlah',1,0);
    
        $pdf->Cell(45	,6,'emel',1,0);
        $pdf->Cell(15	,6,'status',1,1);

        $connection = mysql_connect("localhost", "root", "");
		 $db = mysql_select_db("psm2", $connection);
		 $query = mysql_query("select * from tempahan ", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
            $pdf->Cell(15	,6,$rows['notempah'],1,0);
            $pdf->Cell(27	,6,$rows['gred'],1,0);
            $pdf->Cell(25	,6,$rows['kategori'],1,0);
            $pdf->Cell(17	,6,$rows['kuantiti'],1,0);
            $pdf->Cell(30	,6,$rows['tarikhtempah'],1,0);
            $pdf->Cell(17	,6,$rows['jumlah'],1,0);
            $pdf->Cell(45	,6,$rows['emel'],1,0);
            $pdf->Cell(15	,6,$rows['status'],1,1);

          
         }
             
             



$pdf->Output();
?>
