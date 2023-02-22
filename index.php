<?php 
include 'header.php'; 


		$searchname = "";
		if(empty($_GET["name1"])){
			
		}else{
			$searchname = $_GET["name1"];
		}
?>  
 
<link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
<style>
.checked {
  color: orange;
}
</style>

	<header class="text-white text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class=""> <font color="#FF8C00">  &nbsp; </font> </h1> 
          </div>

          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="">
              <div class="row d-flex">
                
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
     
<br><br>

<main id="main" class="container text-center"> 
            
	<div class="container"> 
        
        <div class="row" align="left"> 
		<div class="col-lg-4 ">
		<div class="form-group"> 
		<form action="index.php" method="get">
          <input type="text" name="name1" class="form-control" placeholder=" ค้นหารายชื่อสมุนไพร "  autocomplete="off"> 
		</div>
		</div> 
		<div class="form-group col-lg-1 ">  
          <button type="submit"class="btn btn-danger"> ค้นหา </button>
         </form>
		</div>  
		</div>  
		
		<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>  
        <div class="row">
               <?php   
					$sql = "SELECT * FROM postdata where title like '%".$searchname."%'  order by pk desc ";
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
						
					?>	
					<div class="col-lg-12 col-md-12" style="margin-top: 10px; ">
						<div class="single-product" align="left">
						
							<div class="row "   >
							<div class="col-md-4 " align="left">
							<?php if(empty($img)){ ?>
							<img class="img-fluid" src="img/s1.png" alt="" style="height: 210px; width: 100%; ">
							<?php }else{ ?>
							<img class="img-fluid" src="admin/uploads/<?php echo $img; ?>" alt=""  style="height: 210px;  width: 100%; ">
							<?php }  ?> 
							</div>
							
							<div class="col-md-8 " align="left" style=" border: 1px solid #000; " >
							<div class="product-details" style="margin-top: 10px;"> 
							<font size="5px">
							 	<div class="col-lg-12">
								  <?php echo $objResult["title"]; ?> &nbsp; &nbsp; <a href="view_pro.php?CusID=<?php echo $objResult["pk"]; ?>" class="btn-sm btn-danger" style="cursor: pointer;" > <font color="White" size="3px"> คลิกดูข้อมูล </font></a>   
								  
							 	</div>
							 	
							 	 
							 	<style>
									.city {
									  -ms-overflow-style: none; /* for Internet Explorer, Edge */
									  scrollbar-width: none; /* for Firefox */
									  overflow-y: scroll; 
									}

									.city::-webkit-scrollbar {
									  display: none; /* for Chrome, Safari, and Opera */
									}

									/* other styling */
									.city { 
									  height: 150px; 
									  width: 100%;
									}
 
								</style>
							 	
							 	<div class="col-lg-12 city " style="  " >
							 		 
								 รายละเอียด: <?php echo $objResult["detail"]; ?> 
						   
							 	</div>
						   
							   </font>
							</div>
							</div>
							</div>
							
							
						</div>
					</div>  
					<?php } ?>
            </div>
        </div> 
 
  

</main>
<br>  <br>  <br>  <br>  <br>  <br>
<?php include 'footer.php'; ?>


        