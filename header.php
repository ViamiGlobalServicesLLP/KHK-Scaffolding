<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/mystyle.css">

	<!-- font awesome4 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
	<nav>
		
		<div id="logo">
			<a href="index.php">
				<img style="padding-top: 7px;width: 99px;height: 79px;" src="assets/img/logo/khk-logo-new.jpg" alt="khk-scaffolding">
			</a>
		</div>
		
		<div class="menu-content"></div>
		<label for="drop" class="toggle"><i class="fa fa-bars  hamburger" aria-hidden="true"></i></label>
		<input type="checkbox" id="drop" />

		<ul class="menu">
			<li class="draw">
				<label for="drop-1" class="toggle">About Us </label>
				<a class="nav-link" href="about.php">About Us</a>
			</li>
			<li class="draw">
				<!-- First Tier Drop Down -->
				<label for="drop-2" class="toggle">Products<span><i class="fa fa-caret-down"
							aria-hidden="true"></i></span></label>
				<a class="nav-link" href="#">Products <span><i class="fa fa-caret-down" aria-hidden="true"></i></span></a>
				<input type="checkbox" id="drop-2" />
				<ul class="dropdwn">
					<li class="submenu"><a href="k-ring-access-scaffold.php">K Ring Access Scaffold</a></li>
					<li class="submenu"><a href="k-lock-access.php">K Lock Access</a></li>
					<li class="submenu"><a href="k-lock-slab-formwork.php">K Lock Slab Formwork</a></li>
					<li class="submenu"><a href="k-stage-slab-formwork.php">K-Stage Slab & Access</a></li>
					<li class="submenu"><a href="frames-tubes-props.php">Frames . Tubes . Props</a></li>
					<li class="submenu"><a href="wall-formwork.php">Wall Formwork</a></li>
					<li class="submenu"><a href="en-props.php">EN Props</a></li>
				</ul>

			</li>

			<li class="draw"><label for="drop-1" class="toggle">Videos </label><a class="nav-link" href="video.php">Videos</a></li>
			<li class="draw"><label for="drop-1" class="toggle">Contact </label><a class="nav-link" href="contact.php">Contact</a></li>
			<li class="draw search"><label for="drop-1" class="toggle"><i class=" searchicon fa fa-search"></i></label><a class="nav-link" href="#"><i class=" searchicon fa fa-search"></i></a>
			</li>
			<li class=" search-box">
				<form class=" searchform" action="search.php" method="POST">
					<label for="search"></label>
					<input id="searchInput" class="search-input" type="text" placeholder="Search..." name="search">
					<input type="submit" class="search-submit" data-search value="Search">
				</form>
			</li>
		</ul>
	</nav>

	<script>

		$(function () {

			$(".search").click(function () {
				$(".search-box").slideToggle("slow");
			});

		});

	</script>
</body>

</html>








