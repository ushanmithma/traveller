<?php

session_start();

if (isset($_SESSION['id'])) {
  header('Location: index.php');
}

if (isset($_GET['error'])) {

  if ($_GET['error'] == 'empty') {

    echo '<div class="alert error"><span class="closebtn">&times;</span><p>Fill in the fields!</p></div>';

  } else if ($_GET['error'] == 'nouser') {

    if (isset($_GET['email'])) {
      $noemail = $_GET['email'];
      echo '<div class="alert error"><span class="closebtn">&times;</span><p>There is not \''.$noemail.'\' email address in registed users!</p></div>';
    }

  } else if ($_GET['error'] == 'password') {

    if (isset($_GET['replaceemail'])) {
      $replaceemail = $_GET['replaceemail'];
    }

    echo '<div class="alert error"><span class="closebtn">&times;</span><p>Password does not match with \''.$replaceemail.'\' email address!</p></div>';

  }

}

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
  <link rel="stylesheet" href="css/style.css">
  <title>Sign In - Infinity Traveler</title>
</head>
<style>
.newClass {
  background-image: url("img/lock-screen.jpg") !important;
}
</style>
<body>

  <header>
    <nav>
      <div class="wrapper">
        <div class="logo">
          <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>
        <ul>
          <li><a href="#" class=""><img src="img/home.png" alt="home-icon"><span class="nav-name">Home</span></a></li>
          <li><a href="#"><img src="img/destination.png" alt="destination-icon"><span class="nav-name">Destination</span></a></li>
          <li><a href="#"><img src="img/surfing.png" alt="hiking-icon"><span class="nav-name">Activities</span></a></li>
          <li><a href="#"><img src="img/events.png" alt="events-icon"><span class="nav-name">Events</span></a></li>
          <li><a href="#"><img src="img/gallery.png" alt="gallery-icon"><span class="nav-name">Gallery</span></a></li>
          <li><a href="#"><img src="img/blog.png" alt="blog-icon"><span class="nav-name">Blog</span></a></li>
        </ul>
        <!--<div class="button-panel">
          <?php if (isset($signout_btn)) { echo $signout_btn; } else { echo '<a href="sign-in.php">Sign In</a><a href="sign-up.php">Sign Up</a>'; } ?>
          <a href="#" class="profile-pic"><img src="img/account_pic.png" title="<?php if (isset($_SESSION['first_name'])) { echo $_SESSION['first_name']; } ?>" alt="Greatest Lord"></a>
        </div>-->
      </div>
    </nav>
  </header>
  <div class="side-bar">
    <ul>
      <li><a href="#" class=""><img src="img/home.png" alt="home-icon"><span class="nav-name">Home</span></a></li>
      <li><a href="#"><img src="img/destination.png" alt="destination-icon"><span class="nav-name">Destination</span></a></li>
      <li><a href="#"><img src="img/surfing.png" alt="hiking-icon"><span class="nav-name">Activities</span></a></li>
      <li><a href="#"><img src="img/events.png" alt="events-icon"><span class="nav-name">Events</span></a></li>
      <li><a href="#"><img src="img/gallery.png" alt="gallery-icon"><span class="nav-name">Gallery</span></a></li>
      <li><a href="#"><img src="img/blog.png" alt="blog-icon"><span class="nav-name">Blog</span></a></li>
    </ul>
  </div>

  <div class="newClass">

    <img src="img/account_pic.png" alt="Greatest Lord">

    <form action="inc/signin.php" method="post">

      <fieldset>

        <legend>SignIn - Traveller</legend>

        <input type="text" name="email" placeholder="E-mail" value="<?php if (isset($replaceemail)) { echo $replaceemail; } ?>">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="signin_submit">SignIn</button>

      </fieldset>

    </form>

    <blockquote>If you don't have account <a href="sign-up.php">SignUp</a> here OR if you have forgotten your password <a href="#">Reset password</a> here.</blockquote>

  </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

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