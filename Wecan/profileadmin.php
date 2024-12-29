<?php

@include '../login_system/config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

//<a href="login_system/admin_page.php"> <?php echo $_SESSION['admin_name']? > </a>
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<title>profile admin</title>
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <!--  css xdev -->
	<link rel="stylesheet" href="../style.css">
   <!-- css wecan -->
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

<nav>
		<div class="container">
			<img src="images/logo.png" alt="logo" width="60px">
         <a href="../index.php" class="brand" style="text-transform: capitalize;">DevWay</a>
			<ul class="nav-menu">

				<li>
					<a href="../index.php">Home</a>
				</li>

				<li>
					<a href="../Wecan/courses.php">Courses</a>
				</li>
            <li>
               <a href="../quiz/welcome.php">Quiz</a>
             </li>

				<li>
					<a href="../Wecan/about.php">About Us</a>
				</li>

				<li>
					<a href="../Wecan/contact.php">Contact</a>
				</li>

            <li>
               <a class="active" href="../login_system/admin_page.php"> <?php echo $_SESSION['admin_name']?> </a>
				</li>
			</ul>
			
		</div>
	</nav>
<!--===================================================================-->
<section class="user-profile">


   <div class="info">

      <div class="user">
         <img src="images/pic-1.jpg" alt="">
         <!--<h3>Aziz Khemiri</h3>-->
         <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>Admin</p>
         <a href="update.php" class="inline-btn">Update Profile</a>
      </div>
   
      <div class="box-container">
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-bookmark"></i>
               <div>
                  <span>4</span>
                  <p>Saved Playlist</p>
               </div>
            </div>
            <a href="#" class="inline-btn">View Playlists</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-heart"></i>
               <div>
                  <span>33</span>
                  <p>Videos Liked</p>
               </div>
            </div>
            <a href="#" class="inline-btn">View Liked</a>
         </div>
   
         <div class="box">
            <div class="flex">
               <i class="fas fa-comment"></i>
               <div>
                  <span>12</span>
                  <p>Videos Comments</p>
               </div>
            </div>
            <a href="#" class="inline-btn">View Comments</a>
         </div>
   
      </div>
   </div>

</section>


<!--Footer-->

<footer class="footer" >
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About Us</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Courses</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p style="font-size: 15px;"> <strong> &copy; Copyright</strong>. All Rights Reserved</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



   
</body>
</html>