<?php
/**
 * Partial template for content in page.php
 *
 * @package piproomz
 */

?>

<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

<?php the_content(); ?>

<?php
wp_link_pages( array(
	'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
	'after'  => '</div>',
) );
?>


