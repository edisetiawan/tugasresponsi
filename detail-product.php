<?php
require_once('admin/lib/koneksi.php');
$id=$_GET['id'];
$query="select * from tb_product where product_id='".$id."'";
$result=mysql_query($query);
$data=mysql_fetch_array($result);
?> 
<img src="images/<?php echo $data['product_images'];  ?>" width="244" height="244" /><br />
<?php echo $data['product_name']; ?><br />
<b>WARNA </b><select name="ukuran">
        <option>KUNING</option>
        <option>PINK</option>
        <option>ORANGE</option>
        <option>HIJAU</option>
        <option>HITAM</option>
        </select><br />
<b>Ukuran</b> <select name="ukuran">
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
        </select><br />
<b>Harga : </b><?php echo "Rp. ".number_format($data['product_price'],0,',','.');  ?> <br />
<b>Deskripsi :</b> <?php echo $data['product_desc']; ?><br />

 <a href="?page=simpan-keranjang&id=<?php echo $data['product_id'] ?>">Beli</a>
 