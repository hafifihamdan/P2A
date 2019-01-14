<?php
session_start();
$emel= $_SESSION['emel'];
require('fpdf17/fpdf.php');
?>
   <?php

    $connection = mysql_connect("localhost", "root", "");
         $db = mysql_select_db("psm2", $connection);
		 $query = mysql_query("select * from pelanggan where emel='$_SESSION[emel]'", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
        
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

    
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

$pdf->Cell(189	,5,'',0,1);//end of line
$pdf->Cell(189	,5,'',0,1);//end of line
//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(140	,5,'P2A ENTERPRISE (RA0049158-M)',0,0);
$pdf->Cell(69	,5,'INVOICE',0,1);//end of line
             
$pdf->Cell(189	,5,'',0,1);//end of line
$pdf->SetFont('Arial','',12);
             
$pdf->Cell(140	,5,'',0,0);
$pdf->Cell(30	,5,'No. Rujukan',0,0);
$pdf->Cell(19	,5,$rows['idpelanggan'],0,0);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,5,'',0,1);//end of line
             


$pdf->SetFont('Arial','B',12);             
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'Pengurus P2A Enterprise,',0,1);
$pdf->SetFont('Arial','',12); 
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'Kampung Belat,Kubur Panjang,',0,1);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'06760,',0,1);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'Pendang,',0,1);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'Kedah.',0,1);
$pdf->Cell(189	,5,'',0,1);            
//billing address
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100	,5,'Bill Kepada',0,1);//end of line

$pdf->Cell(189	,5,'',0,1);//end of line
$pdf->SetFont('Arial','B',12);

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['Nama'],0,1);
             
$pdf->SetFont('Arial','',12);             

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['alamat'],0,1);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['poskod'],0,1);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['bandar'],0,1);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$rows['negeri'],0,1);

             
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

$notempah= $_GET['notempah'];
        $connection = mysql_connect("localhost", "root", "");
		 $db = mysql_select_db("psm2", $connection);
		 $query = mysql_query("select * from tempahan where notempah='$notempah' ", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
           
            $pdf->Cell(150	,5,'',0,0);
            $pdf->Cell(20	,5,'No Resit',0,0);         
            $pdf->Cell(19	,5,$rows['notempah'],0,1);
          
         }
             $pdf->Cell(138	,5,'',0,1);
             
//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(90	,5,'Gred Buah/ Jenis',1,0);
$pdf->Cell(60	,5,'Tarikh Tempah',1,0);            
$pdf->Cell(25	,5,'Kuantiti',1,1);
             
$pdf->SetFont('Arial','',12);

        $notempah= $_GET['notempah'];
        $connection = mysql_connect("localhost", "root", "");
		 $db = mysql_select_db("psm2", $connection);
		 $query = mysql_query("select * from tempahan where notempah='$notempah' ", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
            $pdf->Cell(90	,6,$rows['gred'],1,0);
            $pdf->Cell(60	,6,$rows['tarikhtempah'],1,0);            
            $pdf->Cell(25	,6,$rows['kuantiti'],1,1,'R');
             
            $pdf->Cell(189	,10,'',0,1);
            $pdf->SetFont('Arial','B',12);
             
            $pdf->Cell(110	,6,'',0,0);
            $pdf->Cell(40	,6,'Jumlah Harga RM',0,0);         
            $pdf->Cell(25	,6,$rows['jumlah'],1,1,'R');
          
         }
              $pdf->Cell(189	,10,'',0,1);
             $pdf->SetFont('Arial','',12);
              $pdf->Cell(175	,10,'*Sila bawa invoice sebagai bukti tempahan',0,1);
             $pdf->Cell(175	,10,'*Sebarang masalah atau cadangan sila isi borang aduan di Laman Hubungi Kami ',0,1);
$pdf->Output();
}?>
