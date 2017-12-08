<?php
	$link = new mysqli('localhost', 'root', '', 'perpustakaan');
	if($link){
		print "Sukses";
		//die('Check this. '.mysqli_connect_error());
	}
?>