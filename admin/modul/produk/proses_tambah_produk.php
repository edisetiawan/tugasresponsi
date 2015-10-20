<?php
require_once('lib/koneksi.php');
//exit;
$var_kategori=$_POST['cbKategori'];
$var_produk=$_POST['txtNamaProduk'];
$var_harga=$_POST['txtHarga'];
$var_stock=$_POST['txtStok'];
$var_deskripsi=$_POST['txtDeskripsi'];
$var_tanggal=date("Y-m-d, H:i");
//-----------------------ambil gambar
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];
/*
echo $var_kategori."<br>";
echo $var_produk."<br>";
echo $var_harga."<br>";
echo $var_deskripsi."<br>";
echo $var_tanggal."<br>";
echo $nama_file."<br>";
*/
//exit;
$query="insert into tb_product values 
        ('','".$var_produk."','".$var_harga."','".$var_deskripsi."','".$nama_file."','".$var_stock."',
            '".$var_tanggal."','".$var_kategori."')";
           // echo $query;
            //exit;
$result=mysql_query($query);
if ($result){
    echo "berhasil disimpan";
}
//echo $nama_file;
//exit;

$derektori="../images/".$nama_file;
move_uploaded_file($lokasi_file,"$derektori");

?>