<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Visual Composer Starter
 * @since Visual Composer Starter 1.0
 */

?>
<article class="col-md-4" id="post-<?php the_ID(); ?>" <?php post_class( 'entry-preview' ); ?>>

	<?php visualcomposerstarter_post_thumbnail(); ?>
<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		
	<?php visualcomposerstarter_entry_meta(); ?>

	

</article><!--.entry-preview-->
