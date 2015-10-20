<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" /><title>FashionShop</title>
<link rel="stylesheet" href="css/csshijab.css" type="text/css" />
</head>
<body>
<div id="wrapper">
<!--------------- #header --------------->
<p align="center"><img src="image/fashion.jpg" width="90%" height="40%"/></p>
 <div id="header">
 <!-- <h1>Hijab Aisyah Shop</h1> -->
 </div>
<!--------------- #menu --------------->
 <div id="menu">
 <ul>
 <li><a href="index.php">Beranda</a></li>
 <li><a href="?page=product">Product</a></li>
 <li><a href="?page=konfirmasi">Konfirmasi Pembayaran</a></li>
 <!--<li><a href="?page=hubungi-kami">Hubungi kami</a></li> -->
 <li><a href="?page=cara-pesan">Cara Pesan</a></li>
 <li><a href="?page=keranjang">Keranjang</a></li>
 <li><input type="text"/><input type="submit" value="cari"/></li>
 </ul>
 </div>
<!--------------- #sidebar --------------->
 <div id="sidebar">
 <div class="previous"> <h1>Kategori</h1>
 <ul>
 <?php
 require_once('admin/lib/koneksi.php');
 $query="select * from tb_category";
 $result=mysql_query($query);
 while($data=mysql_fetch_array($result)){
 ?>
    <li><a href="#"><?php echo $data['category_name']; ?></a></li>
 <?php
 }
 ?>
 </ul>
</div>
 </div>
<!--------------- #content --------------->
 <div id="content">
<?php
if(isset($_GET['page']) && strlen($_GET['page']) > 0){
	$page=($_GET['page']).".php";
}else {
	$page="product.php";	
}
if(file_exists($page)){
	include($page);	
}else{
include("product.php");	
}
?> 
 </div>
<!--------------- #footer --------------->
 <div id="footer">
 Copyright &copy; 2014 by: <a href="#">hijabaisyahshop.com</a></div>
 </div>

</body>
</html>