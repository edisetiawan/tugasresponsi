<style type="text/css">
#content .error {border: 1px solid red;}
#content .normal {border: 1px solid #b6b5b4;}
</style>
<script language="javascript">
 function cekConfrirm(){ /*
    if(document.getElementById("txtIdBeli"). value == ""){
        alert("Id beli harus disi"); 
        document.getElementById("txtIdBeli").focus();
        document.getElementById("txtIdBeli").className = "error";
        return false;
    }else{
        document.getElementById("txtIdBeli").className = "normal";
    }
    if(document.getElementById("txtNama"). value == ""){
        alert("nama harus disi"); 
        document.getElementById("txtNama").focus();
        document.getElementById("txtNama").className = "error";
        return false;
    }else{
        document.getElementById("txtNama").className = "normal";
    }
    if(document.getElementById("txtEmail"). value == ""){
        alert("Email harus disi"); 
        document.getElementById("txtEmail").focus();
        document.getElementById("txtEmail").className = "error";
        return false;
    }else{
        document.getElementById("txtEmail").className = "normal";
    }
    if(document.getElementById("Image"). value == ""){
        alert("Bukti harus disi"); 
        document.getElementById("Image").focus();
        document.getElementById("Image").className = "error";
        return false;
    }else{
        document.getElementById("Image").className = "normal";
    }
 }    */
 </script>
<form method="post" action="?page=kirim-konfirmasi" onsubmit="return cekConfrirm()">
<table>
<tr><td>Id Pembelian</td><td>:</td><td><input type="text" name="txtIdBeli" id="txtIdBeli"/></td></tr>
<tr><td>Nama</td><td>:</td><td><input type="text" name="txtNama" id="txtNama"/></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="txtEmail" id="txtEmail"/></td></tr>
<tr><td>Bukti</td><td>:</td><td><input  type="file" name="Image" id="Image"/></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Kirim"/></td></tr>
</table>
</form>