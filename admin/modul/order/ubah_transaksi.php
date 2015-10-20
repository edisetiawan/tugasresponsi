<?php
require_once('lib/koneksi.php');
$id=$_POST['id'];
$status=$_POST['status'];

//echo $id." | ".$status;
//exit;
$sql_update="update tb_customer set customer_status='".$status."' where customer_id=".$id;
//echo $sql_update;
//exit;
$result=mysql_query($sql_update);

header('location: ?page=order.daftar_order');
?>