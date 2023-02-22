<?php  
include("db_config.php"); ?>
<script type="text/javascript">
				function test_click(event){
					alert(" กรุณาทำการล็อกอิน ");
					return true;
				}
			</script> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> สมุนไพร </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
 
</head>
<style>
@font-face {
  font-family: Poppins-Bold;
  src: url('fonts/regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('fonts/regular.ttf'); 
}

@font-face {
  font-family: Raleway-Regular;
  src: url('fonts/regular.ttf'); 
}

@font-face {
  font-family: Raleway-Black;
  src: url('fonts/regular.ttf'); 
}

@font-face {
  font-family: Raleway-SemiBold;
  src: url('fonts/regular.ttf'); 
}

@font-face {
  font-family: Raleway-Bold;
  src: url('fonts/regular.ttf');  
}
	 
.serif {
  font-family:  Poppins-Medium, serif;
}

</style>

<body class="serif"  >

<nav class="navbar navbar-expand-lg navbar-dark  " style="background-color: #006400; ">
<div class="container"  >
<img src="img/logo2.png" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
 
      <li class="nav-item">
        <a class="nav-link" href="index.php" > <font size="4px" color="white"> &nbsp;   หน้าแรก </font> </a>
      </li> 

    </ul>
    <ul class="navbar-nav ml-auto">
    
       <?php if(empty($_SESSION["UserID2"])){ ?> 
		  <li class="nav-item">
			<a class="nav-link" href="register1.php"> <font size="4px" color="white">  ลงทะเบียนใช้งาน </font>  </a>
		  </li>
        
		  <li class="nav-item">
			<a href="login.php" class="btn btn-outline-danger" style="border: 1px solid #FFF; "> <font size="4px" color="white">  เข้าสู่ระบบ </font>  </a>
		  </li>  
        <?php }else{ ?>
          <li class="nav-item">
        	<a class="nav-link" href="#"> <font size="4px" color="white">  ยินดีต้อนรับ <?php echo $_SESSION["Fullname2"]; ?> </font>  </a>
		  </li>
		  <li class="nav-item ">
			<a class="nav-link" href="edit_profile.php">  <font size="4px" color="white">  แก้ไขข้อมูลส่วนตัว  </font>  </a>
		  </li>

		   <li class="nav-item">
			<a href="check_out.php" class="btn btn-outline-danger">  <font size="4px" color="white">  ออกจากระบบ  </font> </a>
		   </li> 
        <?php } ?>
         
    </ul>
    </div>
  </div>
</nav>


<script src="js/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
 