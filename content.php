<div class="container">
    <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
    <div class="container" style="color:black;">
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><hr>
            <?php the_content(); ?>
            
        </div><!-- /.blog-post -->
    </div>
</div>
