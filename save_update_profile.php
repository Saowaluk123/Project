<?php  
include("db_config.php");
   
			$_SESSION["Fullname2"] = $_POST["name"];
	
			$strSQL = "Update member_all Set name = '".$_POST["name"]."',  
			telphone = '".$_POST["telphone"]."',      
			password = '".$_POST["password"]."'    " ;
			$strSQL .=" WHERE pk = '". $_SESSION["UserID2"] ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
 			//echo $strSQL;
 
			echo("<script>window.location = 'edit_profile.php';</script>");
					
?>