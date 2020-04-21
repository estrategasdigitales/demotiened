<?php
/**
 * Header
 *
 * @package WordPress
 * @subpackage Visual Composer Starter
 * @since Visual Composer Starter 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php visualcomposerstarter_hook_after_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-lxgRcdbXIZhWAJgoHigRpB_8Jezv0lg"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/visual-composer-starter-child/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/visual-composer-starter-child/css/slick-theme.css"/>
  <script src="<?php echo site_url(); ?>/wp-content/themes/visual-composer-starter-child/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script
  src="<?php echo get_site_url(); ?>/wp-content/themes/visual-composer-starter-child/js/scripts.js"></script>
<script src="https://kit.fontawesome.com/d718b59fa5.js" crossorigin="anonymous"></script>

	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
  <div class="overlay-content">
   <?php get_search_form(); ?>
  </div>
</div>
  
    
  </header>

<?php if( is_front_page()  ) { ?>
    
  <?php } else { ?>
  
  
<nav  id="myHeader2" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand navbar-brand-centered">
          <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/visual-composer-starter-child/img/logo.png"></a>
        </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="navbar-brand-centered">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="<?php echo site_url(); ?>/tienda/">Catálogo Completo</a></li>
                <li><a href="<?php echo site_url(); ?>/product-category/categoria-1/">Categoría 1</a></li>
                <li><a href="<?php echo site_url(); ?>/product-category/categoria-2/">Categoría 2</a></li>
                
              </ul>
            </li>
            <li><a href="<?php echo site_url(); ?>/product-category/lonuevo/">Lo nuevo</a></li>
            <li><a href="<?php echo site_url(); ?>/contacto">Contacto</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
            <span class="iconosheader" style="line-height: 0px;" onclick="openSearch()"><i class="fas fa-search"></i></span></li>     
            <li><a class="iconosheader" target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-square" target="_blank"></i></a>
          <a class="iconosheader" href="https://www.instagram.com/"  target="_blank"><i class="fab fa-instagram"></i></a>
        </li>  
         
          <li>
            <a class="cart-contents iconosheader" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fas fa-shopping-bag"></i></a>
          </li> 
            <li>
            <?php if ( is_user_logged_in() ) { ?>
  <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('Mi cuenta','woothemes'); ?></a>
 <?php } 
 else { ?>
  <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login','woothemes'); ?></a>
 <?php } 
 ?>

 </li>                
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<?php } ?>  