<?php
require_once('admin/lib/koneksi.php');
$id=$_GET['id'];
$query="delete from tb_cart where cart_id='".$id."'";
$result=mysql_query($query);
if($result){
    header('location: index.php?page=keranjang');
}
?>