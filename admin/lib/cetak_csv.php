<?php
session_start();
require('koneksi.php');
$content="Laporan Buku\n";
$content.="Id,Username,Password,Tanggal\n";
$query="SELECT
    confirm_name
    , confirm_email
    , customer_phone
    , customer_date
FROM
    tb_customer
    INNER JOIN tb_confirm 
        ON (tb_customer.customer_id = tb_confirm.customer_id)";
$result=mysql_query($query);
while($data=mysql_fetch_array($result)){
  /*
    $content.=$data['confirm_name'].",";  if($data['confirm_nam']==1){
        echo"laki";
    }else {
        echo"perempuan";
    } ",".$data['customer_phone'].",".$data['customer_date']."\n"; */
    $content.=$data['confirm_name'].",".$data['confirm_email'].",".$data['customer_phone'].",".$data['customer_date']."\n";
    
}
$out_file_name="laporan.csv";
header("Content-Type: application/csv|");
header("Content-Disposition: attachement; filename=".$out_file_name.";");
echo $content;

?>