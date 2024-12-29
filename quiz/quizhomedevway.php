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
	<title>quiz</title>
    <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">
    <!-- css xdev-->
	<link rel="stylesheet" href="../style.css">
    <!-- css wecan -->
    <link rel="stylesheet" href="css/style.css">
    <!-- css gallery 
    <link rel="stylesheet" href="../gallery_home/gallery.css">
     -->
</head>

<style>

    .box-container {
        width: 300px;
        background-color: #f2f2f2;
        padding: 20px;
        margin: 20px auto;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        display: inline-block;
        transition:transform 0.3s;
       
    }
    .box-container:hover {
        transform: scale(1.05);
        background-color: rgb(117, 165, 255);
    }
    
    
    .box-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
        
    }
    
    .box-image {
        width: 90%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 10px;
        
    }
    
    .box-text {
        font-size: 18px;
        line-height: 1.5;
        text-align: justify;
    }
    
    .box-container:nth-child(n+2) {
        margin-left: 20px;
    }
    
    /*title our quiizes*/
    
    .title {
        font-size: 48px;
        font-weight: bold;
        text-align: center;
        color: rgb(5, 5, 22);
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
        animation: title-animation 3s infinite;
       border-style: inset;
       padding: 20px;

        
    }
    
    @keyframes title-animation {
        0% {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
        }
        50% {
            text-shadow: 4px 4px 8px rgba(0,0,0,0.5), 0px 0px 20px rgba(255,255,255,0.5);
        }
        100% {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
        }
    }
    /*...................*/
    
    
    
    
    .box-link {
        display: block;
        text-decoration: none;
        color: black;
    }
    
    
    
    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 30vh; /* This will center the button vertically */
      }
      
      .button-link {
        background-color: #008CBA;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
      }

      .center{
        
        align-items: center;
        justify-content: center;
        
      }
     
    </style>
<body>
        <nav>
            <div class="container">
                <img src="../Wecan/images/logo.png" alt="logo" width="60px">
                <a href="../index.php" class="brand" style="text-transform: capitalize;">DevWay</a>
    
                <ul class="nav-menu">
    
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
    
                    <li>
                        <a  href="../Wecan/courses.php">Courses</a>
                    </li>
    
                    <li>
                        <a class="active" href="quizhomedevway.php">Quiz</a>
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
            ?>                    </li>
                </ul>
                
            </div>
        </nav>
<!--=================================================================-->

<h1 class="title" >Our Quiz</h1>

<center>
    <div class="box-container">
    <h2 class="box-title">Quiz HTML</h2>
    <a href="quizhtml.php" target="_blank" class="box-link">
        <img src="../image_quiz/html.png" alt="Image 1" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities IN HTML5</p>
</div>


<div class="box-container">
    <h2 class="box-title">Quiz CSS</h2>
    <a href="quizcss.php" target="_blank" class="box-link">
        <img src="../image_quiz/css.png" alt="Image 2" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In CSS</p>
</div>

<div class="box-container">
    <h2 class="box-title">Quiz JS</h2>
    <a href="quizjavascript.php" target="_blank" class="box-link">
        <img src="../image_quiz/js.png" alt="Image 3" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In JS</p>
</div>


<div class="box-container">
    <h2 class="box-title">Quiz Bootstrap</h2>
    <a href="quizbootsrap.php" target="_blank" class="box-link">
        <img src="../image_quiz/boot.png" alt="Image 4" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In Bootstrap</p>
</div>

<div class="box-container">
    <h2 class="box-title">Quiz JQuery</h2>
    <a href="quizjquery.php" target="_blank" class="box-link">
        <img src="../image_quiz/jquery.png" alt="Image 5" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In JQuery</p>
</div>


<div class="box-container">
    <h2 class="box-title">Quiz Sass</h2>
    <a href="quizsass.php" target="_blank" class="box-link">
        <img src="../image_quiz/sasss.png" alt="Image 6" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In Sass</p>
</div>

<div class="box-container">
    <h2 class="box-title">Quiz PHP</h2>
    <a href="quizphp.php" target="_blank" class="box-link">
        <img src="../image_quiz/PHP.jpeg" alt="Image 7" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In PHP</p>

</div>

</div>

<div class="box-container">
    <h2 class="box-title">Quiz My SQL</h2>
    <a href="quizsql.php" target="_blank" class="box-link">
        <img src="../image_quiz/sqll.png" alt="Image 8" class="box-image">
    </a>
    <p class="box-text">Test Your Abilities In My SQL</p>
</div>
<!-- en va avoir!!!!!!!!!!-->
<div class="box-container">
    <h2 class="box-title">Quiz React</h2>
    <a href="quizreact.php" target="_blank" class="box-link">
    <img src="../image_quiz/react.png" alt="Image 9" class="box-image">
    </a>
    <p class="box-text"> Test Your Abilities In React</p>
</div>

   <!----bouton back -->
   <div class="button-container">
    <a href="flexbox.php" class="button-link">Back</a>
  </div>

</center>

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
   
   <a href="#top-courses"><button class="button">
      <svg class="svgIcon" viewBox="0 0 384 512">
     <path
       d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0
        17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
      ></path>
   </svg>
   </button></a>




</body>
</html>