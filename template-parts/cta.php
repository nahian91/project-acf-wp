<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
         <div class="container py-5">
            <div class="row">
               <div class="col-md-7 d-flex align-items-center">
                  <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;"><?php echo the_field('cta_title', 'options');?></h2>
               </div>
               <div class="col-md-5 d-flex align-items-center">
                  <div class="subscribe-form">
                     <?php echo do_shortcode('[contact-form-7 id="171" title="cta_subscribe"]');?>  
                  </div>
               </div>
            </div>
         </div>
      </section>