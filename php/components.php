<?php
$pageHead = '<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="./css/features.css">
<link rel="stylesheet" href="./css/sidebar.css">
<link rel="stylesheet" href="./css/quickRead.css">
<!-- Box icons -->
<link rel="stylesheet" href="./resources/box_icons/css/animations.css">
<link rel="stylesheet" href="./resources/box_icons/css/boxicons.css">
<link rel="stylesheet" href="resources/box_icons/css/boxicons.min.css">
<link rel="stylesheet" href="resources/box_icons/css/transformations.css">
<link rel="stylesheet" href="">
<title>ALX Nerd</title>';

$pageNavBar = '	<header class="header" id="header">
<nav class="navbar container">
	<a href="./pages/template.html">
		<h2 class="logo">ALX.Nerd</h2>
	</a>
	<div class="menu" id="menu">
		<ul class="list">
			<li class="list-item">
				<a href="" class="list-link current">Home</a>
			</li>
			<li class="list-item">
				<a href="" class="list-link">Categories</a>
			</li>
			<li class="list-item">
				<a href="" class="list-link">Reviews</a>
			</li>
			<li class="list-item">
				<a href="" class="list-link">News</a>
			</li>
			<li class="list-item screen-large-hidden">
				<a href="" class="list-link">Contact</a>
			</li>
			<li class="list-item screen-large-hidden">
				<a href="" class="list-link">Sign in</a>
			</li>
		</ul>
	</div>
	<div class="list list-right">
		<button class="btn place-items-center" id="theme-toggle-btn">
			<i class="bx bxs-sun sun-icon"></i>
			<i class="bx bxs-moon moon-icon"></i>
		</button>

		<button class="btn place-items-center" id="search-icon">
			<i class="bx bx-search"></i>
		</button>

		<button class="btn place-items-center screen-large-hidden menu-toggle-icon" id="menu-toggle-icon">
			<i class="bx bx-menu open-menu-icon"></i>
			<i class="bx bx-x close-menu-icon"></i>
		</button>

		<a href="" class="list-link screen-small-hidden"><span>Sign in</span></a>
	</div>
</nav>
</header>
<!-- Search -->
<div class="search-form-container container" id="search-form-container">
<div class="search-form-inner-container">
	<form action="" class="form">
		<input type="text" class="form-input" placeholder="what are you looking for?">
		<button class="btn form-btn" type="submit">
			<i class="bx bx-search"></i>
		</button>
	</form>
	<span class="form-note">or click Esc to close</span>
</div>
<button class="btn form-close-btn place-items-center" id="form-close-btn">
	<i class="bx bx-x"></i>
</button>
</div>';

$pageFeaturedContent = '<section class="featured-articles section-header-offset">
<div class="featured-articles-container container d-grid">
	<div class="featured-content d-grid">
		<div class="headline-banner">
			<h3 class="headline fancy-border">
				<span class="place-items-center">Breaking News</span>
			</h3>
			<span class="headline-description">ALX Student Breaks The Internet</span>
		</div>
		<a class="article featured-article featured-article-1" href="./post.html">
			<img src="./img/alx-c.png" alt="Learning C" class="article-image">
			<span class="article-category">Technology</span>
			<div class="article-data-container">
				<div class="article-data">
					<span>Coming Soon</span>
					<span class="article-data-spacer"></span>
					<span>Alx.Nerd Is Under Construction.</span>
				</div>
				<h3 class="title article-title">C Is Not That Hard</h3>
			</div>
		</a>
		<a class="article featured-article featured-article-1" href="./post.html">
			<img src="./img/alx-c.png" alt="Learning C" class="article-image">
			<span class="article-category">Technology</span>
			<div class="article-data-container">
				<div class="article-data">
					<span>Coming Soon</span>
					<span class="article-data-spacer"></span>
					<span>Alx.Nerd Is Under Construction.</span>
				</div>
				<h3 class="title article-title">C Is Not That Hard</h3>
			</div>
		</a>
		<a class="article featured-article featured-article-1" href="./post.html">
			<img src="./img/alx-c.png" alt="Learning C" class="article-image">
			<span class="article-category">Technology</span>
			<div class="article-data-container">
				<div class="article-data">
					<span>Coming Soon</span>
					<span class="article-data-spacer"></span>
					<span>Alx.Nerd Is Under Construction.</span>
				</div>
				<h3 class="title article-title">C Is Not That Hard</h3>
			</div>
		</a>
	</div>
</div>
</section>';
$headerJs = '<script src="../js/header.js" defer></script>';

