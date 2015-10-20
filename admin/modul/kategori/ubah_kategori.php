<?php
require_once('lib/koneksi.php');
$id=$_GET['id'];
//echo $id;
//exit;
$sql_show="select * from tb_category where category_id='".$id."'";
$result=mysql_query($sql_show);
$data=mysql_fetch_array($result);
?>

<h2>Ubah Kategori</h2>
<form action="?page=kategori.proses_ubah_kategori" method="post">
<input  type="hidden" name="id" value="<?php echo $data['category_id']; ?>"/>
	<table class="data">
		<tr>
			<td width="30%">Nama Kategori</td>
			<td><input type="text" name="txtNamaKategori" value="<?php echo $data['category_name'];  ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Ubah" />
			</td>
		</tr>
	</table>
</form>	