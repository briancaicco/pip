		<header> 
			<div class="container-fluid p-0">
				<nav class="primary-nav navbar navbar-expand-md navbar-fixed-top dashboard ">

					<!-- Menu Toggle -->
					<ul class="navbar-nav mr-auto align-items-stretch">
						<li class="nav-item " style="border-right: 1px solid #dfe2ec;">
							<a href="#menu-toggle" class="menu-icon" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
						</li>
						<li><h1 id="page-name"><?php the_title();?></h1></li>
					</ul>
						<?php if(!current_user_can('mepr-active','rule: 4007, 204, 200, 4124')) { ?><div><a href="#" type="" data-toggle="modal" class="btn mr-3 py-2 btn-success" data-target="#upgrademodal" style="text-decoration: none !important;" >Upgrade</a></div>
						<?php } elseif(current_user_can('mepr-active','rule: 4124, 204')) { ?><div class="mr-3 badge badge-success text-light">Pro Member</div>  
						<?php } else{ ?><div class="mr-3 py-2 badge badge-success text-light">Basic Member</div> <?}?>

					<ul class="navbar-nav user-settings">
						<li class="nav-item dropdown">
							<a href="<?php echo bp_loggedin_user_domain(); ?>notifications/" class="nav-link pr-2 notifications"><?php echo bp_get_notifcation_count(); ?></a>
							<a class="nav-link dropdown-toggle mr-lg-0" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php bp_loggedin_user_avatar( 'width=20&height=20' ); ?>
							</a>
							<div class="dropdown-menu dropdown-menu-right fade" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>messages/">Messages</a>
								<a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>">Profile</a>
								<a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>friends/">Friends</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo bp_loggedin_user_domain(); ?>settings/">Settings</a>
								<a class="dropdown-item" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
							</div>
						</li>
					</ul>

				</nav>
			</div>
		</header>