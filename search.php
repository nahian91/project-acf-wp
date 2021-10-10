<?php get_header();?>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread">Search for: <?php the_title();?></h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row d-flex">
               <?php
                  $s=get_search_query();
                  $args = array(
                        's' =>$s
                  );
                  $query = new WP_Query($args);
                  if($query->have_posts()) {
                     while($query->have_posts()) {
                        $query->the_post();

                     get_template_part('template-parts/blog');
                     
                     }
                  }
               ?>
            </div>
            <div class="row mt-5">
               <div class="col text-center">
                  <div class="block-27">
                     <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
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