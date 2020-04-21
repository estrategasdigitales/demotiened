<?php
/**
 * Page template
 *
 * @package WordPress
 * @subpackage Visual Composer Starter
 * @since Visual Composer Starter 1.0
 */

get_header(); ?>
<?php if( is_front_page()  ) { ?>


    <?php echo do_shortcode( '[rev_slider alias="home"]' ); ?>


<div class="container text-center flechahomesuperior">
  <img src="<?php echo site_url(); ?>/wp-content/themes/visual-composer-starter-child/img/flecha_abajo_naranja.png">
</div>
<nav id="myHeader" class="navbar navbar-default" role="navigation">
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
                <li><a href="<?php echo site_url(); ?>/product-category/categoria-3/">Categoría 3</a></li>
                
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


  <?php } else { ?>
  
  <?php } ?>  
	<div class="<?php echo esc_attr( visualcomposerstarter_get_content_container_class() ); ?>">
		<div class="content-wrapper">
			<div class="row">
				<div class="<?php echo esc_attr( visualcomposerstarter_get_maincontent_block_class() ); ?>">
					<div class="main-content">
						<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
						endwhile; // End the loop.
						?>
					</div><!--.main-content-->
				</div><!--.<?php echo esc_html( visualcomposerstarter_get_maincontent_block_class() ); ?>-->

				<?php if ( visualcomposerstarter_get_sidebar_class() ) : ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>

			</div><!--.row-->
		</div><!--.content-wrapper-->
	</div><!--.<?php echo esc_html( visualcomposerstarter_get_content_container_class() ); ?>-->
<?php get_footer();
