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
echo "kategori : ".$var_kategori."<br>";
echo "produk :".$var_produk."<br>";
echo "Harga :".$var_harga."<br>";
echo "deskripsi :".$var_deskripsi."<br>";
echo "tanggal :".$var_tanggal."<br>";
echo "nama file :".$nama_file."";
//exit;
*/
//if(empty($nama_file)){
    /*
$query_update="update tb_product set 
                product_name='$var_produk',
                product_price='$var_harga',
                product_desc='$var_deskripsi',
                product_stock='$var_stock',
                product_date='$var_tanggal',
                category_id='$var_kategori' where product_id= '".$_POST['product_id']."'"; */
//$result=mysql_query($query_update);
//}else{
    $query_update="update tb_product set 
                product_name='$var_produk',
                product_price='$var_harga',
                product_desc='$var_deskripsi',
                product_images='$nama_file',
                product_stock='$var_stock',
                product_date='$var_tanggal',
                category_id='$var_kategori' where product_id= '".$_POST['product_id']."'";
$result=mysql_query($query_update);  
$derektori="../images/".$nama_file;
move_uploaded_file($lokasi_file,"$derektori");
//}

?>
Berhasil memperbarui kategori. 
Klik <a href="?page=produk.daftar_produk">disini</a> untuk kembali ke daftar produk