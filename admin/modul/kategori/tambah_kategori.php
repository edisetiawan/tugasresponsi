<script language="javascript">
 function cekTambah(){
    if(document.getElementById("txtNamaKategori"). value == ""){
        alert("kategori harus disi"); 
        document.getElementById("txtNamaKategori").focus();
        document.getElementById("txtNamaKategori").className = "error";
        return false;
   
    
 }
 }
</script>
<form action="?page=kategori.proses_tambah_kategori" method="post" onsubmit="return cekTambah()">
	<table class="data">
		<tr>
			<td width="30%">Nama Kategori</td>
			<td><input type="text" name="txtNamaKategori" id="txtNamaKategori" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Tambah" />
			</td>
		</tr>
	</table>
</form>	