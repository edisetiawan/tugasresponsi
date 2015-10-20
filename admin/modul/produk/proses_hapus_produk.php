<?php
require_once('lib/koneksi.php');
$id=$_GET['id'];
$query="delete from tb_product where product_id='".$id."'";
$result=mysql_query($query);
if($result){
   echo" Berhasil menghapus kategori. Klik <a href='?page=produk.daftar_produk'>
   disini</a> untuk kembali ke daftar kategori";
}
?>