<?php  

  $active='Shop1';
  include("includes/header.php");


?>
<?php  

 $searchq = $_POST['user_query'];


?>
 <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <h3>Resultat de Recherche : "<?php echo $searchq; ?>"</h3>
                   </li>
                   
                   
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->

<div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->


 <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
<?php  


                        if (isset($_POST['user_query'])) {

                          $searchq = $_POST['user_query'];

                          $query = "SELECT * FROM products WHERE product_keywords='$searchq'";

                          $run_products = mysqli_query($con,$query);
                          
                          while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            




            <div class='card' align='center'>
              <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                
                </a>
                  <h3>
            
                        <a href='details.php?pro_id=$pro_id' id='h31'>

                            $pro_title

                        </a>
                    
                    </h3>
                  <p class='price'>$pro_price DA</p>
                  <p><a  href='details.php?pro_id=$pro_id'><button>Ajouter au panier</button></a></p>
            </div>
        
        </div>
        
        ";
        
    }
         }
     ?>
   </div>
 </div>
</div>
</div>



                        <?php 
    
    include("includes/footer.php");
    
    ?>



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>



</body>
</html>