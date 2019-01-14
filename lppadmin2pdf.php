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

$pdf->SetFont('Arial','',9);
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
$pdf->Cell(90	,6,' Alamat Pelanggan P2A Enterprise',0,1);

$pdf->Cell(189	,5,'',0,1);  

        $pdf->Cell(10	,5,'Id',1,0);
        $pdf->Cell(100	,5,'Alamat',1,0);
        $pdf->Cell(15	,5,'Poskod',1,0);
        $pdf->Cell(45	,5,'bandar',1,0);
        $pdf->Cell(25	,5,'Negeri',1,1);

        $connection = mysql_connect("localhost", "root", "");
		 $db = mysql_select_db("psm2", $connection);
		 $query = mysql_query("select * from pelanggan ", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
             
            $pdf->Cell(10	,5,$rows['idpelanggan'],1,0);
            $pdf->Cell(100	,5,$rows['alamat'],1,0);
             $pdf->Cell(15	,5,$rows['poskod'],1,0);
             $pdf->Cell(45	,5,$rows['bandar'],1,0);
             $pdf->Cell(25	,5,$rows['negeri'],1,1);
         }
             


             



$pdf->Output();
?>
