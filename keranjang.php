<?php
session_start();
error_reporting(0);
require_once('admin/lib/koneksi.php');
$id_session=session_id();
$query="SELECT *
FROM
    db_project.tb_product
    INNER JOIN db_project.tb_cart 
        ON (tb_product.product_id = tb_cart.product_id) 
        WHERE tb_cart.cart_session='".$id_session."'";// and tb_product.product_id=tb_cart.product_id";
$result=mysql_query($query);

?>

<table border="1">
<tr><td>No</td><td>Nama Product</td><td>Harga</td><td>Jumlah</td><td>Sub Total</td><td>Hapus</td></tr>
<?php
$no=1;
while($data=mysql_fetch_array($result)){
    $sub_total=+$data['product_price'] * $data['cart_qty'];
    $total+=$sub_total;
?>
    <tr>
        <td><?php echo $no;  ?></td><td><?php echo $data['product_name']; ?></td>
        <td><?php echo "Rp. ".number_format($data['product_price'],0,',','.'); ?></td>
        <form method="post" action="update-cart.php?id=<?php echo $data['cart_id']; ?>">
        <td><input type="text" name="cart_qty" value="<?php echo $data['cart_qty']; ?>" size="2"/></td>
        <td><?php echo "Rp. ".number_format($sub_total,0,',','.'); ?></td>
        <td>
        <input type="submit" name="update" value="Update" /></a></form>
        <a href="hapus-cart.php?id=<?php echo $data['cart_id']; ?>"
        onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['product_name'];  ?>')">hapus</a></td>
    </tr>
<?php
$no++;
}
?>
<tr><td colspan="4">Total</td><td><?php echo "Rp. ".number_format($total,0,',','.'); ?></td></tr>
</table>
<a href="?page=product">belanja lagi</a>
<a href="index.php?page=login">Checkout</a>
