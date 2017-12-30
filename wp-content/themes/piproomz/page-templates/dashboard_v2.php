<?php
/**
 * Template Name: Dashboard V2
 *
 * Template for displaying the full-width dashboard.
 *
 * @package piproomz
 */

get_header()
?>

<div class="container-fluid px-3 px-md-5 mt-6">
	<div class="row">
			<?php get_template_part( 'partials/dash', 'currFilter' ); ?>
	</div>
</div>




<?php get_footer(); ?>