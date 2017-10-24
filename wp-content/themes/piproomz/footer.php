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
<footer>
<!-- ******************* The Footer Area ******************* -->
<?php get_sidebar( 'footerfull' ); ?>

	<div class="<?php echo esc_attr( $container ); ?> footer">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108382349-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108382349-1');
</script>
<script>
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
</script>

<?php wp_footer(); ?>

</body>

</html>

