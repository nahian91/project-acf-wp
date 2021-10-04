<section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <?php
                     $price_info = get_field('price_info', 'options');
                  ?>
                  <span class="subheading"><?php echo $price_info['section_subtitle'];?></span>
                  <h2><?php echo $price_info['section_title'];?></h2>
               </div>
            </div>
            <div class="row">

            <?php
               $prices = get_field('prices', 'options');
            ?>
            <?php
               foreach($prices as $price) {
            ?>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block"><?php echo $price['price_title'];?></span>
                        <span class="price"><sup>$</sup> <span class="number"><?php echo $price['price_amount'];?></span> <sub>/mos</sub></span>
                        <ul class="pricing-text mb-5">
                           <?php echo $price['prices_lists'];?>
                        </ul>
                        <a href="<?php echo $price['price_button_url'];?>" class="btn btn-primary d-block px-2 py-3"><?php echo $price['price_button_text'];?></a>
                     </div>
                  </div>
               </div>
            <?php
               }
            ?>
            
               
            </div>
         </div>
      </section>