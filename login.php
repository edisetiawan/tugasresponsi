<style type="text/css">
#content .error {border: 1px solid red;}
#content .normal {border: 1px solid #b6b5b4;}
</style>
<script language="javascript">
 function cekOrder(){ 
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
    if(document.getElementById("txtAlamat"). value == ""){
        alert("alamat harus disi"); 
        document.getElementById("txtAlamat").focus();
        document.getElementById("txtAlamat").className = "error";
        return false;
    }else{
        document.getElementById("txtAlamat").className = "normal";
    }
    if(document.getElementById("txtHp"). value == ""){
        alert("no HP harus disi"); 
        document.getElementById("txtHp").focus();
        document.getElementById("txtHp").className = "error";
        return false;
    }else{
        document.getElementById("txtHp").className = "normal";
    }
    }
</script>
<form method="post" action="?page=simpan-order" onsubmit="return cekOrder()">
<table>
<tr><td>Nama</td><td>:</td><td><input type="text" name="txtNama" id="txtNama"/></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="txtEmail" id="txtEmail"/></td></tr>
<tr><td>Alamat</td><td>:</td><td><textarea name="txtAlamat" id="txtAlamat"></textarea></td></tr>
<tr><td>NO HP</td><td>:</td><td><input type="text" name="txtHp" id="txtHp"/></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Order"/></td></tr>
</table>
</form>