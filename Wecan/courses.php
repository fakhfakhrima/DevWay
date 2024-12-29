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
	<title>courses</title>
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <!-- css xdev-->
	<link rel="stylesheet" href="../style.css">
   <!-- css wecan -->
  <link rel="stylesheet" href="css/style.css">
  <!-- css gallery -->
  <link rel="stylesheet" href="../gallery_home/gallery.css">
  
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
            ?>
            				</li>
			</ul>
			
		</div>
	</nav>
<!--=================================================================-->
<section class="courses" id="top-courses" style="font-size: 62.5%;"> 

   <center>
      <div style="background-color: rgb(255, 255, 255); width: fit-content; border-radius: 20px; height: 50px; width: 180px; padding: 5px 5px; border: 1px solid rgb(205, 203, 203);">
         <h1 class="heading" style="text-align: center; color: rgb(76, 75, 75); font: 700; font-size: 25px;">Our Courses</h1>
      </div> 
   </center><br>

   <div class="box-container">

 <!--html-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>12-04-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>

        

         <h3 class="title">Complete HTML Tutorial</h3>
         <a href="playlist.php" class="inline-btn">View Playlist</a>
      </div>

<!--css-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-1-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete CSS Tutorial</h3>
         <a href="playlistcss.php" class="inline-btn">View Playlist</a>
      </div>

<!--js-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-2-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete JS Tutorial</h3>
         <a href="playlistjs.php" class="inline-btn">View Playlist</a>
      </div>

<!--Boostrap-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-3-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete Boostrap Tutorial</h3>
         <a href="playlistboot.php" class="inline-btn">View Playlist</a>
      </div>

<!--JQuery-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-4-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete JQuery Tutorial</h3>
         <a href="playlistjquery.php" class="inline-btn">View Playlist</a>
      </div>

<!--SASS-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-5-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete SASS Tutorial</h3>
         <a href="playlistsass.php" class="inline-btn">View Playlist</a>
      </div>

<!--PHP-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-6-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-7.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete PHP Tutorial</h3>
         <a href="playlistphp.php" class="inline-btn">View Playlist</a>
      </div>

<!--MySQL-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-9.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-7-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-8.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Complete MySQL Tutorial</h3>
         <a href="playlistsql.php" class="inline-btn">View Playlist</a>
      </div>

<!--React-->

      <div class="box">
         <div class="tutor">
            <img src="images/pic-1.jpg" alt="">
            <div class="info">
               <h3>The Admin</h3>
               <span>21-9-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-9.png" alt="">
            <span>10 videos</span>
         </div>         
         <h3 class="title">Complete React Tutorial</h3>
         <a href="playlistreact.php" class="inline-btn">View Playlist</a>
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
   
<a href="#top-courses">
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