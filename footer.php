<footer class="footer">
         <div class="container-fluid px-lg-5">
            <div class="row">
               <div class="col-md-9 py-5">
                  <div class="row">
                     <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading"><?php the_field('about_title', 'options');?></h2>
                        <p><?php the_field('about_description', 'options');?></p>
                        <ul class="ftco-footer-social p-0">
                           <?php
                              $icons = get_field('about_social', 'options');
                              foreach($icons as $icon) {
                           ?>
                              <li class="ftco-animate"><a href="<?php echo $icon['social_url'];?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa <?php echo $icon['social_icon'];?>"></i></a></li>
                           <?php
                              }
                           ?>
                        </ul>
                     </div>
                     <div class="col-md-8">
                        <div class="row justify-content-center">
                           <div class="col-md-12 col-lg-10">
                              <div class="row">
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <?php
                                       if(is_active_sidebar('footer-1')){
                                          dynamic_sidebar('footer-1');
                                       }
                                    ?>
                                 </div>
                                 <div class="col-md-4 mb-md-0 mb-4">
                                 <?php
                                       if(is_active_sidebar('footer-2')){
                                          dynamic_sidebar('footer-2');
                                       }
                                    ?>
                                 </div>
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <?php
                                       if(is_active_sidebar('footer-3')){
                                          dynamic_sidebar('footer-3');
                                       }
                                    ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md-5">
                     <div class="col-md-12">
                        <p class="copyright">
                           <?php the_field('copyright', 'options');?>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                  <h2 class="footer-heading">Free consultation</h2>
                  <div class="form-consultation">
                     <?php echo do_shortcode('[contact-form-7 id="190" title="Footer Form"]');?>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
         </svg>
      </div>
      <?php wp_footer();?>
   </body>
</html>

