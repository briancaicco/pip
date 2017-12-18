<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package piproomz
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>


<?php if( !is_page('login') && !is_singular( 'signal' ) ) { ?>
<?php if ( !is_user_logged_in() || is_front_page() ) { ?>

<section class="footer py-4 mt-5">
	<!-- ******************* The Footer Area ******************* -->
	<?php get_sidebar( 'footerfull' ); ?>

	<div class="<?php echo esc_attr( $container ); ?> pt-3">

		<div class="row">

			<div class="col-md-3">
				<span class="navbar-brand" rel="home" href="" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></span>
			</div><!--col end -->
			<div class="col-md-3">
				<nav class="nav flex-column">
					<a class="nav-link active" href="<?php bloginfo( 'url' ) ?>/privacy-policy">Privacy Policy</a>
					<a class="nav-link" href="<?php bloginfo( 'url' ) ?>/terms-of-use">Terms of Use</a>
					<a class="nav-link" href="<?php bloginfo( 'url' ) ?>/risk-warning">Risk Warning</a>
					<a class="nav-link" href="<?php bloginfo( 'url' ) ?>/faq">Frequently Asked Questions</a>
				</nav>
			</div><!--col end -->
			<div class="col-md-3">

			</div><!--col end -->
			<div class="col-md-3">

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
</section>
<?php } elseif ( is_page('dashboard') ) { ?>



<?php } else { ?>
<section class="footer py-4 mt-5">
	<!-- ******************* The Footer Area ******************* -->
	<?php get_sidebar( 'footerfull' ); ?>

	<div class="<?php echo esc_attr( $container ); ?> pt-3">

		<div class="row">

			<div class="col-md-3">
				<span class="navbar-brand" rel="home" href="" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></span>
			</div><!--col end -->
			<div class="col-md-3">
				<nav class="nav flex-column">
					<a class="nav-link active" href="<?php bloginfo( 'url' ) ?>/privacy-policy">Privacy Policy</a>
					<a class="nav-link" href="<?php bloginfo( 'url' ) ?>/terms-of-use">Terms of Use</a>
					<a class="nav-link" href="<?php bloginfo( 'url' ) ?>/risk-warning">Risk Warning</a>
					<a class="nav-link" href="<?php bloginfo( 'url' ) ?>/faq">Frequently Asked Questions</a>
				</nav>
			</div><!--col end -->
			<div class="col-md-3">

			</div><!--col end -->
			<div class="col-md-3">
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->
</section>
<?php } ?>


<?php } ?>


<!-- Modal upgrade-->
<div class="modal upgrade-modal-lg fade" id="upgrademodal" tabindex="-1" role="dialog" aria-labelledby="upgrademodalLabel" aria-hidden="true" style="z-index: 10000400">
	<div class="modal-dialog modal-lg" role="document">
			<?php get_template_part( 'partials/dash', 'upgrade' ); ?>
	</div>
</div>


<?php 
if( is_single( array( '4007', '204'))){ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/node_modules/cleave.js/dist/cleave.js" /></script>
	<script src="<?php echo get_template_directory_uri(); ?>/node_modules/cleave.js/dist/addons/cleave-phone.i18n.js" /></script>
	<script type="text/javascript">
		var cleavePhone = new Cleave(array( '#mepr_phone_number','#mepr_phone' ) {
		    phone: true,
		    phoneRegionCode: 'US'
		});
	</script>
<?php } ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108382349-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-108382349-1');
</script>
<!-- <script>
	Userback = window.Userback || {};
	Userback.access_token = '1415|1815|AucXF44wut1BvzBB3AnGKGQ7tbnqAGsbaF8QJcmeGoQbXrN11b';

	(function(id) {
		if (document.getElementById(id)) {return;}
		var s = document.createElement('script');
		s.id = id;
		s.src = 'https://static.userback.io/widget/v1.js';
		var parent_node = document.head || document.body;
		parent_node.appendChild(s);
	})('userback-sdk');
</script> -->

<?php wp_footer(); ?>

</body>

</html>

