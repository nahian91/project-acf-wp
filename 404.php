<?php get_header();?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> </a></span> <span>404 Page <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread">404 Page</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ftco-animate">
                   <h1>404 Not Found</h1>
                   <?php echo get_search_form();?>
               </div>
               <!-- .col-md-8 -->
               <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                  <?php dynamic_sidebar('sidebar');?>
                  <div class="sidebar-box ftco-animate">
               </div>
            </div>
         </div>
      </section>
      <!-- .section -->
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