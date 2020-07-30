
<?php /**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package shopcrazy
 */

get_header();?>


<div class="row">
    <div class="col-sm-8 blog-main">

        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile; endif;
            ?>
            <nav>
            <ul class="pager">
                <li><?php next_posts_link( 'Previous' ); ?></li>
                <li><?php previous_posts_link( 'Next' ); ?></li>
            </ul>
            </nav>
    </div> 

    <?php get_sidebar();?>
</div>


    

<?php get_footer();?>