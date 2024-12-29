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


/*<a href="login_system/admin_page.php"> <?php echo $_SESSION['admin_name']? > </a>
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <title>contact</title>
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
               <a href="../Wecan/about.php">About Us</a>
            </li>

            <li>
               <a class="active" href="../Wecan/contact.php">Contact</a>
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
   <!--=====================================================================================================-->
   <section class="contact" id="top-contact">

      <div class="row">

         <div class="image" style="margin-bottom: 360px;">
            <img src="images/ctc.jpg" width="500px" height="595px" alt="" loading="lazy">
         </div>

         <form action="" method="post">
            <h3>Get In Touch</h3>
            <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
            <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
            <input type="tel" placeholder="enter your number" name="number" required maxlength="50" class="box">
            <textarea name="msg" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="inline-btn" name="submit">
         </form>

      </div>

      <div class="box-container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone Number</h3>
            <a href="tel:1234567890">(+216) 25 289 716</a>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email Address</h3>
            <a href="mailto:shaikhanas@gmail.com">devway.contact@gmail.com</a>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Office Address</h3>
            <a href="#">Ariana, El Ghazala-2083</a>
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

   <a href="#top-contact"><button class="button">
         <svg class="svgIcon" viewBox="0 0 384 512">
            <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0
        17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
            </path>
         </svg>
      </button>
   </a>


</body>

</html>