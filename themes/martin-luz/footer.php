      <footer id="rodape">
         <div class="container">
            <div class="row align-items-center mobile">
               <div class="col-md-6 col-12">
                  <div class="wid-one">
                     <?php 
                        if(is_active_sidebar( 'footer-one' )) {
                           dynamic_sidebar( 'footer-one' );
                        }
                     ?>
                  </div><!-- /wid-one -->
               </div><!-- /col-md-6 -->
               <div class="col-md-6 col-12 pr-4">
                  <div class="wid-two text-center">
                     <?php 
                        if(is_active_sidebar( 'footer-two' )) {
                           dynamic_sidebar( 'footer-two' );
                        }
                     ?>
                  </div>
               </div><!-- /col-md-6 -->
            </div><!-- /row -->
         </div><!-- /container -->
      </footer><!-- /rodape -->   
      <?php wp_footer(); ?>        
   </body>
</html>