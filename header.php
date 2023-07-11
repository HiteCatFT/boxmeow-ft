<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link id="theme-style" href="/wordpress/wp-content/themes/boxmeow-ft/assets/dist/style.css" rel="stylesheet" />
	<!-- 引入 headroom -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.min.js"></script>
	<!-- 引入 jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<!-- 引入 Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

	<!-- 引入 自定義script -->
	<script src="/wordpress/wp-content/themes/boxmeow-ft/assets/js/boxmeow.js"></script>
</head>

<body>
	<!-- header -->
	<header class="header-global-ft">
		<nav id="navbar-main-ft" class="headroom navbar navbar-expand-lg navbar-dark navbar-fixed-ft navbar-backgroud-ft">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo home_url(); ?>" title="boxmeow_ft">
					<?php echo logo_ft(); ?>
				</a>
				<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
					<?php echo nav_menu_ft(); ?>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<!-- 手機版 header -->
	<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<?php nav_menu_ft(); ?>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</div>