<?php
require_once('lib/koneksi.php');
error_reporting(0);
$id=$_GET['id'];
//echo $id;
//exit;
$query="select * from tb_customer where customer_id='".$id."'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
$query1="SELECT *
FROM
    db_project.tb_product
    INNER JOIN db_project.tb_order 
        ON (tb_product.product_id = tb_order.product_id)
    INNER JOIN db_project.tb_customer 
        ON (tb_customer.customer_id = tb_order.customer_id) where tb_customer.customer_id='".$id."'";
$result1=mysql_query($query1);
 
?>
<h2>Detail Order</h2>
<form action="?page=order.ubah_transaksi" method="post">
<input type="hidden" name="id" value="<?php echo $data['customer_id'];  ?>"/>
	<table class="data">
		<tr>
			<td width="30%">No Order</td>
			<td>123</td>
		</tr>
		<tr>
			<td>Jam Order</td>
			<td>09 : 12 :22</td>
		</tr>
		<tr>
			<td>Tanggal Order</td>
			<td>12 Januari 2014</td>
		</tr>
		<tr>
			<td>Status Order</td>
			<td><select name="status">
                    <option value="Baru">Baru</option>
                    <option value="Lunas">Lunas</option>
                </select>
            </td>
		</tr>
		<tr>
			<td>Tanggal Order</td>
			<td>15 Oktober 2014</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Ubah" />
			</td>
		</tr>
	</table>
</form>

<table border="1">
<tr><th>Nama Produk</th><th>Berat</th><th>Jumlah</th><th>Harga Satuan</th><th>Sub Total</th></tr>
<?php
while($data1=mysql_fetch_array($result1)){
    $sub_total=$data1['product_price'] * $data1['order_qty'];
    $total+=$sub_total;
?>
<tr><td><?php echo $data1['product_name']; ?></td><td>3 kg</td><td><?php echo $data1['order_qty']; ?></td><td><?php echo $data1['product_price']; ?></td>
<td><?php echo $sub_total;  ?></td></tr>
<?php
}
?>
<tr><td colspan="4">Total Rp</td><td><?php echo $total; ?></td></tr>
<tr><td colspan="4">Ongkos Kirim Rp</td><td>Rp. 450.000,00</td></tr>
<tr><td colspan="4">Total Berat</td><td>Rp. 450.000,00</td></tr>
<tr><td colspan="4">Total Ongkos Kirim</td><td>Rp. 450.000,00</td></tr>
<tr><td colspan="4">Grand Total</td><td>Rp. 450.000,00</td></tr>
</table>

<table border="1">
<tr><th colspan="2">Data Customer</th></tr>
<tr><td>Nama Pembeli</td><td><?php echo $data['customer_name']; ?></td></tr>
<tr><td>Alamat Pengiriman</td><td><?php echo $data['customer_address']; ?></td></tr>
<tr><td>No Telpon</td><td><?php echo $data['customer_phone']; ?></td></tr>
<tr><td>Email</td><td><?php echo $data['customer_email']; ?></tr>
</table>