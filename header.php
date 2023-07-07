<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link id="theme-style" href="/wordpress/wp-content/themes/boxmeow-ft/assets/dist/main.css" rel="stylesheet" />
	<link id="theme-style" href="/wordpress/wp-content/themes/boxmeow-ft/assets/dist/style.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#0C3094;">
	<header class="header-global">
		<nav id="navbar-main" class="navbar navbar-expand-lg navbar-light navbar-transparent headroom">
			<div class="container">
				<a class="logo navbar-brand font-weight-bold" href="<?php echo home_url(); ?>" title="boxmoe">
					<span class="navbar-toggler-icon"></span>
				</a>
				<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon mt-2">
						<span class="navbar-toggler-bar bar1"></span>
						<span class="navbar-toggler-bar bar2"></span>
						<span class="navbar-toggler-bar bar3"></span>
					</span>
				</button>
				<div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
					<ul class="navbar-nav navbar-nav-hover mx-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown Menu
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Item 1</a>
								<a class="dropdown-item" href="#">Item 2</a>
								<a class="dropdown-item" href="#">Item 3</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- 
	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'boxmeow-ft'); ?></a>

	<div id="wrapper">
		<header>
			<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr($navbar_scheme);
																											if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' fixed-top';
																											elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' fixed-bottom';
																											endif;
																											if (is_home() || is_front_page()) : echo ' home';
																											endif; ?>">
				<div class="container">
					<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
						<?php
						$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

						if (!empty($header_logo)) :
						?>
							<img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
						<?php
						else :
							echo esc_attr(get_bloginfo('name', 'display'));
						endif;
						?>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'boxmeow-ft'); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navbar" class="collapse navbar-collapse">
						<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu_class'     => 'navbar-nav me-auto',
								'container'      => '',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
								'theme_location' => 'main-menu',
							)
						);

						if ('1' === $search_enabled) :
						?>
							<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e('Search', 'boxmeow-ft'); ?>" title="<?php esc_attr_e('Search', 'boxmeow-ft'); ?>" />
									<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e('Search', 'boxmeow-ft'); ?></button>
								</div>
							</form>
						<?php
						endif;
						?>
					</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
	</nav><!-- /#header -->
	</header>

	<main id="main" class="container" <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' style="padding-top: 100px;"';
																		elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' style="padding-bottom: 100px;"';
																		endif; ?>>
		<?php
		// If Single or Archive (Category, Tag, Author or a Date based page).
		if (is_single() || is_archive()) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
				<?php
			endif;
				?>
				-->