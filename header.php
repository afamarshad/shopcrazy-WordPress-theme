<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Crazy</title>

  <?php wp_head();?>
</head>

<body class="parallax hidden-sn mdb-skin <?php body_class();?>">
<!-- navbar-fixed-top -->
<div class="container row" style="margin:20px;">
<div class="col-sm-1">
  <?php 
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      // if(has_custom_logo()):
  ?>
  <div class="header-logo"><img src="<?php echo $image[0]; ?>" height="50" width="50"> </div>  
  </div>
<div class="col-sm-10">
  <a href="<?php echo esc_url( home_url()); ?>" style="font-size:50px;"><?php bloginfo('name'); ?></a>
  <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
  </div>
</div>
  <nav class="navbar navbar-default ">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <?php
        wp_nav_menu( array( 
            'theme_location' => 'my-custom-menu', 
            'container_class' => 'navbar-collapse collapse custom-menu-class',
            'container'         => 'ul',
            'menu_class'        => 'nav navbar-nav navbar-right' ) ); 
      ?>
     </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <a href="<?php echo wc_get_cart_url(); ?>">
          <i class="fa fa-shopping-cart" style="font-size:24px;margin-top:5px;"></i>
          <span class='badge badge-warning' id='lblCartCount'> 
            <?php
              $cartcount = WC()->cart->get_cart_contents_count();
              if ($cartcount > 0) { echo $cartcount; }else{echo 0;}
            ?> 
          </span>
      </a>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>

    

    