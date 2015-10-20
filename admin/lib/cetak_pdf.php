<?php
require('fpdf17/fpdf.php');
require('koneksi.php');
class PDF extends FPDF
{
function LoadDataFromSQL($sql)
{
  $hasil=mysql_query($sql) or die(mysql_error());
 
  $data = array();
  while($rows=mysql_fetch_array($hasil)){
    $data[] = $rows;
}
  return $data;
}
// Colored table
function FancyTable($header, $data)
{
  // Colors, line width and bold font
  $this->SetFillColor(255,165,74);
  $this->SetTextColor(255);
  $this->SetDrawColor(128,0,0);
  $this->SetLineWidth(.3);
  $this->SetFont('','B');
   /*  $w adalah variabel lebar dari kolom data
            dalam kasus ini, kolom no lebarnya 20, propinsi 100
         dan upah 60 */
  $w = array( 20,20, 50, 40);
  for($i=0;$i<count($header);$i++)
    $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
  $this->Ln();
  // tentukan warna background and fontnya  
  $this->SetFillColor(224,235,255);
  $this->SetTextColor(0);
  $this->SetFont('');
  // Data
  $fill = false;
  $i=0;
  foreach($data as $row)
  {
    $i++;
    $this->Cell($w[0],6,$i,'LR',0,'L',$fill);
    $this->Cell($w[1],6,$row[0],'LR',0,'L',$fill);
    $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
    $this->Cell($w[3],6,$row[1],'LR',0,'R',$fill);
    $this->Ln();
    $fill = !$fill;
   
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
 }
}
 
$pdf = new PDF();
// header tabel 
$header = array('No','ID','propinsi', 'upah');
// buat query SQLmu disini 
$query="select product_id,product_name,product_price from tb_product";
$data = $pdf->LoadDataFromSQL($query);
//tentukan ukuran dan jenis form 
$pdf->SetFont('Arial','',11);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>