<?php 
ob_start();
include('config.php');

require("TCPDF-main/tcpdf.php");

$pdf = new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

$pdf->SetFont('helvetica','B',36);
$pdf->Cell(0,22,'Sadhana Classes',0,1,'C',0,'',false,'M','M');

$pdf->SetFont('helvetica','',14);
$pdf->Cell(0,15,'Valai Pada Road,Shanti Nagar ',0,1,'C',0,'',false,'M','M');
$pdf->Cell(0,15,'Nallasopara(East),401209 ',0,1,'C',0,'',false,'M','M');

$pdf->SetFont('helvetica','',12);
$pdf->Cell(72,15,'E-mail: sadhanaclasses101@gmai.com',0,0,'L',0,'',false,'M','M');
$pdf->Cell(100,15,'Mobile: 8639089798/9370170329',0,0,'R',0,'',false,'M','M');


$pdf->Line(10,49,200,49);
$pdf->Line(10,52,200,52);

$pdf->SetFont('times','BI',12);
$pdf->ln(25);
$pdf->Cell(80,15,'Class:10th',0,0,'L',0,'',false,'M','M');
$pdf->Cell(80,15,'Student No:01',0,0,'L',0,'',false,'M','M');

$pdf->ln(6);
$pdf->Cell(80,15,'Batch:01/SSC/Evening',0,0,'L',0,'',false,'M','M');
$pdf->Cell(80,15,'Medium:English',0,0,'L',0,'',false,'M','M');

$pdf->ln(6);
$pdf->Cell(80,15,'Gender:Male',0,0,'L',0,'',false,'M','M');
$pdf->Cell(80,15,'Mobile:9987075096',0,0,'L',0,'',false,'M','M');

$pdf->ln(6);
$pdf->Cell(80,15,'Name:Shailesh Mourya',0,0,'L',0,'',false,'M','M');
$pdf->Cell(80,15,'School: twinkle star english high school',0,0,'L',0,'',false,'M','M');



$pdf->ln(6);
$pdf->SetFont('times','',12);

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="1">
    <tr style="background-color: grey;">
        <td  colspan="4" style="text-align: center;font-size: large;font-weight: bolder;">Fees Details</td>
        
    </tr>
    <tr>
        <td colspan="1" style="font-size: medium;font-weight: bolder;">Date</td>
         <td colspan="1" style="font-size: medium;font-weight: bolder;">Amount</td>
         <td colspan="3" style="font-size: medium;font-weight: bolder;">In Word</td>
    </tr>
    <tr>
       <td colspan="1">17/04/2024</td>
       <td colspan="1">1000</td>
       <td colspan="3">Ninety-nine thousand nine hundred ninety-nine only</td>
    </tr>
    <tr>
        <td  colspan="4" style="font-size: medium;font-weight: bolder;">Recepit No:</td>
        
    </tr>

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->SetFont('helvetica','',10);
$pdf->Cell(0,22,'Note: In Any condition fees non-refundable.',0,1,'L',0,'',false,'M','M');

$pdf->ln(6);
$pdf->SetFont('helvetica','B',10);
$pdf->Cell(0,22,'Authorized Signatory.',0,1,'R',0,'',false,'M','M');




$pdf->Output('example.pdf','I');



?>