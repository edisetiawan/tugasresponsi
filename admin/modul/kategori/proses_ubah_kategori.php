<?php
require_once('lib/koneksi.php');
$id=$_POST['id'];
$var_kategori=$_POST['txtNamaKategori'];
$sql_update="update tb_category set category_name='".$var_kategori."' where category_id='".$id."'";
$result=mysql_query($sql_update);
?>
Berhasil memperbarui kategori. 
Klik <a href="?page=kategori.daftar_kategori">disini</a> untuk kembali ke daftar kategori