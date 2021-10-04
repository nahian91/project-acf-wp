<?php
         if(get_field('show_counter_section', 'options')) {
      ?> 
      <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
         <div class="container">
            <div class="row">

               <?php
                  $counters = get_field('counters', 'options');
                  foreach($counters as $counter) {
               ?>
                     <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                     <div class="block-18 text-center">
                        <div class="text">
                           <strong class="number" data-number="<?php echo $counter['counter_number'];?>">0</strong>
                        </div>
                        <div class="text">
                           <span><?php echo $counter['counter_title'];?></span>
                        </div>
                     </div>
                  </div>
               <?php
                  }
               ?>
            </div>
         </div>
      </section>
      <?php
         }
      ?>