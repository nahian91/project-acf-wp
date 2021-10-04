<section class="ftco-section ftco-no-pt bg-light">
         <div class="container">
            <div class="row d-flex no-gutters">
               <?php
                  if($features = get_field('features', 'options')) {
               ?>
                     <div class="col-md-6 d-flex">
                        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo $features['feature_image']['url']; ?>);">
                        </div>
                     </div>
               <?php
                  }
               ?>
               
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5">
                     <span class="subheading"><?php echo $features['feature_subtitle'] ?></span>
                     <h2 class="mb-4"><?php echo $features['feature_title']; ?></h2>
                  </div>

                  <?php
                     $features_list = get_field('features_list', 'options');
                     foreach($features_list as $feature) {
                  ?>
                     <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><i class="fa <?php echo $feature['feature_list_icon'];?>"></i></div>
                        <div class="text pl-4">
                           <h4><?php echo $feature['feature_list_title'];?></h4>
                           <p><?php echo $feature['feature_list_description'];?></p>
                        </div>
                     </div>
                  <?php
                     }
                  ?>
                  
               </div>
            </div>
         </div>
      </section>