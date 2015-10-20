<script language="javascript">
    /*function cekHapus(nama){
        if(confirm("Yakin ingin menghapus data "+category_name+" ? ")){
            return true;            
        }else{
            return false;
        }
    }*/
</script>
<?php
require_once('lib/koneksi.php');
?>
<h2>Kategori</h2>
<p>Daftar kategori Product. Tambah kategori Product <a href="?page=kategori.tambah_kategori">disini</a>.</p> 
<table class="list">
	<tr>
		<th>No.</th>
		<th style="text-align:left">Nama Kategori</th>
		<th>Aksi</th>
	</tr>
 <?php
 $sql_show="select * from tb_category";
 $result=mysql_query($sql_show);
 $no=1;
 while($data=mysql_fetch_array($result)){
 
 ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td style="text-align:left"><?php echo $data['category_name'];  ?></td>
		<td>
            <a href="?page=kategori.ubah_kategori&id=<?php echo $data['category_id'];  ?>">Ubah</a>
            <a href="?page=kategori.proses_hapus_kategori&id=<?php echo $data['category_id'];  ?>" 
            onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['category_name'];  ?>')">Hapus</a>
		</td>
	</tr>
 <?php
 $no++;
 }
 ?>
</table>	