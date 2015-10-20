<style type="text/css">
#content .error {border: 1px solid red;}
#content .normal {border: 1px solid #b6b5b4;}
</style>
<script language="javascript">
 function cekTambah(){ 
    if(document.getElementById("cbKategori"). value == ""){
        alert("Kategori balum dipilih"); 
        document.getElementById("cbKategori").focus();
        document.getElementById("cbKategori").className = "error";
        return false;
    }else{
        document.getElementById("cbKategori").className = "normal";
    }
    if(document.getElementById("txtNamaProduk"). value == ""){
        alert("nama produk harus disi"); 
        document.getElementById("txtNamaProduk").focus();
        document.getElementById("txtNamaProduk").className = "error";
        return false;
    }else{
        document.getElementById("txtNamaProduk").className = "normal";
    }
    if(document.getElementById("txtHarga"). value == ""){
        alert("harga produk harus disi"); 
        document.getElementById("txtHarga").focus();
        document.getElementById("txtHarga").className = "error";
        return false;
    }else{
        document.getElementById("txtHarga").className = "normal";
    }
    if(document.getElementById("txtStok"). value == ""){
        alert("stok produk harus disi"); 
        document.getElementById("txtStok").focus();
        document.getElementById("txtStok").className = "error";
        return false;
    }else{
        document.getElementById("txtStok").className = "normal";
    }
    if(document.getElementById("txtDeskripsi"). value == ""){
        alert("deskripsi produk harus disi"); 
        document.getElementById("txtDeskripsi").focus();
        document.getElementById("txtDeskripsi").className = "error";
        return false;
    }else{
        document.getElementById("txtDeskripsi").className = "normal";
    }
     if(document.getElementById("fupload"). value == ""){
        alert("deskripsi produk harus disi"); 
        document.getElementById("fupload").focus();
        document.getElementById("fupload").className = "error";
        return false;
    }else{
        document.getElementById("fupload").className = "normal";
    }   
 }  
</script>
<?php
require_once('lib/koneksi.php');
?>
<h2 id="x">Tambah Produk</h2>
<form action="?page=produk.proses_tambah_produk" method="post" enctype="multipart/form-data" onsubmit="return cekTambah()">
	<table class="data">
        <tr>
			<td width="30%">Kategori</td>
			<td>
				<select name="cbKategori" id="cbKategori">
					<option value="">- pilih -</option>
                    <?php
                    $sql_select="select * from tb_category";
                    $result=mysql_query($sql_select);
                    while($data=mysql_fetch_array($result)){
                    ?>
                    <option value="<?php echo $data['category_id']; ?>"><?php echo $data['category_name']; ?></option>
                    <?php
                    }
                    ?>
				</select>
			</td>
		</tr>
		<tr>
			<td >Nama Produk</td>
			<td><input type="text" name="txtNamaProduk" id="txtNamaProduk" /></td>
		</tr>
        <tr>
			<td>Harga</td>
			<td><input type="text" name="txtHarga" id="txtHarga"/></td>
		</tr>
        <tr>
			<td>Stok</td>
			<td><input type="text" name="txtStok" id="txtStok"/></td>
		</tr>
        <tr>
			<td>Deskripsi</td>
			<td><textarea name="txtDeskripsi" id="txtDeskripsi"></textarea></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="fupload" id="fupload" size="30"/></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Tambah" />
			</td>
		</tr>
	</table>
</form>