<?php
require_once('lib/koneksi.php');
$query="select * from tb_customer";
$result=mysql_query($query);
?>
<h2>Order</h2>
<table class="list">
	<tr>
		<th>No.</th>
		<th style="text-align:left">Nama Pembeli</th>
		<th>Tanggal Order</th>
		<th>Jam</th>
        <th>Status</th>
		<th>Aksi</th>
	</tr>
    <?php
    $no=1;
    while($data=mysql_fetch_array($result)){
    ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td style="text-align:left"><?php echo $data['customer_name']; ?></td>
		<td><?php echo $data['customer_date']; ?></td>
		<td><?php echo $data['customer_jam']; ?></td>
        <td><?php echo $data['customer_status']; ?></td>
		<td>
			<a href="?page=order.detail_order&id=<?php echo $data['customer_id']; ?>">Detail</a>
			<a href="?page=order.hapus_order&id=<?php echo $data['customer_id']; ?>" onclick="return confirm('Apakah yakin akan menghapus pesanan <?php echo $data['customer_name'];  ?>')">Hapus</a>
		</td>
	</tr>
    <?php
    $no++;
    }
    ?>
</table>		