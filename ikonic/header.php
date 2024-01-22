<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ikonic</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
        <?php 
            if( has_custom_logo() ){
                the_custom_logo();
            }else{
                ?>
                    <a href="<?php echo home_url( '/' ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                <?php
            }
        ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <?php //wp_nav_menu( array( 'theme_location' => 'wp_ikonic_main_menu', 'depth' => 2 )); 
        wp_nav_menu( array( 'theme_location' => 'wp_ikonic_main_menu', 'container'=> false, 'menu_class'=>'navbar-nav', 'depth' => 2
            ) );
    ?>
    </div>
  </div>
</nav>