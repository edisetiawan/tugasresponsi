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