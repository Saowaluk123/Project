<?php   
include("db_config.php");
   
	$strSQL = "SELECT * FROM member_all WHERE username = '".($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert('Username ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'register1.php';</script>");
	}
	else
	{	 
		
		$strSQL = "INSERT INTO member_all (name, telphone, username, password, status) VALUES ('".$_POST["name"]."', '".$_POST["telphone"]."','".$_POST["username"]."','".$_POST["password"]."','ST')"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'login.php';</script>");
		
	}
?>