<?php 
session_start();
date_default_timezone_set("Asia/Bangkok");
	 
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "12345678";
	$dbName = "samunpai";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon,"utf8");

	 
?>
