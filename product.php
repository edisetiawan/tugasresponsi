<?php
require_once('admin/lib/koneksi.php');
$query="select * from tb_product";
$result=mysql_query($query);
while($data=mysql_fetch_array($result)){
?>
<a href="index.php?page=detail-product&id=<?php echo $data['product_id']; ?>">
<img src="images/<?php echo $data['product_images']?>" width="144" height="144" /> </a>
<?php
}
?>