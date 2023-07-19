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
	<script>
		$(document).ready(function() {
			console.log(123, <?php echo nav_menu_ft(); ?>);
		})
	</script>
</head>

<body>
	<!-- 網頁版header -->
	<header class="header-global-ft">
		<nav id="navbar-main-ft" class="headroom navbar navbar-expand-lg navbar-dark navbar-fixed-ft navbar-backgroud-ft">
			<div class="container container-ft">
				<a class="navbar-brand" href="<?php echo home_url(); ?>" title="boxmeow_ft">
					<?php echo logo_ft(); ?>
				</a>
				<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto">
						<?php echo nav_menu_ft(); ?>
					</ul>
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
			<?php echo nav_menu_ft(); ?>
		</div>
	</div>

	<section class="section-blog-cover section-shaped my-0" style="background-image: url('/wordpress/wp-content/themes/boxmeow-ft/assets/images/7.jpg');">
		<div class="banner-box-ft">
			<div class="banner-title-ft">
				<span>BlogName</span>
			</div>
			<div class="banner-underline-ft"></div>
			<div class="banner-text-ft">
				<span>Blog Text</span>
			</div>
		</div>
		<div class="separator separator-bottom separator-skew">
			<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(30,30,30,0.7)"></use>
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(30,30,30,0.5)"></use>
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(30,30,30,0.3)"></use>
					<use xlink:href="#gentle-wave" x="48" y="7" fill="#000"></use>
				</g>
			</svg>
		</div>
	</section>