<?php

/*
Template Name: Home
*/

get_header();?>
      <div class="hero-wrap">
         <div class="home-slider owl-carousel">

         <?php
            if($sliders = get_field('sliders', 'options')) {
               foreach($sliders as $slider) {
                  ?>
                        <div class="slider-item" style="background-image:url(<?php echo $slider['slider_image']['url']?>">
                        <div class="overlay"></div>
                        <div class="container">
                           <div class="row no-gutters slider-text align-items-center justify-content-center">
                              <div class="col-md-8 ftco-animate">
                                 <div class="text w-100 text-center">
                                    <h2><?php echo $slider['slider_subtitle'];?></h2>
                                    <h1 class="mb-4"><?php echo $slider['slider_title'];?></h1>
                                    <p><a href="<?php echo $slider['slider_button_url'];?>" class="btn btn-white"><?php echo $slider['slider_button_text'];?></a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
               }
            } 
            ?>
            
         </div>
      </div>
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
      <section class="ftco-section bg-light ftco-no-pt">
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
      </section>

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
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading">News &amp; Blog</span>
                  <h2>Latest news from our blog</h2>
               </div>
            </div>
            <div class="row d-flex">

            <?php
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3
               );

               $query = new WP_Query($args);
               while($query -> have_posts()) {
                  $query -> the_post()
            ?>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="<?php the_permalink();?>" class="block-20 rounded" style="background-image: url('<?php the_post_thumbnail_url();?>');">
                     </a>
                     <div class="text p-4">
                        <div class="meta mb-2">
                           <div><a href="#"><?php the_date(); ?></a></div>
                           <div><a href="#"><?php the_author(); ?></a></div>
                           <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> <?php echo get_comments_number(); ?></a></div>
                        </div>
                        <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                     </div>
                  </div>
               </div>
            <?php
               }
            ?>
               
            </div>
         </div>
      </section>
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
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading">Price &amp; Plans</span>
                  <h2>Affordable Packages</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block">Personal</span>
                        <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>
                        <ul class="pricing-text mb-5">
                           <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                           <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                           <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block">Business</span>
                        <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>
                        <ul class="pricing-text mb-5">
                           <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                           <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                           <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block">Ultimate</span>
                        <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>
                        <ul class="pricing-text mb-5">
                           <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                           <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                           <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block">Premium</span>
                        <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>
                        <ul class="pricing-text mb-5">
                           <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                           <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                           <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                           <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php get_footer();?>