<?php
require_once('lib/koneksi.php');
$sql_show="select * from tb_product";
$result=mysql_query($sql_show);
?>
    <h2>Data Produk</h2>
<p>Daftar Produk. Tambah Produk <a href="?page=produk.tambah_produk">disini</a>. untuk cetak
<a href="lib/cetak_product.php">disini</a>
<a href="lib/cetak_csv.php">csv disini</a>
</p>
<table class="list">
	<tr>
		<th>No.</th>
		<th style="text-align:left">Nama Produk</th>
		<th style="text-align:left">Harga</th>
        <th style="text-align:left">Stok</th>
        <th style="text-align:left">Tanggal Masuk</th>
        <th style="text-align:left">Aksi</th>
	</tr>
    <?php
    $no=1;
    while($data=mysql_fetch_array($result)){
    ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td style="text-align:left"><?php echo $data['product_name'];  ?></td>
		<td style="text-align:left"><?php echo "Rp. ".number_format($data['product_price'],0,',','.');  ?></td>
        <td style="text-align:left"><?php echo $data['product_stock'];  ?></td>
        <td style="text-align:left"><?php echo $data['product_date'];  ?></td>
            <td style="text-align:left">
             <a href="?page=produk.ubah_produk&id=<?php echo $data['product_id'];  ?>">Ubah</a> | 
             <a href="?page=produk.proses_hapus_produk&id=<?php echo $data['product_id'];  ?>" 
            onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['product_name'];  ?>')">Hapus</a>
            </td>
	</tr>
    <?php
    $no++;
    }
    ?>
</table>