<?php
require_once('lib/koneksi.php');
$var_kategori=$_POST['txtNamaKategori'];
$sql_insert="insert into tb_category values ('','".$var_kategori."')";
$result=mysql_query($sql_insert);
?>
Berhasil menambah kategori. 
Klik <a href="?page=kategori.daftar_kategori">disini</a> untuk kembali ke daftar kategori
