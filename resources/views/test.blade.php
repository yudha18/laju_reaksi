<html>
<head>
<title>Kalkulator Sederhana</title>
</head>
<body>
<script language="JavaScript" type="text/javascript">

<!--

function hitung(){

var myForm = document.form1;
var x=eval(myForm.x.value);
var y=eval(myForm.y.value);
var pil= myForm.opt.value;
if (pil == "tambah") {
var z = x + y;
 }else if (pil == "kurang") {
var z = x - y;
 } else if (pil == "kali") {
var z = x * y;
 } else if (pil == "bagi") {
var z = x / y;
 }
 myForm.hasil.value = z;
 myForm.x.value = "";
 myForm.y.value = "";
}
function resetForm(){
document.form1.reset();
}

//-->

</script>
<div align="center">
<form name="form1" action="#">
<p>bil 1  <input type="text" name="x" /></p>
<p>bil 2  <input type="text" name="y" /></p>
<p>hasil  <input type="text" name="hasil" disabled="true" /></p>
<p>operator <select name="opt"></p>
 <option value="tambah"> + (tambah)</option>
 <option value="kurang"> - (kurang)</option>
 <option value="kali"> * (kali)</option>
 <option value="bagi"> / (bagi)</option>
</select>
<input type="button" value="=" onClick="hitung()" />
<input type="button" value="CLEAR" onClick="resetForm()" />
</form>
</body>
</html>
