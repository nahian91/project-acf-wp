<?php

/*
Template Name: Contact
*/

get_header();?>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title();?> <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread"><?php the_title();?></h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                           <div class="contact-wrap w-100 p-md-5 p-4">
                              <h3 class="mb-4">Get in touch</h3>
                              <div id="form-message-warning" class="mb-4"></div>
                              <div id="form-message-success" class="mb-4">
                                 Your message was sent, thank you!
                              </div>
                              <div id="contactForm" class="contactForm">
                                 <?php echo do_shortcode('[contact-form-7 id="198" title="Contact Form"]');?>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                           <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                              <h3><?php the_field('contact_left_title', 'options'); ?></h3>
                              <p class="mb-4"><?php the_field('contact_left_description', 'options'); ?></p>
                              
                              
                              <?php
                                 $contacts = get_field('contact_address', 'options');
                                 foreach($contacts as $contact) {
                              ?>
                                 <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                       <span class="fa <?php echo $contact['icon'];?>"></span>
                                    </div>
                                    <div class="text pl-3">
                                       <p><span><?php echo $contact['title'];?></span> <a href="#"><?php echo $contact['description'];?></a></p>
                                    </div>
                                 </div>
                              <?php
                                 }
                              ?>
                              
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="map" class="map"></div>
      <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
         <div class="container py-5">
            <div class="row">
               <div class="col-md-7 d-flex align-items-center">
                  <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
               </div>
               <div class="col-md-5 d-flex align-items-center">
                  <form action="#" class="subscribe-form">
                     <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
 <?php get_footer();?>