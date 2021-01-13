
<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Pages</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="cart.php">Chariot</a></li>
                    <li><a href="contact.php">Contactez nous</a></li>
                    <li><a href="shop.php">Boutique</a></li>
                    <li><a href="checkout.php">Mon compte</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>Section utilisateur</h4>
                
                <ul><!-- ul Begin -->
                    
                    <li>Commande par Télephone : 05555555</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top produits catégories</h4>
                
                <ul><!-- ul Begin -->
                     <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Trouve nous</h4>
                
                <p><!-- p Start -->
                    
                    <strong>NewLook SAIDA</strong>
                    <br/>BAHLOUL Halimi
                    <br/>+48 41 31 71
                    <br/>bhalimpresse@gmail.com
                    <br/><strong>SAIDA algérie</strong>
                    
                </p><!-- p Finish -->
                
                <a href="contact.php">Consultez notre page de contact</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Recevez les nouvelles</h4>
                
                <p class="text-muted">
                    Ne manquez pas nos derniers produits de mise à jour.
                </p>
                
                <form action="" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Rester en contact</h4>
                
                <p id="socil">
                    <a href="https://www.facebook.com/Boutique-New-Look-Sa%C3%AFda-173258006100670/?__tn__=%3C-R&eid=ARC7XaQDip1U3q0kxnn0m7DMOM4ysZ1ov8kBeCkuk9FM-GJGt1MH6CJyxbtInIHiIgJDDgXCwC0tRJYz&hc_ref=ARTNoMknNaHMvTI7SXWu7dn4jk-oR5C0eW2V3U8pyaEHgNyaiPfd3hozqvTotS15SXk&__xts__[0]=68.ARBFXVDKtUAlV0mnv-p7MN8GCSaozTFH0aztiGZDKze9IK78Kg9H7kldxnVwneeIg3P_9k7oUHTuo8XhXvqzH5t4ohxiQcXbZXbVEubJ9csMyraxZm_lG6aXxwNdUqH-Ij75-QWP6OtweqHVf5xKGbD3kQ-n1W1M6HNNUJSzd7-c7ZBgixae_F-MSf7Uye1roaIxzhJEONnIP5_fqGpV7xz1T7kioDRVUzbJrmAA-1ETQT2_maJcOrXIay45lgHMR8oCefZzaC0aChiRbIcUkIgE1xv71fam0r2Yu0oxPozpmF1UL1fHIRjeSVr2FHv02rIDaQgp8oqU4MFqBhtgCwazHC6oj8WsLaBRIIDCDr3OXjXCF8ePP6E" class="fa fa-facebook" target="_blank"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/boutiquenewlooksaida/" class="fa fa-instagram" target="_blank"></a>
                    <a href="#" class="fa fa-google"></a>
                    
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2019 Equipe Zakaria abdejallil All Rights Reserve</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Thème par : <a href="#">Z&H</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
