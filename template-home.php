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
      
      <?php get_template_part('template-parts/features');?>

      <section class="ftco-section bg-light ftco-no-pt">
         <?php get_template_part('template-parts/services'); ?>
      </section>

      <?php get_template_part('template-parts/counter'); ?>

      
      <?php get_template_part('template-parts/testimoni'); ?>

      <?php get_template_part('template-parts/faq');?>

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
                  $query -> the_post();
                  
                  get_template_part('template-parts/blog');

               }
            ?>
               
            </div>
         </div>
      </section>
      
      <?php get_template_part('template-parts/cta');?>

      <?php get_template_part('template-parts/prices');?>
      <?php get_footer();?>