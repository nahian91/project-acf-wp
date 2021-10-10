<?php get_header();?>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread">Blog Single</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ftco-animate">
                  <?php the_content();?>
                  <div class="tag-widget post-tag-container mb-5 mt-5">
                     <div class="tagcloud">
                        <?php echo get_the_tag_list();?>
                     </div>
                  </div>
                  <div class="about-author d-flex p-4 bg-light">
                     <div class="bio mr-5">

                     <?php
                        global $post;
                        $author_id = $post->post_author;
                           ?>
                           <img src="<?php echo esc_url( get_avatar_url( $author_id ) ); ?>" alt="<?php echo get_the_author_meta( 'display_name', $author_id );?>" class="img-fluid mb-4">

                     </div>
                     <div class="desc">
                        <h3><?php echo get_the_author_meta( 'display_name', $author_id );?></h3>
                        <p><?php echo get_the_author_meta( 'description', $author_id );?></p>
                     </div>
                  </div>
                  <div class="pt-5 mt-5">
                     <?php // If comments are open or we have at least one comment, load up the comment template.
                     if ( comments_open() || get_comments_number() ) :
                        comments_template();
                     endif; ?>
                     <!-- END comment-list -->
                  </div>
               </div>
               <!-- .col-md-8 -->
               <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                  <div class="sidebar-box">
                     <form action="#" class="search-form">
                        <div class="form-group">
                           <span class="fa fa-search"></span>
                           <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                     </form>
                  </div>
                  <div class="sidebar-box ftco-animate">
                     <div class="categories">
                        <h3>Services</h3>
                        <li><a href="#">Market Analysis <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Accounting Advisor <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">General Consultancy <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="#">Structured Assesment <span class="fa fa-chevron-right"></span></a></li>
                     </div>
                  </div>
                  <div class="sidebar-box ftco-animate">
                     <h3>Recent Blog</h3>
                     <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/image_1.jpg);"></a>
                        <div class="text">
                           <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                           <div class="meta">
                              <div><a href="#"><span class="icon-calendar"></span> Mar. 31, 2020</a></div>
                              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/image_2.jpg);"></a>
                        <div class="text">
                           <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                           <div class="meta">
                              <div><a href="#"><span class="icon-calendar"></span> Mar. 31, 2020</a></div>
                              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/image_3.jpg);"></a>
                        <div class="text">
                           <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                           <div class="meta">
                              <div><a href="#"><span class="icon-calendar"></span> Mar. 31, 2020</a></div>
                              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar-box ftco-animate">
                     <h3>Tag Cloud</h3>
                     <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">home</a>
                        <a href="#" class="tag-cloud-link">builder</a>
                        <a href="#" class="tag-cloud-link">build</a>
                        <a href="#" class="tag-cloud-link">create</a>
                        <a href="#" class="tag-cloud-link">make</a>
                        <a href="#" class="tag-cloud-link">construction</a>
                        <a href="#" class="tag-cloud-link">house</a>
                        <a href="#" class="tag-cloud-link">architect</a>
                     </div>
                  </div>
                  <div class="sidebar-box ftco-animate">
                     <h3>Paragraph</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                  </div>
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