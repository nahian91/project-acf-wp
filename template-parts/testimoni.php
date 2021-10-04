<section class="ftco-section testimony-section bg-light">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">

               <?php
                  $testimonie_info = get_field('testimonies_info', 'options');
               ?> 
                  <span class="subheading"><?php echo $testimonie_info['section_subtitle'];?></span>
                  <h2><?php echo $testimonie_info['section_title'];?></h2>
               </div>
            </div>
            <div class="row ftco-animate">
               <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                     <?php
                        $testimonies = get_field('testimonies','options');
                        foreach($testimonies as $testy) {
                     ?>
                        <div class="item">
                        <div class="testimony-wrap py-4">
                           <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                           <div class="text">
                              <p class="mb-4"><?php echo $testy['description'];?></p>
                              <div class="d-flex align-items-center">
                                 <div class="user-img" style="background-image: url(<?php echo $testy['image']['url'];?>)"></div>
                                 <div class="pl-3">
                                    <p class="name"><?php echo $testy['name'];?></p>
                                    <span class="position"><?php echo $testy['designation'];?></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>