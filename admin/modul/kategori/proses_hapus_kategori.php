<?php
require_once('lib/koneksi.php');
$id=$_GET['id'];
$sql_delete="delete from tb_category where category_id='".$id."'";
$result=mysql_query($sql_delete);
?>
Berhasil menghapus kategori. Klik <a href="?page=kategori.daftar_kategori">disini</a> untuk kembali ke daftar kategori
