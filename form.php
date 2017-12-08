<html>
<head>
<title>Perpustakaan</title>
</head>
<body>
<h3>Form Buku</h3>
<form action="proses.php" method="post">
<table>
<tr>
<td>ID Buku</td><td>:</td>
<td><input type="text" name="idbuku" size="11" maxlength="11"></td>
</tr>
<tr>
<td>Nama Buku</td><td>:</td>
<td><input type="text" name="namabuku" size="35" maxlength="35"></td>
</tr>
<tr>
<td>Nama Pengarang</td><td>:</td>
<td><input type="text" name="pengarang" size="35" maxlength="35"></td>
</tr>
<tr>
<td>Penerbit</td><td>:</td>
<td><input type="text" name="penerbit" size="25" maxlength="25"></td>
</tr>
<tr>
<td>Tipe</td><td>:</td>
<td><input type="radio" name="tipe" value="novel">Novel</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="radio" name="tipe" value="komik">Komik</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="radio" name="tipe" value="pendidikan">Buku Pendidikan</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>
</table>
</form>
</body>
</html>
