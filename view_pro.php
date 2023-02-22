<?php
include 'header.php'; 

?>
<link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
<br><br>
 
<?php   
	$sql = "SELECT * FROM postdata where pk = '".$_GET["CusID"]."'  order by pk desc ";
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		 $img = "";
						$img_all = "";
						$sql4 = "SELECT * FROM images  where post = '".$objResult["bill_no"]."' order by pk asc limit 1 "; 
						$query4 = mysqli_query($objCon,$sql4);
						while($objResult4 = mysqli_fetch_array($query4))
						{  
							$img = $objResult4["img"]; 
						}  
						$sql4 = "SELECT * FROM images  where post = '".$objResult["bill_no"]."' order by pk asc   "; 
						$query4 = mysqli_query($objCon,$sql4);
						while($objResult4 = mysqli_fetch_array($query4))
						{   
							$img_all .= $objResult4["img"].",";
						}  
?>
					
<main id="main" class="container text-center"> 
            <br><br>
            <h1> <?php echo $objResult["title"]; ?> </h1>
            <br>
            <hr style="color: #000000">
            <br>    
		    <div class="row">
				<div class="col-lg-6">
					 
					<div class="">
						 
					  <?php if(empty($img)){ ?>
						  
								<img class="img-fluid" src="img/s1.png" alt="">
							  
						<?php }else{
							  
								$cut_img = explode(",",$img_all);
								$check_lng = count($cut_img); 
							
								if($check_lng <= 2){ 
									$end = count($cut_img)-2;
									
								}else{
									$total = count($cut_img)-1;
									$end = count($cut_img)-2;
									
								}
								     
							 
								for ($x = 0; $x <= $end; $x++) {
									if($x==0){ 
								?>    
							  <img class="mySlides" src="admin/uploads/<?php echo $cut_img[$x]; ?>" style="width:100%; "> 
							  <?php }else{  ?> 
							  <img class="mySlides" src="admin/uploads/<?php echo $cut_img[$x]; ?>" style="width:100%; display:none"> 
							  <?php }  ?>
							  <?php  } ?>
						  
						    <div class="w3-row-padding w3-section"> 
						  <?php  
								$cut_img = explode(",",$img_all);
								$check_lng = count($cut_img); 
							
								if($check_lng <= 2){ 
									$end = count($cut_img)-2;
									
								}else{
									$total = count($cut_img)-1;
									$end = count($cut_img)-2;
									
								}
								    
								for ($x = 0; $x <= $end; $x++) { ?>   
							<div class="w3-col s2">
							  <img class="demo w3-opacity w3-hover-opacity-off" src="admin/uploads/<?php echo $cut_img[$x]; ?>" style="width:100%; height: 50px; cursor:pointer" onclick="currentDiv(<?php echo $x+1; ?>)"> 
							</div> 
						  <?php  } ?> 
						  </div>
						 <?php 
							} 
							?>   
				</div>   
						 
				</div>
				<div class="col-lg-6 " align="left"> 
					 <font size="5px"> 
							ข้อมูล  : <?php echo $objResult["title"]; ?> <Br> 
							รายละเอียด : <?php echo $objResult["detail"]; ?> <Br>  
							  
 
					 </font> 
				</div>
			  
			<div class="col-lg-12 ">
			<div class="form-group"> 
			<br>
			</div>
			</div>
			<div class="col-lg-6 ">
			<div class="form-group"> 
			<div style="background-color: RED;">  
			 <font size="5px" color="White">  คอมเม้น </font> 
			</div>
			</div>
			</div>
			<div class="col-lg-6 ">
			<div class="form-group"> 
			</div>
			</div>
			<?php  
				$sql = "SELECT * FROM comment Where post = '".$_GET["CusID"]."'  order by pk desc ";   
				$query = mysqli_query($con,$sql); 
				while($objResult = mysqli_fetch_array($query))
				{  
					$sql2 = "SELECT * FROM member_all where pk = '".$objResult["member"]."' order by pk asc ";  
					$query2 = mysqli_query($con,$sql2); 
					while($objResult2 = mysqli_fetch_array($query2))
					{
						$name_mem = $objResult2["name"];   
					}
					 
			?>  
			<div class="col-lg-1 ">
			<div class="form-group"> 
				<img src="img/avatar2.jpg" width="50px">
			</div>
			</div> 
			<div class="col-lg-2 " align="left">
			<div class="form-group"> 
			<h5 > <?php echo $name_mem; ?> </h5>
			 <?php echo $objResult["date_start"]; ?> <?php echo $objResult["date_time"]; ?> 
			 <BR> 
			 <font color="RED" size="4px">  
			 <?php echo $objResult["detail"]; ?>   </font> 
			</div>
			</div>   
			<div class="col-lg-6 ">
			<div class="form-group">
				
			</div>
			</div> 
			<div class="col-lg-6 ">
			<div class="form-group">
            <hr style="border: 1px solid red;" />
				
			</div>
			</div>  
			<div class="col-lg-6 ">
			<div class="form-group"> 
				
			</div>
			</div>  
           <?php } ?>	
							
	     	<style>
.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 1em;
    font-size: 2vw;
    color: #FFD600;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}
 </style>	
		
			<?php if(empty($_SESSION["UserID2"])){ }else{ ?>
			<div class="col-lg-6 ">
			<div class="form-group"> 
				<div class="replay-form-wrapper">
                    <h3 class="mt-0"> คอมเม้น </h3> 
                    <form action="save_comment.php" class="blog-form" method="post">
                        <input type="hidden" class="form-control"  id="home_id" name="home_id" value="<?php echo $_GET["CusID"]; ?>" readonly>
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group"> 
                             <textarea name="message" id="message" cols="20" rows="4" class="form-control"></textarea>
                            </div>
                            </div>
                            <div class="col-lg-12"> 
                            <div class="form-group"> 
                               <button type="submit" class="btn btn-danger"> โพสคอมเม้น </button> 
                            </div>   
                            </div>   
                        </div> 
                    </form>
                	</div>
			</div> 
			</div> 
            <?php } ?>
             
            
			</div> 
        </div>  
</main>  <br>  <br>  <br>  <br>  <br>  <br>   
<?php } ?>
  
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>


<?php include 'footer.php'; ?>


        