<?php
include('db_config.php');
	 
		   
		  
				$strSQL = "INSERT INTO comment (  detail, member, post, date_start, date_start2,
				date_time) VALUES 
				( '".$_POST["message"]."' ,'".$_SESSION["UserID2"]."','".$_POST["home_id"]."',
				'".date('d-m-Y')."',  '".date('Y-m-d')."',  '".date('H:i')."'   )"; 
				$objQuery = mysqli_query($objCon, $strSQL);
					  
				   
			 echo("<script>window.location = 'view_pro.php?CusID=".$_POST["home_id"]."';</script>");

		 
?>