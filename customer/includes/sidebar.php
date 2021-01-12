<div class="panel panel-default sidebar-menu"><!--  panel panel-default sidebar-menu Begin  -->
    
    <div class="panel-heading"><!--  panel-heading  Begin  -->
        
        <?php  

        $customer_session = $_SESSION['customer_email'];

        $get_customer = "select * from customers where customer_email='$customer_session'";

        $run_customer = mysqli_query($con,$get_customer);

        $row_customer = mysqli_fetch_array($run_customer);

        $customer_image = $row_customer['customer_image'];

        $customer_name = $row_customer['customer_name'];

        if (!isset($_SESSION['customer_email'])) {
          
        }else{

                    /*<img src='customer_images/$customer_image' class='img-responsive' >*/
            echo "
              
            <center>
                <img src='customer_images/avatar2.png' class='img-responsive' id='avatar2'>
                <br />

                <h3 class='panel-title' align='center'>

                Name : $customer_name

                </h3>
            </center>

            ";
        }

        ?>
        
    </div><!--  panel-heading Finish  -->
    
    <div class="panel-body"><!--  panel-body Begin  -->
        
        <ul class="nav-pills nav-stacked nav"><!--  nav-pills nav-stacked nav Begin  -->
            
            <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
                
                <a href="my_account.php?my_orders">
                    
                    <i class="fa fa-list"></i> Mes Achats
                    
                </a>
                
            </li>
            
            <!--<li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?>">
                
                <a href="my_account.php?pay_offline">
                    
                    <i class="fa fa-bolt"></i> Pay Offline
                    
                </a>
                
            </li>-->
            
            <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
                
                <a href="my_account.php?edit_account">
                    
                    <i class="fa fa-pencil"></i> Modifier Compte
                    
                </a>
                
            </li>
            
            <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
                
                <a href="my_account.php?change_pass">
                    
                    <i class="fa fa-user"></i> Changé Mot passe
                    
                </a>
                
            </li>
            
            
            
            <li>
                
                <a href="../logout.php">
                    
                    <i class="fa fa-sign-out"></i> Déconnecter
                    
                </a>
                
            </li>
            
        </ul><!--  nav-pills nav-stacked nav Begin  -->
        
    </div><!--  panel-body Finish  -->
    
</div><!--  panel panel-default sidebar-menu Finish  -->