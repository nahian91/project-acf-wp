<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <?php wp_head();?>
   </head>
   <body <?php body_class(); ?>>
      <div class="wrap">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="bg-wrap">
                     <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                           <p class="mb-0 phone pl-md-2">
                              <a href="" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
                              <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
                           </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                           <div class="social-media">
                              <p class="mb-0 d-flex">
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                 <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
         <div class="container">
            <a class="navbar-brand" href="<?php echo site_url();?>">Accounting</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
            </button>
            <?php wp_nav_menu(array(
               'menu' => 'main-menu',
               'menu_class' => 'navbar-nav ml-auto',
               'container_class' => 'collapse navbar-collapse'
            )); ?>
         </div>
      </nav>
      <!-- END nav -->