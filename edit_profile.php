<?php 
$_SESSION["load"] = "7";
include 'header.php'; 
$sql = "SELECT * FROM member_all Where  pk = '". $_SESSION["UserID2"] ."' ";  

	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{
		$name = $objResult["name"];   
		$telphone = $objResult["telphone"];  
		$username = $objResult["username"];  
		$password = $objResult["password"];  
	} 
?> 
 
<br><br>

	<main id="main" class="container text-center">
 
<br><br>
            <h1> แก้ไขข้อมูลส่วนตัว </h1>
            <br>
            <hr style="color: #000000">
            <br>   
</main>
 
   	<form action="save_update_profile.php" name="thisForm"  onsubmit="return ispwdPolicy()"  method="post">  
    <div class="container">
       <div class="row">
                        <div class="col-md-5 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                                                 
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="username"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" id="username" name="username" value="<?php echo $username; ?>" readonly>
                                </div> <br>

 
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="password"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                </svg></span>
                                </div>
                                <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password" autocomplete="off" value="<?php echo $password; ?>" >
                                </div> 
                              
                                <small class="form-text text-muted"> *กรุณากรอกรหัสผ่านที่ประกอบด้วย ตัวอักษรภาษาอังกฤษตัวใหญ่·เล็ก, ตัวเลข, ตัวอักษรพิเศษ จำนวน 10~16 ตัว</small>
                                <br>
 
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="name"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                </svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="ชื่อ-สกุล" id="name" name="name" value="<?php echo $name; ?>" autocomplete="off">
                                </div> <br>
 
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="tel"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                </svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" id="telphone" name="telphone" value="<?php echo $telphone; ?>" autocomplete="off" maxlength="10" >
                                </div> <br>
 
                                

                                <small class="form-text text-muted">*กรุณาตรวจสอบข้อมูลที่กรอก ก่อนทำการกดสมัครสมาชิก</small>
                                 <br>

                                </div>
                            </div>
                        </div>    
                    </div>
    </div>  
    <br>    
    <div class=" text-center">
     <button type="submit"  name="reg_user" class="btn btn-primary"> บันทึก </button>
     <a href="index.php">  
     <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>ยกเลิก</button>
     </a>
     <br> <br>  
     <br> <br>  
     </div>      
  	</form>
    <Br><br>
 <?php include 'footer.php'; ?>