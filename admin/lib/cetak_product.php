<?php
//require('../../fpdf.php');
require('fpdf17/fpdf.php');
//exit;
require('koneksi.php');
//exit;
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
  $this->SetFillColor(234,136,244);   //ubah warna format rgb
  $this->SetTextColor(255);
  $this->SetDrawColor(128,0,0);
  $this->SetLineWidth(.3);
  $this->SetFont('','B');
   /*  $w adalah variabel lebar dari kolom data
            dalam kasus ini, kolom no lebarnya 20, propinsi 100
         dan upah 60 */
  $w = array( 15,40,40,30,40);
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
    $this->Cell($w[2],6,$row[1],'LR',0,'L',$fill);
    $this->Cell($w[3],6,$row[2],'LR',0,'R',$fill);
    $this->Cell($w[4],6,$row[3],'LR',0,'R',$fill);
    $this->Ln();
    $fill = !$fill;
   
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
 }
}
 
$pdf = new PDF();
// header tabel 
$header = array('No','Nama Produk','Harga','Stok', 'Tanggal Masuk');
// buat query SQLmu disini 
$query="SELECT admin_username,customer_email,customer_name,customer_date
FROM
   tb_admin
    ,tb_customer
    INNER JOIN db_project.tb_confirm 
        ON (tb_customer.customer_id = tb_confirm.customer_id)";
//$query="select product_name,product_price,product_stock,product_date from tb_product";
$data = $pdf->LoadDataFromSQL($query);
//tentukan ukuran dan jenis form 
$pdf->SetFont('Arial','',11);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>