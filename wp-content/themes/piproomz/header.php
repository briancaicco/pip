<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package piproomz
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<?php if( is_user_logged_in() && is_front_page() ) { ?>
	<script type="text/javascript">
		window.location.href="<?php bloginfo( 'url' ); ?>/dashboard";
	</script>
<?php } ?>


<body id="piproomz" <?php body_class(); ?> >
	<?php if ( !is_user_logged_in() && is_front_page() ) { ?>
	<header> 
		<nav class="primary-nav navbar navbar-expand-md navbar-fixed-top front-page">
			<div class="container">									
				<a class="navbar-brand mb-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a href="<?php bloginfo( 'url' );?>/login" class="btn-sm btn-success ml-auto mr-2 mr-sm-3"  >
					Join or log in
				</a>

			</div>
		</nav>
	</header>

<?php } elseif ( is_user_logged_in() && is_front_page() ) { ?>
	<header> 
		<nav class="primary-nav navbar navbar-expand-md navbar-fixed-top front-page">
			<div class="container">									
				<a class="navbar-brand mb-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php do_shortcode( '[mepr-login-link]' ); ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/dashboard" type="" class="btn btn-success btn-el" style="text-decoration: none !important;" >
					Dashboard
				</a>

			</div>
		</nav>
	</header>	
<?php } elseif ( is_user_logged_in() && !is_front_page() ) { get_template_part( 'partials/dash', 'menu' ); get_template_part( 'partials/dash', 'topbar' );  }?>