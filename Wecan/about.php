<?php

@include '../login_system/config.php';

session_start();

if (isset($_SESSION['user_name'])) {
   $username = $_SESSION['user_name'];
} else if (isset($_SESSION['admin_name'])) {
   $username = $_SESSION['admin_name'];
} else {
   $username = 'Connect';
}

/**/
//<a href="login_system/admin_page.php"> <?php echo $_SESSION['admin_name']? > </a>
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <title>about</title>
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <!-- css xdev-->
   <link rel="stylesheet" href="../style.css">
   <!-- css wecan -->
   <link rel="stylesheet" href="css/style.css">
   <!-- css gallery -->
   <link rel="stylesheet" href="gallery_home/gallery.css">

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
               <a class="active" href="../Wecan/about.php">About Us</a>
            </li>

            <li>
               <a href="../Wecan/contact.php">Contact</a>
            </li>

            <li>
               <?php
               if (isset($_SESSION['user_name'])) {
                  echo '<a href="../login_system/user_page.php">' . $username . '</a>';
               } else if (isset($_SESSION['admin_name'])) {
                  echo '<a href="../login_system/admin_page.php">' . $username . '</a>';
               } else {
                  echo '<a href="../login_system/login_form.php">' . $username . '</a>';
               }
               ?>

            </li>
         </ul>

      </div>
   </nav>
   <!--≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠-->
   <section class="about" id="top-about">

      <div class="row">

         <div class="image" style="height: 500px; width: 60px;">
            <img src="images/about_us.jpg" width="200px" alt="" loading="lazy">
         </div>

         <div class="content" style="height: 400px; border-radius: 20px; border: 1px solid gray; box-shadow: 2px 5px 10px 5px grey;;">
            <h3>Why Choose us?</h3>
            <p>Our goal is to create an environment that nurtures learning, provides opportunities for practice, and enables you to turn your dreams into reality.</p>
            <a href="courses.php" class="inline-btn">Our Courses</a><br><br>
         </div>
      </div>

      <div class="box-container">

         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
               <h3>+10k</h3>
               <p>Online Courses</p>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
               <h3>+40k</h3>
               <p>Brilliant Students</p>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
               <h3>100%</h3>
               <p>Job Placement</p>
            </div>
         </div>

      </div>

   </section>

   <section class="reviews">
      <!-- feedback our student-->
      <h1 class="heading" style="text-align: center; font-size: 25px; color: rgb(58, 57, 57);">Here is what our Students say about DevWay</h1><br>

      <div class="box-container">

         <div class="box">
            <p>"It's scary to change careers. I only gained confidence that I could code by working through the hundreds of hours of free lessons on freeCodeCamp. Within a year I had a six-figure job as a Software Engineer. <strong>DevWay</strong> changed my life."</p>
            <div class="student">
               <img src="images/pic-4.jpg" alt="">
               <div>
                  <h3>Aziz Khemiri</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"<strong>DevWay</strong> was the gateway to my career as a software developer. The well-structured curriculum took my coding knowledge from a total beginner level to a very confident level. It was everything I needed to land my first dev job at an amazing company."</p>
            <div class="student">
               <img src="images/pic-3.jpg" alt="">
               <div>
                  <h3>Mohamed Aziz Slama</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"I've always struggled with learning JavaScript. I've taken many courses but <strong>DevWay's</strong> 
            course was the one which stuck. 
            gave me the skills and confidence I needed to land my dream job as a software engineer at Spotify."</p>
            <div class="student">
               <img src="images/pic-2.jpg" alt="">
               <div>
                  <h3>Rima Fakhefakh</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"The experience at <strong>DevWay</strong> is unique, we learn revolutionary techniques and methods. The program is enriching, very beneficial and the chapters are clear and precise."</p>
            <div class="student">
               <img src="images/pic-5.jpg" alt="">
               <div>
                  <h3>Yasmine Ben Mohamed</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"I obtained numerous freelance contracts after my training. I am able to lead projects with new technologies thanks to my ability to be an autonomous learner, acquired at <strong>DevWay</strong>."</p>
            <div class="student">
               <img src="images/pic-6.jpg" alt="">
               <div>
                  <h3>Ahemd Abidi</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>"The training allowed me to strengthen my digital marketing skills and boost my project.
                The instructor is very motivating and we developed a friendship while maintaining a relationship ."</p>
            <div class="student">
               <img src="images/pic-7.jpg" alt="">
               <div>
                  <h3>Zaineb Hamdi</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </section>

   <!--Footer-->

   <footer class="footer">
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

   <a href="#top-about">
      <button class="button">
         <svg class="svgIcon" viewBox="0 0 384 512">
            <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0
        17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
            </path>
         </svg>
      </button>
   </a>


</body>

</html>