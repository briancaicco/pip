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

<div class="container-fluid px-3 px-md-5 mt-3 mt-md-6">
	<div class="row">
		<div class="col-md-4">
			<?php get_template_part( 'partials/dash', 'signals' ); ?>
		</div>
		<div class="col-md-8">
			<?php get_template_part( 'partials/dash', 'broker' ); ?>
			<?php get_template_part( 'partials/dash', 'ticker' ); ?>
		</div>

	</div>
	<div class="row mt-4">
		<div class="col-12">
			<?php get_template_part( 'partials/dash', 'rooms' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div id="buddypress">
				<p class="h5 mb-3 mt-4">Latest Activity</p>
				<?php get_template_part( 'buddypress/activity/activity', 'loop' ); ?>
			</div>
		</div>
		<div class="col-md-4">
			<p class="h5 mb-3 mt-4">Members</p>
			<div class="card mb-2">
				<div class="card-body">
					<?php dynamic_sidebar('dash-members'); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>