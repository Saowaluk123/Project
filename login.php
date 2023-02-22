<?php
include 'header.php'; 

?> 
   
<br><br>

<main id="main" class="container text-center">
 
            <br><br>
            <h1>เข้าสู่ระบบ</h1>
            <br>
            <hr style="color: #000000">
            <br>   
        <form action="check_login.php" method="post">      
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                 <form class="form-inline-row">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="username"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg></span>
                                </div>
                                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" id="username" name="username" autocomplete="off">
                                </div> <br>


                                <form class="form-inline-row">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="password"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                </svg></span>
                                </div>
                                <input type="password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password" autocomplete="off">
                                </div> 
                                <small class="form-text text-muted"> *โปรดระวังการกรอกตัวอักษร พิมเล็ก-พิมพ์ใหญ่ และอักขระพิเศษ </small>
                         
									<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>  
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br>


						

            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>ยกเลิก</button> 
        </form>
</main>
<br><br> 

			



<?php include 'footer.php'; ?>

	