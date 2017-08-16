<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$mydb = "honda";

	$con = mysqli_connect($servername, $username, $password, $mydb);

	// $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// $pathFragments = explode('=', $url);
	// $end = end($pathFragments);

	$query = mysqli_query($con, "SELECT * FROM tblproducts where productId = $end");

	$query = mysqli_fetch_row($query);

	// echo "<pre>";
	// print_r($query);
	// echo "</pre>";


	// $data = $GET['user'];

	echo "<pre>";
	print_r($_GET);
?>