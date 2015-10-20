<?php
session_start();
require_once('admin/lib/koneksi.php');
$id_session = session_id();
//echo $id_session;
//exit;
$var_nama=$_POST['txtNama'];
$var_email=$_POST['txtEmail'];
$var_alamat=$_POST['txtAlamat'];
$var_nohp=$_POST['txtHp'];
$date=date('Y-m-d');
$jam=date("H:i");
$status="baru";

$query="insert into tb_customer values ('','$var_nama','$var_alamat','$var_nohp','$var_email','$jam','$status','$date')";
//echo $query;
//exit;
$result=mysql_query($query);
$id_customer=mysql_insert_id();
/*
if($result){
    echo "berhasil";
    echo "<br>".$id_customer;
}else{
    echo "gagal";
}
exit; */
function cart_content(){
	$ct_content = array();
	$id_session = session_id();
	$sql = mysql_query("SELECT * FROM tb_cart WHERE cart_session='$id_session'");
	
	while ($r=mysql_fetch_array($sql)) {
		$ct_content[] = $r;    //$data['isi_dalam_database'];
	}
	return $ct_content;       //return $data;
}
	$ct_content = cart_content();
	$jml = count($ct_content);
	for($i=0; $i<$jml; $i++){
	   
      /* echo $ct_content[$i]['product_id']."<br>";
       echo "</hr>";
       echo $ct_content[$i]['cart_qty']."<br>"; */
       $query_order="insert into tb_order values ('','{$ct_content[$i]['cart_qty']}','$id_customer','{$ct_content[$i]['product_id']}')";
       //echo $query_order;
       //exit;
       $result_o=mysql_query($query_order);
       $query_delete="delete from tb_cart where cart_session='{$ct_content[$i]['cart_session']}'";
       $result1=mysql_query($query_delete);
       }
     echo"Terimakasih telah belanja di toko kami<br>Pesanan Anda sedang Kami Proses dan Id,
     rincian pesanan telah <br>kami kirim ke email anda untuk melakukan konfirmasi pembayaran";
?>