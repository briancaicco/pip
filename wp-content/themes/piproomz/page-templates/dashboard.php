<?php
/**
 * Template Name: Dashboard
 *
 * Template for displaying the full-width dashboard.
 *
 * @package piproomz
 */

get_header()
?>

<?php get_template_part( 'partials/dash', 'menu' ); ?>

<?php get_template_part( 'partials/dash', 'topbar' ); ?>

<div class="container-fluid px-3 px-md-5 mt-5">
	<div class="row">
		<div class="col-md-4">
			<?php get_template_part( 'partials/dash', 'signals' ); ?>
		</div>
		<div class="col-md-8">
			<div class="row mb-4">
				<div class="col-12">
					<?php get_template_part( 'partials/dash', 'rooms' ); ?>
				</div>
			</div>
			<?php get_template_part( 'partials/dash', 'ticker' ); ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>