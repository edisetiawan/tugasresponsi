<?php
require_once('lib/koneksi.php');
$id=$_GET['id'];
//echo $id;
//exit;
$query="delete from tb_customer where customer_id='".$id."'";
$result=mysql_query($query);
if($result){
    $query1="delete from tb_order where customer_id='".$id."'";
    $result1=mysql_query($query1);
    header('location: index.php?page=order.daftar_order');
}


?>