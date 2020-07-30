<?php

// Adding styling and js scripts
function shopcrazy_scripts(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.4.1');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css');
    wp_enqueue_script('boostrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('boostrap',get_template_directory_uri().'/js/jquery.min.js',array('jquery'),'3.4.1',true);

}

add_action('wp_enqueue_scripts','shopcrazy_scripts');


// Adding google fonts
function shopcrazy_google_fonts(){
    wp_register_style('OpenSans','https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style('OpenSans');
}

add_action('wp_print_styles','shopcrazy_google_fonts');
// WordPress Titles
add_theme_support( 'title-tag' );

// Image size for single posts
// add_image_size( 'single-post-thumbnail', 1345, 450 );

// Support Featured Images
function wpdocs_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 );
    add_image_size( 'category-thumb', 300, 9999 );
}
add_action( 'after_setup_theme', 'wpdocs_setup_theme' );


add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);


add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));


add_theme_support( 'custom-header' );
// add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
// add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
// add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

add_theme_support( 'custom-background' );

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) 
{
    global $woocommerce;
    ob_start();
    ?>
    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php WC()->cart->get_cart_contents_count(); ?></a>

    <?php

    $fragments['a.cart-customlocation'] = ob_get_clean();

    return $fragments;
}

//Custom Front-Page Settings

function setup_theme_frontpage() {
    add_menu_page('Theme settings', 'ShopCrazy Theme Settings', 'manage_options', 'shopcrazy_theme_settings', 'newtheme_settings_page', null, 99 );     
}

add_action("admin_menu", "setup_theme_frontpage");

function newtheme_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
				<?php
                    settings_fields( 'section');
                    do_settings_sections( 'frontpage-options' );
                    submit_button();
				?>
		</form>
	</div>
    <?php 
}

function shopcrazyTheme_settings_page_setup() {
	add_settings_section('section','Add Category', null, 'frontpage-options');
    add_settings_field('PageCategory11','Page Category Name','setting_PageCategoryName','frontpage-options','section');
    add_settings_field('CategoryURL11','Page Category URL','setting_PageCategoryURL','frontpage-options','section');

    register_setting('section','PageCategory11');
    register_setting('section','CategoryURL11');

    add_settings_field('PageCategory22','Page Category Name','setting_PageCategoryName1','frontpage-options','section');
    add_settings_field('CategoryURL22','Page Category URL','setting_PageCategoryURL1','frontpage-options','section');

    register_setting('section','PageCategory22');
    register_setting('section','CategoryURL22');

    add_settings_field('PageCategory66','Page Category Name','setting_PageCategoryName2','frontpage-options','section');
    add_settings_field('CategoryURL66','Page Category URL','setting_PageCategoryURL2','frontpage-options','section');

    register_setting('section','PageCategory66');
    register_setting('section','CategoryURL66');

    add_settings_field('PageCategory44','Page Category Name','setting_PageCategoryName3','frontpage-options','section');
    add_settings_field('CategoryURL44','Page Category URL','setting_PageCategoryURL3','frontpage-options','section');

    register_setting('section','PageCategory44');
    register_setting('section','CategoryURL44');

    add_settings_field('PageCategory55','Page Category Name','setting_PageCategoryName4','frontpage-options','section');
    add_settings_field('CategoryURL55','Page Category URL','setting_PageCategoryURL4','frontpage-options','section');

    register_setting('section','PageCategory55');
    register_setting('section','CategoryURL55');

    add_settings_field('PageCategory77','Page Category Name','setting_PageCategoryName5','frontpage-options','section');
    add_settings_field('CategoryURL77','Page Category URL','setting_PageCategoryURL5','frontpage-options','section');

    register_setting('section','PageCategory77');
    register_setting('section','CategoryURL77');
}

add_action( 'admin_init', 'shopcrazyTheme_settings_page_setup' );

function setting_PageCategoryName(){
    ?>
	<input type="text" name="PageCategory11" id="PageCategory11" placeholder="Category Name" value="<?php echo get_option( 'PageCategory11' ); ?>" />
   <?php
}

function setting_PageCategoryURL(){
    ?>
    <input type="text" name="CategoryURL11" id="CategoryURL11" placeholder="Category URL" value="<?php echo get_option( 'CategoryURL11' ); ?>">
    <?php
}

function setting_PageCategoryName1(){
    ?>
	<input type="text" name="PageCategory22" id="PageCategory22" placeholder="Category Name" value="<?php echo get_option( 'PageCategory22' ); ?>" />
	<?php
}

function setting_PageCategoryURL1(){
    ?>
    <input type="text" name="CategoryURL22" id="CategoryURL22" placeholder="Category URL" value="<?php echo get_option( 'CategoryURL22' ); ?>">
    <?php
}

function setting_PageCategoryName2(){
    ?>
	<input type="text" name="PageCategory66" id="PageCategory66" placeholder="Category Name" value="<?php echo get_option( 'PageCategory66' ); ?>" />
    <?php
}

function setting_PageCategoryURL2(){
    ?>
    <input type="text" name="CategoryURL66" id="CategoryURL66" placeholder="Category URL" value="<?php echo get_option( 'CategoryURL66' ); ?>">
    <?php
}

function setting_PageCategoryName3(){
    ?>
    <input type="text" name="PageCategory44" id="PageCategory44" placeholder="Category Name" value="<?php echo get_option( 'PageCategory44' ); ?>" />
	<?php
}

function setting_PageCategoryURL3(){
    ?>
    <input type="text" name="CategoryURL44" id="CategoryURL44" placeholder="Category URL" value="<?php echo get_option( 'CategoryURL44' ); ?>">
    <?php
}

function setting_PageCategoryName4(){
    ?>
    <input type="text" name="PageCategory55" id="PageCategory55" placeholder="Category Name" value="<?php echo get_option( 'PageCategory55' ); ?>" />
	<?php
}

function setting_PageCategoryURL4(){
    ?>
    <input type="text" name="CategoryURL55" id="CategoryURL55" placeholder="Category URL" value="<?php echo get_option( 'CategoryURL55' ); ?>">
    <?php
}

function setting_PageCategoryName5(){
    ?>
    <input type="text" name="PageCategory77" id="PageCategory77" placeholder="Category Name" value="<?php echo get_option( 'PageCategory77' ); ?>" />
	<?php
}

function setting_PageCategoryURL5(){
    ?>
    <input type="text" name="CategoryURL77" id="CategoryURL77" placeholder="Category URL" value="<?php echo get_option( 'CategoryURL77' ); ?>">
    <?php
}


function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  function woocommerce_product_category( $args = array() ) {
    $woocommerce_category_id = get_queried_object_id();
  $args = array(
      'parent' => $woocommerce_category_id
  );
  $terms = get_terms( 'product_cat', $args );
  if ( $terms ) {
      echo '<ul class="woocommerce-categories">';
      foreach ( $terms as $term ) {
          echo '<li class="woocommerce-product-category-page">';
            woocommerce_subcategory_thumbnail( $term );
          echo '<h2>';
          echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
          echo $term->name;
          echo '</a>';
          echo '</h2>';
          echo '</li>';
      }
      echo '</ul>';
  }
}
add_action( 'woocommerce_before_shop_loop', 'woocommerce_product_category', 100 );