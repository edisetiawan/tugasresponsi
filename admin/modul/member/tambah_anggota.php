<form action="?page=anggota.proses_tambah" method="post">
	<table class="data">
		<tr>
			<td width="30%">Nama Anggota</td>
			<td><input type="text" name="txtNamaAnggota" /></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<input type="radio" name="rdStatus" value="aktif" checked="checked" /> Aktif
				<input type="radio" name="rdStatus" value="non-aktif" checked="checked" /> Non-Aktif
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Tambah" />
			</td>
		</tr>
	</table>
</form>