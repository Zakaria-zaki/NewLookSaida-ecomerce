<?php 

    $active='Shopping_Cart';
    include("includes/header.php");

?>
   
   <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Boutique
                   </li>
                   <li>
                     <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title;  ?></a>
                   </li>
                   <li> <?php echo $pro_title;  ?> </li>
               </ul><!-- breadcrumb Finish -->

               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               
                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                   </div>

                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b"></center>

                                   </div>

                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-b"></center>

                                   </div>
                                   
                               </div>
                               
                               
                               
                               
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                           
                           <?php add_cart(); ?>
                           
                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Produit Quantity</label>
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-md-7 Finish -->
                                   
                               </div><!-- form-group Finish -->
                               
                               <div class="form-group"><!-- form-group Begin -->
                                   

                                    <?php if($p_cat_title == "chaussures") { echo " 

                                    <label class='col-md-5 control-label'>Produits taille</label>
                                   
                                      <div class='col-md-7'>


                                    <select name='product_size' class='form-control' required oninput='setCustomValidity('')' oninvalid='setCustomValidity('Must pick 1 size for the product')'> 
                                          
                                           <option>38</option>
                                           <option>39</option>
                                           <option>41</option>
                                           <option>42</option>
                                           <option>43</option>
                                           
                                       </select> 

                                       
                               ";
                               

                                      
                                       
                                      
                                    }elseif($p_cat_title == "Manteaux"){

                                    echo " 

                                    <label class='col-md-5 control-label'>Produits taille</label>
                                   
                                      <div class='col-md-7'>


                                    <select name='product_size' class='form-control' required oninput='setCustomValidity('')' oninvalid='setCustomValidity('Must pick 1 size for the product')'> 
                                          
                                           <option>38</option>
                                           <option>39</option>
                                           <option>41</option>
                                           <option>42</option>
                                           <option>43</option>
                                           
                                       </select> 


                                       
                               ";
                                     
                                      

                                    }elseif($p_cat_title == " maillot"){
                                     
                                  echo " 

                                    <label class='col-md-5 control-label'>Produits taille</label>
                                   
                                      <div class='col-md-7'>


                                    <select name='product_size' class='form-control' required oninput='setCustomValidity('')' oninvalid='setCustomValidity('Must pick 1 size for the product')'> 
                                          
                                           <option>S</option>
                                           <option>M</option>
                                           <option>L</option>
                                           <option>XL</option>
                                           <option>XXL</option>
                                           
                                       </select> 

                                       
                               ";
                                
                                      

                                    }elseif($p_cat_title == "Vestes"){
                                      
                                    echo " 

                                    <label class='col-md-5 control-label'>Produits taille</label>
                                   
                                      <div class='col-md-7'>


                                    <select name='product_size' class='form-control' required oninput='setCustomValidity('')' oninvalid='setCustomValidity('Must pick 1 size for the product')'> 
                                          
                                           <option>S</option>
                                           <option>M</option>
                                           <option>L</option>
                                           <option>XL</option>
                                           <option>XXL</option>
                                           
                                       </select> 

                                       
                               ";
                                       

                                    }else{echo "<label class='col-md-5 control-label'></label>
                                   
                                      <div class='col-md-7'>";
                                      
                                    }?>
                                        
                                      
                                       
                                   
                               
                               <p class="price"><?php echo $pro_price; ?> DA</p>
                               
                               <p class='card'><button class="btn btn-primary i fa fa-shopping-cart"> Ajouter au panier </button></p>

                               </div>
                               </div>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                       <div class="row" id="thumbs"><!-- row Begin -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                       </div><!-- row Finish -->
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   
               </div><!-- row Finish -->
               
               <div class="box" id="details"><!-- box Begin -->
                       
                       <h4>Produits détails</h4>
                   
                   <p>
                       
                       <?php echo $pro_desc; ?>
                       
                   </p>
                   
                       <h4>Size</h4>
                       
                       <ul>
                           <li>Small</li>
                           <li>Medium</li>
                           <li>Large</li>
                       </ul>  
                       
                       <hr>
                   
               </div><!-- box Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Autre produits</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   <?php  

                   $get_products = "select * from products order by 1 DESC LIMIT 0,3";

                   $run_products = mysqli_query($con,$get_products);

                   while ($row_products=mysqli_fetch_array($run_products)) {
                     
                     $pro_id = $row_products['product_id'];

                     $pro_title = $row_products['product_title'];

                     $pro_img1 = $row_products['product_img1'];

                     $pro_price = $row_products['product_price'];

                     echo "

                       
                       <div class='col-md-3 col-sm-6 center-responsive'>
                           
                           <div class='card'>
                            
                            <a href='details.php?pro_id=$pro_id'>

                              <img class='img-responsive' src='admin_area/product_images/$pro_img1'>

                            </a>
                            <div class='text'>

                             <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                             <p class='price'> $pro_price DA</p>

                             

                            </div>


                           </div>

                       </div>


                     ";

                     
                   }


                   ?>
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   

   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>