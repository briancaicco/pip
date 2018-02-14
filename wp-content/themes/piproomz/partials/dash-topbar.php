		<header> 

				<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-light d-flex justify-content-between">

					<div class="brand-elements">
					<a href="#menu-toggle" class="menu-icon" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

					<a class="navbar-brand mb-0 ml-3" rel="home" href="<?php echo esc_url( home_url( '/dashboard' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">							<img class="logo-blue" src="<?php echo get_template_directory_uri(); ?>/img/pip_logo.svg" width="160px" alt="logo-blue"></a>
					</div>


					<div class="user-menu">
						<?php  if(current_user_can('pro_member')) { ?>
							<div class="mr-3 badge badge-success text-white member-lvl">Pro</div>  
						<?php } elseif(current_user_can('basic_member')) { ?>
							<div class="mr-3 badge badge-warning text-white member-lvl"><a href="<?php bloginfo( 'url' ) ?>/subscribe/pro/">Basic</a></div>  
						<?php } else{ ?>
							<div>
								<a href="#" type="" data-toggle="modal" class="btn py-2 btn-success" data-target="#upgrademodal" style="text-decoration: none !important;" >Upgrade</a>
							</div>
						<?php }?>

						<ul class="navbar-nav user-settings">
							<li class="nav-item dropdown">

								<a href="<?php echo bp_loggedin_user_domain(); ?>notifications/" class="nav-link pr-2 notifications-nav"><?php echo bp_get_notifcation_count(); ?></a>
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php bp_loggedin_user_avatar( 'width=50&height=50' ); ?>
								</a>

								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
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

				</nav>

		</header>