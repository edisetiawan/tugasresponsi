<style type="text/css">
#content .error {border: 1px solid red;}
#content .normal {border: 1px solid #b6b5b4;}
</style>
<script language="javascript">
/*
 function cekTambah(){
    if(document.getElementById("txtNamaBuku"). value == ""){
        alert("judul buku harus disi"); 
        document.getElementById("txtNamaBuku").focus();
        document.getElementById("txtNamaBuku").className = "error";
        return false;
    }else{
        document.getElementById("txtNamaBuku").className = "normal";
    }
     if(document.getElementById("txtKeterangan"). value == ""){
        alert("sinopsis harus disi"); 
        document.getElementById("txtKeterangan").focus();
        return false;
    }
      if(document.getElementById("txtPengarang"). value == ""){
        alert("judul buku harus disi"); 
        document.getElementById("txtPengarang").focus();
        return false;
    }
     if(document.getElementById("cbKategori"). value == ""){
        alert("sinopsis harus disi"); 
        document.getElementById("cbKategori").focus();
        return false;
    }
    
 } */
</script>
<?php
require_once('lib/koneksi.php');
$id=$_GET['id'];
//echo $id;
//exit;
$query="select * from tb_product where product_id='".$id."'";
$result=mysql_query($query);
$data_p=mysql_fetch_array($result);
//echo $data['product_name'];
//exit;

?>
<h2 id="x">Ubah Produk</h2>
<form action="?page=produk.proses_ubah_produk" method="post" enctype="multipart/form-data" onsubmit="return cekTambah()">
<input type="hidden" name="product_id" value="<?php echo $data_p['product_id']; ?>" />
	<table class="data">
        <tr>
			<td width="30%">Kategori</td>
			<td>
				<select name="cbKategori" id="wcbKategori">
                    <?php
        $tampil=mysql_query("SELECT * FROM tb_category ORDER BY category_id");
          if ($data_p['category_id']==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($data_p['category_id']==$w['category_id']){
              echo "<option value=$w[category_id] selected>$w[category_name]</option>";
            }
            else{
              echo "<option value=$w[category_id]>$w[category_name]</option>";
            }
          }
                    ?>
				</select>
			</td>
		</tr>
		<tr>
			<td >Nama Produk</td>
			<td><input type="text" name="txtNamaProduk" id="txtNamaProduk" value="<?php echo $data_p['product_name']; ?>" /></td>
		</tr>
        <tr>
			<td>Harga</td>
			<td><input type="text" name="txtHarga" id="txtHarga" value="<?php echo $data_p['product_price']; ?>" /></td>
		</tr>
        <tr>
			<td>Stok</td>
			<td><input type="text" name="txtStok" id="txtStok" value="<?php echo $data_p['product_stock']; ?>" /></td>
		</tr>
        <tr>
			<td>Deskripsi</td>
			<td><textarea name="txtDeskripsi" id="txtDeskripsi" ><?php echo $data_p['product_desc']; ?> </textarea></td>
		</tr>
        <tr>
			<td>Image</td>
			<td><img src="../images/<?php echo $data_p['product_images']  ?>"/></td>
		</tr>
		<tr>
			<td>Ubah Image</td>
			<td><input type="file" name="fupload" value="<?php echo $data_p['product_images']  ?>" size="30"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Ubah" />
			</td>
		</tr>
	</table>
</form>