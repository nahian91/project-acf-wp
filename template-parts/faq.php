<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="img-faqs w-100">
                     <div class="img mb-4 mb-sm-0" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/about-2.jpg);">
                     </div>
                     <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/about-1.jpg);">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 pl-lg-5">
                  <div class="heading-section mb-5 mt-5 mt-lg-0">
                     <span class="subheading">FAQs</span>
                     <h2 class="mb-3">Frequently Asks Questions</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">

                  <?php
                     $faqs = get_field('faqs', 'options');
                     $i = 0;
                     foreach($faqs as $faq) {
                     $i++;
                  ?>
                     <div class="card">
                        <div class="card-header p-0" id="heading<?php echo $i;?>">
                           <h2 class="mb-0">
                              <button href="#collapse<?php echo $i;?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
                                 <p class="mb-0"><?php echo $faq['faq_title'];?></p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse<?php if($i==1) {echo ' show';} ?>" id="collapse<?php echo $i;?>" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
                           <div class="card-body py-3 px-0">
                              <?php echo $faq['faq_description'];?>
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