<?php  

  $active='My_Account';
  include("includes/header.php");


?>
   


   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <b><a href="index.php">Home</a></b>
                   </li>
                   <li>
                       <b>Register</b>
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->

  

<br>
<br>
<br>

 
<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="bg-img" id="inscri">
  <form method="post" action="customer_register.php" class="container1" enctype="multipart/form-data">
    <h1>Inscription</h1>

    <label for="name"><b>Nom *</b></label>
    <input type="text" name="c_name" placeholder="Votre nom" required>

    <label for="email"><b>Email *</b></label>
    <input name="c_email" type="text" placeholder="votre mail" required>

    <label for="psw"><b>Mot passe *</b></label>
    <input name="c_pass" type="password" placeholder="Votre mot de passe"  required>

    <label for="psw"><b>Confirme Mot passe *</b></label>
    <input name="c_pass" type="password" placeholder="confirmation mot de passe"  required>

    <label for="pays"><b>Wilayas *</b></label>
    <input name="c_country" type="text" placeholder="Votre Wilaya"  required>

    <label for="wla"><b>Province *</b></label>
    <input name="c_city" type="text" placeholder="votre Daira"  required>

    <label for="ads"><b>Adresse *</b></label>
    <input name="c_address" type="text" placeholder="Votre adresse"  required>

    <!--<label for="ads"><b>Image de profile</b></label>
    <input name="c_image" type="file" placeholder="Votre adresse"  required>-->

    <br>
    <br>

    <button type="submit" name="register" class="btn">Entrer</button>
    <center><!-- center Begin -->
     
      
  </center><!-- center Finish -->
  </form>
</div>
</div>
</div>
</div>

<br>
<br>

   <?php 
    
    include("includes/footer.php");
    
    ?>



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}

function showPage() {
  
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>


<?php  

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/avatar2.png");/*$c_image*/
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
         
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>