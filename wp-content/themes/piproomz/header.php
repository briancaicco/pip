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
<html <?php language_attributes(); ?>>
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
 
<body id="piproomz" <?php body_class('bg-grey-200'); ?> >
	<?php if( !is_page('login')) { ?>
	<header> 
			<nav class="primary-nav navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark">
				<div class="container">
						
					<?php if ( is_user_logged_in() ) { ?>

							<?php if ( ! has_custom_logo() ) { ?>

								<?php if ( is_front_page() && is_home() ) : ?>

									<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
									
								<?php else : ?>

									<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>activity/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></a>
								
								<?php endif; ?>
							
							<?php } ?>


						    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
						        <span class="navbar-toggler-icon"></span>
						    </button>

						    <div class="navbar-collapse collapse d-flex justify-content-stretch" id="navbarNavDropdown">

						        
						    	<?php 
						    	wp_nav_menu(
						    		array(
						    			'theme_location'  => 'primary-logged-in',
						    			'container_class' => '',
						    			'container_id'    => '',
						    			'menu_class'      => 'navbar-nav',
						    			'fallback_cb'     => '',
						    			'menu_id'         => 'main-menu',
						    			'walker'          => new WP_Bootstrap_Navwalker(),
						    		)
						    	); 

						    	?>

						        <ul class="navbar-nav flex-row ml-auto">

						            <li class="nav-item">
						                 <a href="<?php echo bp_loggedin_user_domain(); ?>notifications/" class="nav-link pr-2 notifications"><?php echo bp_get_notifcation_count(); ?></a>
						            </li>	

						            <li class="nav-item dropdown">
						                <a class="nav-link dropdown-toggle mr-lg-0" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						                	<?php bp_loggedin_user_avatar( 'width=30&height=30' ); ?> <?php //echo '<span class="text-light ml-1 d-inline-block">' . bp_get_user_firstname( bp_get_loggedin_user_fullname() ) . '</span>'; ?>
						                </a>
						                <div class="dropdown-menu dropdown-menu-right border-0" aria-labelledby="navbarDropdownMenuLink">
						                    <a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>messages/">Messages</a>
						                    <a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>">Profile</a>
						                    <a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>friends/">Friends</a>
						                    <div class="dropdown-divider"></div>
						                    <a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>settings/">Settings</a>
						                    <a class="dropdown-item" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
						                </div>
						            </li>
						        </ul>

						    </div>



						

					<?php } else { ?>


					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?><small style="vertical-align: super; font-size: 9px;"> beta</small></a>
						
						<?php endif; ?>
					
					<?php } ?>

						<?php 
						// wp_nav_menu(
						// 	array(
						// 		'theme_location'  => 'primary',
						// 		'container_class' => 'collapse navbar-collapse',
						// 		'container_id'    => 'navbarNavDropdown',
						// 		'menu_class'      => 'navbar-nav ml-auto',
						// 		'fallback_cb'     => '',
						// 		'menu_id'         => 'main-menu',
						// 		'walker'          => new WP_Bootstrap_Navwalker(),
						// 	)
						// ); 

						?>

						<!-- Button trigger modal -->
						<a href="<?php echo home_url (); ?>/register" type="" class="btn btn-outline-success ml-auto mr-2 mr-sm-3" style="text-decoration: none !important;" >
						  <small>Join for Free</small>
						</a>
						<a href="#" type="" class="text-white" data-toggle="modal" data-target="#loginmodal" style="text-decoration: none !important;" >
						  <small>Login</small>
						</a>

<!-- 					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button> -->

						<?php } ?>
				</div>
			</nav>
	</header>
	<?php } ?>

