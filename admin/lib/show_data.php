<?php
require_once('koneksi.php');
$sqlShow="SELECT * FROM tb_product ";
$result=mysql_query($sqlShow);
?>
<table border='1'><b><code><a href="cetak_pdf.php">Cetak PDF</a></code></b>
<tr><td><b>No</b></td><td><b>Nim</b></td><td><b>Nama</b></td><td><b>Alamat</b></td></tr>
<?php
$no=0;
while($data=mysql_fetch_array($result)){
$no++;
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $data['product_name']; ?></td>
<td><?php echo $data['product_price']; ?></td>
<td><?php echo $data['product_stock']; ?></td>
</tr>
<?php
}
?>
</table>