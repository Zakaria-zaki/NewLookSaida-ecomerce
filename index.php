<?php  

  $active='Home'; 
  include("includes/header.php");


?>
   
   <div class="container" id="slider" ><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>   

                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel"  data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span ></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel"  data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span ></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish --></div><!-- container Finish -->

        
        <video width="1339" height="750" controls>
         <source src="images/new_look3.m4v" type="video/mp4">
         <source src="images/new_look31.ogg" type="video/ogg">
        </video>


       <div class="row">
  <div class="column">
    <img src="images/GOPR1665.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/GOPR1676.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="images/GOPR1679.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

   <br>
   
  
   
<!--produits-->


    	<div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Notre dernier produits
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish --></div><!-- #hot Finish -->
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <?php 
           
           getPro();
           
           ?>
          
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->



<hr>
    		
    	
<br>
 <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish --></div><!-- #advantages Finish -->
    




       <br>

       
  

   <div id="top_index"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
       <div class="col-sm-4">
         <h1>INSCRIVEZ-VOUS </h1>
         <h2>POUR RECEVOIR LES NOUVELLES ET UN RABAIS DE 15 %</h2>
         
       </div>
       <div align="right" id="ici">
        <br>
        <br>
        <br>
        <br>
        <br>
       
         <a href='customer_register.php'><button> Inscris-ici</button> </a>
       </div>
           
       </div><!-- container Finish --> </div><!-- Top Finish -->





<?php 
    
    include("includes/footer.php");
    
    ?>

<script src="js/login.js"></script>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>



</body>
</html>