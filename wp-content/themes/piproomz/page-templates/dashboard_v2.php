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

<div class="container-fluid px-3 px-md-5 mt-5 pt-2 mt-md-6 pt-md-0">
	<div class="row">
		<div class="col-12">
			<p class="h5 mb-3">Latest Signals</p>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-12 col-md-8">
			<div class="row">
				<?php get_template_part( 'partials/dash', 'signals' ); ?>
			</div>
		</div>
		<div class="col-12 col-md-4 eco-cal">
			<div style="width: 100%; height: 100%; position: relative; overflow: hidden;">
				<iframe style="box-sizing: border-box; height: 100%; margin-top: -33px;" scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="100%" src="https://s.tradingview.com/eventswidgetembed/#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22locale%22%3A%22en%22%2C%22importanceFilter%22%3A%22-1%2C0%2C1%22%2C%22currencyFilter%22%3A%22USD%2CAUD%2CCAD%2CEUR%2CGBP%2CDEM%2CJPY%2CBRL%2CARS%2CCNY%2CFRF%2CINR%2CIDR%2CITL%2CMXN%2CKRW%2CRUR%2CSAR%2CZAR%2CTRL%22%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22events%22%7D" ></iframe>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-12">
			<p class="h5 mb-3">Trade Rooms</p>
		</div>
	</div>
	<div class="row">
		<?php get_template_part( 'partials/dash', 'currFilter' ); ?>
	</div>

</div>


<?php get_footer(); ?>