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

/*<a href="login_system/user_page.php"> <?php 
          
echo $username
?>*/
//<a href="login_system/admin_page.php"> <?php echo $_SESSION['admin_name'] ? > </a>
?>



<!DOCTYPE html>
<html>
<head>
	<title>IT Profession Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-UZXt06oJzXyuRz/uPXhIeVwQR8JxV7Jda7fyh/qArJGf/X/am93m+ZjW/cGCMQwmQ" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" type="text/css" href="intro.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">

</head>
<body>
<!--nav-->

<nav>
    <div class="container">
      <img src="../Wecan/images/logo.png" alt="logo" width="60px">
      <a href="../index.php" class="brand" style="text-transform: capitalize;">DevWay</a>
      <ul class="nav-menu">

        <li>
          <a  href="../index.php">Home</a>
        </li>

        <li>
          <a href="../Wecan/courses.php">Courses</a>
        </li>
        <li>
          <a class="active" href="intro.php">Quiz</a>
        </li>

        <li>
          <a href="../Wecan/about.php">About Us</a>
        </li>

        <li>
          <a href="../Wecan/contact.php">Contact</a>
        </li>


        <!--<li>
            <a href="login_system/login_form.php">Connect</a>-->
        <li>

          <?php
          if (isset($_SESSION['user_name'])) {
            echo '<a href="login_system/user_page.php">' . $username . '</a>';
          } else if (isset($_SESSION['admin_name'])) {
            echo '<a href="login_system/admin_page.php">' . $username . '</a>';
          } else {
            echo '<a href="login_system/login_form.php">' . $username . '</a>';
          }
          ?>

        </li>

      </ul>
    </div>
  </nav>


<!--nav-->
	<div class="container">
		<h1>Which IT Profession Might Be the Best Fit for You?</h1>
		<p>Ready for a career shift to IT but don't know where to start?<br>
             Wonder which profession in tech suits your skills and interests the best? <br>
            Want to succeed in IT by leveraging your background and natural talents?<br>

           <b> Take this 15-minute</b> tech career quiz to discover your strengths and abilities to maximize your potential.</p>
       
            <div class="title-container">
                <h2>IT Career Quiz Advantages</h2>
                <div class="box-container">
                    <div class="box1">
                    <div class="box">
                        <i class="fas fa-user"></i>
                        <img src="image1.jpg" alt="image" class="box-image" height="185px">
                  
                        <p>Quick and easy to complete </p>
                       
                    </div>
                    <div class="box">
                        <i class="fas fa-lightbulb"></i>
                        <img src="motivation.jpg" alt="image" class="box-image" height="185px">
                        <p> Motivations and encouragment</p>
                    </div>
                    <div class="box">
                        <i class="fas fa-clock"></i>
                        <img src="it.jpg" alt="image" class="box-image" height="185px" >
                  
                        <p>Learn about different IT careers 
                        </p>
                    </div>
                </div>
                <div class="box2">
                    <div class="box">
                        <i class="fas fa-cogs"></i>
                        <img src="ii.jpeg" alt="image" class="box-image" height="185px">
                        <p>Accessible on any device</p>
                        
                    </div>
                    <div class="box">
                        <i class="fas fa-mobile-alt"></i>
                        <img src="skill.jpg" alt="image" class="box-image" height="185px">
                        <p>Discover  your skills</p>
                    </div>
                    <div class="box">
                        <i class="fas fa-headset"></i>
                        <img src="conf.png" alt="image" class="box-image" height="185px">
                        <p>Self Confidence</p>
                    </div>
                </div>
                </div>
                <a href="../quiz/flexbox.php" class="button">Take the Quiz</a>


            </div>

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
    


        
    
		
</div>

</body>
</html>