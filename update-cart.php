<?php
session_start();
error_reporting(0);
require_once('admin/lib/koneksi.php');
$id_cart=$_GET['id'];
//$id_product=$_GET['id'];
$cart_qty=$_POST['cart_qty'];
//echo $id_cart." -- ";
//echo $cart_qty;
//exit;
$query="update tb_cart set cart_qty='".$cart_qty."' where cart_id='".$id_cart."'";// and product_id='".$id_product."'";

//echo $query;
//exit;
$result=mysql_query($query);
if($result){
    //header('location: ?page=keranjang');
    header('location: index.php?page=keranjang');
}else{
    echo "gagal update";
}
?>