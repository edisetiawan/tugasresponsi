<?php
require_once('lib/koneksi.php');
$var_username=$_POST['frm_username'];
$var_password=md5($_POST['frm_password']);

//echo $var_username." pass : ".$var_password;
//exit;
$query="select admin_username,admin_password from tb_admin 
        where admin_username='".$var_username."' 
        AND 
        admin_password='".$var_password."' ";
$result=mysql_query($query);

$rows=mysql_num_rows($result);
//echo $rows;
//exit;
if($rows > 0 ){
    session_start();
    $data=mysql_fetch_array($result);
    $_SESSION['username']=$data['admin_username'];
    $_SESSION['password']=$data['admin_password'];
    header('location: index.php');
}else{
    header('location: login.php?action=failed');
}


?>