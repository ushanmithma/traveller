<?php

session_start();

// Changing Theme using date txt
/*
$day_txt = date('l');
$today_theme = '';

switch ($day_txt) {
	case 'Monday':
		$today_theme .= 'background: linear-gradient(45deg, #3f2b96, #a8c0ff);';
		break;
	case 'Tuesday':
		$today_theme .= 'background: linear-gradient(45deg, #F27121, #E94057, #8A2387);';
		break;
	case 'Wednesday':
		$today_theme .= 'background: linear-gradient(45deg, #F37335, #FDC830);';
		break;
	case 'Thursday':
		$today_theme .= 'background: linear-gradient(45deg, #FF0080, #FF8C00, #40E0D0);';
		break;
	case 'Friday':
		$today_theme .= 'background: linear-gradient(45deg, #96c93d, #00b09b);';
		break;
	case 'Saturday':
		$today_theme .= 'background: linear-gradient(45deg, #db36a4, #f7ff00);';
		break;
	case 'Sunday':
		$today_theme .= 'background: linear-gradient(45deg, #4BC0C8, #C779D0, #FEAC5E);';
		break;
	default:
		$today_theme .= 'background: linear-gradient(45deg, #4BC0C8, #C779D0, #FEAC5E);';
		break;
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/home.css">
  <title>Home - Infinity Traveler</title>
</head>
<style>
/*.wrapper, footer, .side-bar {
	<?php echo $today_theme; ?>
}*/
</style>
<body>
<?php

	if (isset($_SESSION['id'])) {

		$signout_btn = '<form action="inc/signout.php" method="post"><button type="submit" name="signout_submit">Sign Out</button></form>';

	}

?>
	<header>
		<nav>
			<div class="wrapper">
				<div class="logo">
					<a href="index.php"><img src="img/logo.png" alt="logo"></a>
				</div>
				<ul>
					<li><a href="#" class="current"><img src="img/home.png" alt="home-icon"><span class="nav-name">Home</span></a></li>
					<li><a href="#"><img src="img/destination.png" alt="destination-icon"><span class="nav-name">Destination</span></a></li>
					<li><a href="#"><img src="img/surfing.png" alt="hiking-icon"><span class="nav-name">Activities</span></a></li>
					<li><a href="#"><img src="img/events.png" alt="events-icon"><span class="nav-name">Events</span></a></li>
					<li><a href="#"><img src="img/gallery.png" alt="gallery-icon"><span class="nav-name">Gallery</span></a></li>
					<li><a href="#"><img src="img/blog.png" alt="blog-icon"><span class="nav-name">Blog</span></a></li>
				</ul>
				<div class="button-panel">
					<?php if (isset($signout_btn)) { echo $signout_btn; } else { echo '<a href="sign-in.php">Sign In</a><a href="sign-up.php">Sign Up</a>'; } ?>
					<a href="#" class="profile-pic"><img src="img/account_pic.png" title="<?php if (isset($_SESSION['first_name'])) { echo $_SESSION['first_name']; } ?>" alt="Greatest Lord"></a>
				</div>
			</div>
		</nav>
	</header>
	<div class="side-bar">
		<ul>
			<li><a href="#" class="current"><img src="img/home.png" alt="home-icon"><span class="nav-name">Home</span></a></li>
			<li><a href="#"><img src="img/destination.png" alt="destination-icon"><span class="nav-name">Destination</span></a></li>
			<li><a href="#"><img src="img/surfing.png" alt="hiking-icon"><span class="nav-name">Activities</span></a></li>
			<li><a href="#"><img src="img/events.png" alt="events-icon"><span class="nav-name">Events</span></a></li>
			<li><a href="#"><img src="img/gallery.png" alt="gallery-icon"><span class="nav-name">Gallery</span></a></li>
			<li><a href="#"><img src="img/blog.png" alt="blog-icon"><span class="nav-name">Blog</span></a></li>
		</ul>
	</div>
	<div class="main">
		<div class="welcome">
			<h1>FIND OUT</h1>
			<h2>WHERE YOU WOULD LIKE TO GO</h2>
			<p>Find out the places that you hope to visit around the Sri Lanka. We can assure that you can get idea and plan your journey after refer our site and you can also participate the special events in country.</p>
			<a href="#">Read more »</a>
		</div>
	</div>
	<div class="services">
		<h1>Services</h1>
		<p>A number of people have chosen us as their number one travel destination management company and you will also choose us for the following reasons.</p>
		<div class="ser-list">
			<ul>
				<li>We provide the best places that you should visit.</li>
				<li>Client's review about the places that was visited and share their experiences.</li>
				<li>We are always update our events list that held in country side.</li>
				<li>We are always inform you news about the places.</li>
				<li>We have specials purpose travellers services just like photography.</li>
				<li>You can find out differences types of activities like photography, surfing etc.</li>
				<li>Hotel recommendations with web links to hotel and booking sites.</li>
				<li>Guides to arts and culture, including museums, theaters, and other attractions.</li>
				<li>A brief summary of the area, with highlights of important places.</li>
				<li>We offer 24/7 customer support to our clients.</li>
			</ul>
		</div>
	</div>
	<div class="about-us">
		<div class="about-us-content">
			<h1>About Us</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<a href="#">Read more »</a>
		</div>
	</div>
	<div class="client-reviews">
		<h1>Client Reviews</h1>
		<div class="reviews-content">
			<div class="review">
				<img src="img/Lionheart.png" alt="Lionheart">
				<div class="review-data">
					<h2>Lionheart</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Saladin.png" alt="Saladin">
				<div class="review-data">
					<h2>Saladin</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Snake.png" alt="Snake">
				<div class="review-data">
					<h2>Snake</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Frederick.png" alt="Frederick">
				<div class="review-data">
					<h2>Frederick</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Wolf.png" alt="Wolf">
				<div class="review-data">
					<h2>Wolf</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Emir.png" alt="Emir">
				<div class="review-data">
					<h2>Emir</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Wazir.png" alt="Wazir">
				<div class="review-data">
					<h2>Wazir</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
			<div class="review">
				<img src="img/Nizar.png" alt="Nizar">
				<div class="review-data">
					<h2>Nizar</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<span>August 12 2019</span>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter">
		<form action="sendnews.php" method="post">
			<input type="email" name="subscribe" placeholder="Enter your email address">
			<button type="submit">Subscribe</button><br>
			<span><input type="checkbox" name="agreetik"> I agree with the Privacy Policy & Terms & Conditions.</span>
		</form>
	</div>
	<?php include_once 'footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("header nav ul li a").click(function(){
			$("a").removeClass("current");
			$(this).addClass("current");
		});
		$(".side-bar ul li a").click(function(){
			$("a").removeClass("current");
			$(this).addClass("current");
		});
	});
</script>
</html>