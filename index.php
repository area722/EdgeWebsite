<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="Images/favicon.ico">
	<title>Nest Protect</title>
	<link rel="stylesheet" type="text/css" href="Css/screen.css">
	<script type="text/javascript" src="Script/jquery-1.10.2.min.js"></script>
	<!-- jquery plugins -->
	<script type="text/javascript" src="Script/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="Script/script.js"></script>
</head>

<body>
	<header>
			<div id="logo">
				<h1>Nest</h1>
			</div>
			<nav>
				<ul>
					<li><a href="#p1">Life With Nest Protect</a></li>
					<li><a href="#p2">Always Connected</a></li>
					<li><a href="#p3">Installation</a></li>
					<li><a href="#p4">Contact</a></li>
				</ul>
			</nav>
	</header>
	<div class="fullpage" id="p1">
		<div class="contentFullPage">
			<?php
				include_once("Pages/Page1.php");
			?>
		</div>
		<a href="#p2" id="toP2"><div class="nextButton"></div></a>
	</div>
	<div class="fullpage" id="p2">
		<a href="#p1" id="toP2"><div class="prevButton"></div></a>
		<div class="contentFullPage">
			<?php
				include_once("Pages/Page2.php");
			?>
		</div>
		<a href="#p3" class="hidden" id="toP2"><div class="nextButton"></div></a>
	</div>
	<div class="fullpage" id="p3">
		<a href="#p2" id="toP2"><div class="prevButton"></div></a>
		<div class="contentFullPage">
			<?php
				include_once("Pages/Page3.php");
			?>
		</div>
		<a href="#p4" class="hidden" id="toP2"><div class="nextButton"></div></a>
	</div>
	<div class="fullpage" id="p4">
		<a href="#p3" class="hidden" id="toP2"><div class="prevButton"></div></a>
		<div class="contentFullPage">
			<?php
				include_once("Pages/Page4.php");
			?>s
		</div>
	</div>
</body>
</html>