<style type="text/css">
#content .error {border: 1px solid red;}
#content .normal {border: 1px solid #b6b5b4;}
</style>
<script language="javascript">
 function cekPesan(){ 
    if(document.getElementById("txtNama"). value == ""){
        alert("nama harus disi"); 
        document.getElementById("txtNama").focus();
        document.getElementById("txtNama").className = "error";
        return false;
    }else{
        document.getElementById("txtNama").className = "normal";
    }
    if(document.getElementById("txtEmail"). value == ""){
        alert("email harus disi"); 
        document.getElementById("txtEmail").focus();
        document.getElementById("txtEmail").className = "error";
        return false;
    }else{
        document.getElementById("txtEmail").className = "normal";
    }
    if(document.getElementById("txtPesan"). value == ""){
        alert("pesan harus disi"); 
        document.getElementById("txtPesan").focus();
        document.getElementById("txtPesan").className = "error";
        return false;
    }else{
        document.getElementById("txtPesan").className = "normal";
    }
 }
</script>
<form action="kirim-pesan.php" method="post" onsubmit="return cekPesan()">
<table>
<tr><td>Nama</td><td>:</td><td><input type="text" name="txtNama" id="txtNama"/></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="txtEmail" id="txtEmail"/></td></tr>
<tr><td>Pesan</td><td>:</td><td><textarea name="txtPesan" id="txtPesan"></textarea></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Kirim"/></td></tr>
</table>
</form>