
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

    <div class="container">
        <?php
        echo do_shortcode('[smartslider3 slider=2]');
        ?>
    </div>

    <div class="container text-center" >
        <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center;margin-top:20px;margin-bottom:40px;">
            <span style="font-size: 40px; background-color: white;">
                CATEGORIES THAT YOU WILL LOVE <!--Padding is optional-->
            </span>
        </div>
    </div>
     
    <div class="conatiner">
        <div class="wrap">
            <div class="box four">
                <a href="<?php echo get_option('CategoryURL11'); ?>">
                    <h1><?php echo get_option('PageCategory11'); ?></h1> 
                </a>
            </div>
            <div class="box five">
                <a href="<?php echo get_option('CategoryURL22'); ?>">
                    <h1><?php echo get_option('PageCategory22'); ?></h1>
                </a>
            </div>  
            <div class="box six">
                <a href="<?php echo get_option('CategoryURL66'); ?>">
                    <h1><?php echo get_option('PageCategory66'); ?></h1>
                </a>
            </div>  
            <div class="box four">
                <a href="<?php echo get_option('CategoryURL44'); ?>">
                    <h1><?php echo get_option('PageCategory44'); ?></h1>
                </a>
            </div>  
            <div class="box five">
                <a href="<?php echo get_option('CategoryURL55'); ?>">
                    <h1><?php echo get_option('PageCategory55'); ?></h1>
                </a>
            </div>  
            <div class="box six">
                <a href="<?php echo get_option('CategoryURL77'); ?>">
                    <h1><?php echo get_option('PageCategory77'); ?></h1>
                </a>
            </div>   
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid hurricane">
    </div>

    <div class="container text-center" >
        <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center;margin-bottom:40px;">
            <span style="font-size: 40px; background-color: white;">
                BEST SELLERS <!--Padding is optional-->
            </span>
        </div>
        <p>A thoughtful curation of diverse aesthetics and unique designs perfectly suited to your personal style.</p>
    </div>

    <div class="image" style="margin-bottom:50px;">
        <?php echo do_shortcode("[wcpcsu id='150']"); ?>
    </div>
    

<?php get_footer();?>