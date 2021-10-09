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