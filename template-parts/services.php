<div class="container">
            <div class="row">

            <?php
               $services = get_field('services', 'options');
               foreach($services as $service) {
            ?>
               <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                  <div class="d-block">
                     <div class="icon d-flex mr-2">
                        <i class="fa <?php echo $service['service_icon']; ?>"></i>
                     </div>
                     <div class="media-body">
                        <h3 class="heading"><?php echo $service['service_title']; ?></h3>
                        <p><?php echo $service['service_description']; ?></p>
                     </div>
                  </div>
               </div>
            <?php
               }
            ?>

            </div>
         </div>