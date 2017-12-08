<?php
	include "koneksi.php";
	mysqli_query($link, "INSERT INTO buku VALUES ('$_POST[idbuku]', '$_POST[namabuku]', '$_POST[pengarang]', '$_POST[penerbit]', '$_POST[tipe]')");
?>