<?php

@include '../login_system/config.php';

session_start();

if(isset($_SESSION['user_name'])){
  $username = $_SESSION['user_name'];
} else if (isset($_SESSION['admin_name'])){
  $username = $_SESSION['admin_name'];
}
else{
  $username = 'Connect';
}

//<a href="login_system/admin_page.php"> <?php echo $_SESSION['admin_name']? > </a>
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<title>playlist</title>
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <!--  css xdev -->
	<link rel="stylesheet" href="../style.css">
   <!-- cs  wecan-->
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
					<a class="active" href="../Wecan/courses.php">Courses</a>
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
            <?php             
            if(isset($_SESSION['user_name'])){
                 echo '<a href="../login_system/user_page.php">'.$username.'</a>';
            } else if (isset($_SESSION['admin_name'])){
                  echo '<a href="../login_system/admin_page.php">'.$username.'</a>';
            }
            else{
                 echo '<a href="../login_system/login_form.php">'.$username.'</a>';
               }
            ?>				</li>
			</ul>
			
		</div>
	</nav>
<!--=======================================================================================-->
<section class="playlist-details" id="top-playlist">


   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>Save Playlist</span></button>
         </form>
   
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
      </div>
      <div class="column">
            <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>The Admin</h3>
               <span>21-3-2024</span>
            </div>
         </div>
   
         <div class="details">
            <h3>Complete  Bootstrap Tutorial</h3>
            <p>Bootstrap is a popular open-source CSS and JavaScript framework that simplifies web development by providing pre-designed and customizable UI components. It enables developers to create responsive, mobile-first websites with ease, reducing the need for extensive custom CSS and JavaScript coding.


            </p>
           
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading" style="color: rgb(2, 2, 2); font-weight: bold; font-size: 20px;">Playlist Videos</h1>

   <div class="box-container">
<!-- les video il faut la remplcer-->
      <a class="box" href="video/boot-1.mp4"> 
         <i class="fas fa-play"></i>
         <img src="images/post-4-1.png" alt="">
         <h3>Complete Bootstrap Tutorial (part 01)</h3>
      </a>
    
      <a class="box" href="video/boot-2.mp4">
         <i class="fas fa-play"></i>
         <img src="images/post-4-2.png" alt="">
         <h3>Complete Bootstrap Tutorial (part 02)</h3>
      </a>

      <a class="box" href="video/boot-3.mp4">
         <i class="fas fa-play"></i>
         <img src="images/post-4-3.png" alt="">
         <h3>Complete Bootstrap Tutorial (part 03)</h3>
      </a>

      <a class="box" href="video/boot-4.mp4">
         <i class="fas fa-play"></i>
         <img src="images/post-4-4.png" alt="">
         <h3>Complete Bootstrap Tutorial (part 04)</h3>
      </a>

      <a class="box" href="video/boot-5.mp4">
         <i class="fas fa-play"></i>
         <img src="images/post-4-5.png" alt="">
         <h3>Complete Bootstrap Tutorial (part 05)</h3>
      </a>

      <a class="box" href="video/boot-6.mp4">
         <i class="fas fa-play"></i>
         <img src="images/post-4-6.png" alt="">
         <h3>Complete Bootstrap Tutorial (part 06)</h3>
      </a>

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

<a href="#top-playlist">
   <button class="button">
   <svg class="svgIcon" viewBox="0 0 384 512">
     <path
       d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0
        17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
      </path>
   </svg>
   </button>
</a>

   
</body>
</html>