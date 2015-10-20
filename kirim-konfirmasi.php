<?php
require_once('admin/lib/koneksi.php');
$var_idBeli=$_POST['txtIdBeli'];
$var_email=$_POST['txtEmail'];
//echo $var_idBeli." email :".$var_email;
//exit;
$query="select customer_id,customer_email from tb_customer 
        where customer_id='".$var_idBeli."'and customer_email='".$var_email."'";
$result=mysql_query($query);
$rows=mysql_num_rows($result);
//echo $rows;
//exit;
if($rows > 0){
    $data=mysql_fetch_array($result);
    $id_customer=$data['customer_id'];
    $insert="insert into tb_confirm values
            '1','2','3','4','".$id_customer."'";
    $result=mysql_query($insert);
    //if($result){
        echo "Oke konfirmasi anda sudah kami terima";
    //}
}else{
        echo "mohon maaf pesanan anda tidak ditemukan";
}


?>