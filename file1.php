<html>
<head>
<title>FORM</title>
<body>
<form 	action="proses1.php" method="POST">
<input type="text" name="nama" placeholder="nama anda..."><br>
<input type="text" name="kelas" placeholder="kelas anda..."><br>
<input type="submit" name="submit" value="submit"><br>
<br>
<br>
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

echo  "nama anda : $nama<br>";
echo  "kelas anda : $kelas";

}

?>