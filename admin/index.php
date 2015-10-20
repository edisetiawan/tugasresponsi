<?php
session_start();
if((empty($_SESSION['username'])) AND (empty($_SESSION['password']))){
    header('location: login.php');
}else {
?>
<html>
<head>
</head>
<title>Sisitem Informasi Perpustakaan</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
<div id="main">
	<div id="header"><h3 align="center">Admin Area</h3></div>
	<div id="menu">
    	<ul>
            <li><a href="?page=kategori.daftar_kategori">Kategori</a></li>
            <li><a href="?page=produk.daftar_produk">Produk</a></li>
            <li><a href="?page=order.daftar_order">Order</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
<div id="content">
<?php

if(isset($_GET['page']) && strlen($_GET['page']) > 0){
	$page=str_replace(".","/",$_GET['page']).".php";
}else {
	$page="welcome.php";	
}
if(file_exists("modul/".$page)){
	include("modul/".$page);	
}else{
include("modul/welcome.php");	
} 
?>
</div>
<div id="footer">copy right @edi</b></div>
    
</div>
</body>
</html>
<?php
}
?>