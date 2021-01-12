<?php  

  $active='Contact';
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
                      <b> Contact us</b>
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->

           <br>
           <br>

           
                     <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1637.5526880261857!2d0.1506930688562296!3d34.82844299053945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128017eb62e4db6d%3A0xcb05ae7c146389a0!2sBoutique+New+Look!5e0!3m2!1sfr!2sdz!4v1559900751568!5m2!1sfr!2sdz" width="1150" height="750" frameborder="0" style="border:0" allowfullscreen></iframe></p>


           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   
    <br>
    <br>
    <h2> Contactez nous</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                          Si vous avez des questions, n'hésitez pas à nous contacter. Notre service client fonctionne<strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           <div id="socil">
                             <a href="https://www.facebook.com/Boutique-New-Look-Sa%C3%AFda-173258006100670/?__tn__=%3C-R&eid=ARC7XaQDip1U3q0kxnn0m7DMOM4ysZ1ov8kBeCkuk9FM-GJGt1MH6CJyxbtInIHiIgJDDgXCwC0tRJYz&hc_ref=ARTNoMknNaHMvTI7SXWu7dn4jk-oR5C0eW2V3U8pyaEHgNyaiPfd3hozqvTotS15SXk&__xts__[0]=68.ARBFXVDKtUAlV0mnv-p7MN8GCSaozTFH0aztiGZDKze9IK78Kg9H7kldxnVwneeIg3P_9k7oUHTuo8XhXvqzH5t4ohxiQcXbZXbVEubJ9csMyraxZm_lG6aXxwNdUqH-Ij75-QWP6OtweqHVf5xKGbD3kQ-n1W1M6HNNUJSzd7-c7ZBgixae_F-MSf7Uye1roaIxzhJEONnIP5_fqGpV7xz1T7kioDRVUzbJrmAA-1ETQT2_maJcOrXIay45lgHMR8oCefZzaC0aChiRbIcUkIgE1xv71fam0r2Yu0oxPozpmF1UL1fHIRjeSVr2FHv02rIDaQgp8oqU4MFqBhtgCwazHC6oj8WsLaBRIIDCDr3OXjXCF8ePP6E" target="_blank" class="fa fa-facebook"></a>
                             <a href="#" class="fa fa-twitter"></a>
                             <a href="https://www.instagram.com/boutiquenewlooksaida/" target="_blank" class="fa fa-instagram"></a>
                             <a href="#" class="fa fa-google"></a>
                           </div>
    <?php 
    
    /*include("social.php");*/
    
    ?>
               
           </div><!-- col-md-3 Finish -->

          <div class="col-md-9"><!-- col-md-9 Begin -->

            
                   
               
               <div class="box"><!-- box Begin -->


                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2>N'hésitez pas à nous contacter</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                            Si vous avez des questions, n'hésitez pas à nous contacter. Notre service client fonctionne <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                        <?php  

                        

                       if (isset($_POST['submit'])) {



                            
                            /*$sender_name = $_POST['name'];

                            $sender_email = $_POST['email'];

                            $sender_subject = $_POST['subject'];

                            $sender_message = $_POST['message'];
                            
                            $receiver_email = "03zaki95@gmail.com";

                            mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                            $email = $_POST['email'];

                            $subject = "Bonjour a mon site Web";
                            $msg = "Merci d'avoir envoyer nous ce message";

                            $form = "03zaki95@gmail.com";

                            mail($email,$subject,$msg,$form);
                            echo "<h2 align='center'> votre message est bien envoyer </h2>";*/



                            if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['subject']) AND !empty($_POST['message'])){

                        $header="MIME-Version: 1.0\r\n";
                        $header.='Form:"NewLOOK.com"<support@newlook.com>'."\n";
                        $header.='Content-Type:text/html; cahset="utf-8"'."\n";
                        $header.='Content-Transfer-Encoding: 8bit';

                        $message='
    <html>
      <body>
        <div align="center">
          <img src="http://www.apparatusmarketing.com/wp-content/uploads/2014/01/new-look.png"/>
          <br />
          <h3>Nom de l\'expéditeur : '.$_POST['name'].'</h3><br />
          <h3>Mail de l\'expéditeur : '.$_POST['email'].'</h3><br />
          <br />
          '.nl2br($_POST['message']).'
          <br />
          <hr>
        </div>
      </body>
    </html>
    ';
                      mail("03zakaria95@gmail.com", "CONTACT - Monsite.com", $message, $header);
                              
                            }else{
                              $msg = "Tous les champs doivent etre complété !";
                            }



                       }



                       ?>
                       
                       <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md" id="bmail"></i> Send Message
                               
                               </button>

                               <?php  

                           if (isset($msg)) {
                             echo $msg;
                           }


                           ?>

                               
                           </div><!-- text-center Finish -->

                           
                           
                       </form><!-- form Finish -->
                      
                       
                   </div><!-- box-header Finish -->
                   
                   
               </div><!-- box Finish -->
               
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
