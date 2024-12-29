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
   <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">
   <!-- css dev-->
	<link rel="stylesheet" href="../style.css">
   <!-- css wecan -->
  <link rel="stylesheet" href="css/style.css">
  
</head>
<style>



  .containerb {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      margin-top: 40px; /* Add this line */


    }
  .box {
      width: 20%;
      height: 200px;
      border: 1px solid black;
      position: relative;
      overflow: hidden;
      justify-content: center;
      align-items: center;
      margin-bottom: 30px;
      border-radius: 9px;
      margin-right: 40px; /* Add this line */
      padding-right: 20px; /* Add this line */


      
  }
   .box:hover {
    transform: scale(1.1);
      background-color:whitesmoke;
      color:blue;
      border-color: rgb(186, 220, 248);
    }
   .box:hover.title {
      opacity: 1;
    }
   
   
  
    
    .box-text {
      font-size: 16px;
      line-height: 1.5;
      text-align: justify;
      margin-left: 25px;
  }
  
  
  
  
  .box-title {
      font-size: 16px;
      line-height: 1.5;
      text-align: center;
      font-weight: bold;
      margin-left: 25px;
      
      
  }

  
  
  /*title our quiizes*/
  
  .title {
      font-size: 35px;
      font-weight: bold;
      text-align: center;
      color: rgb(5, 5, 22);
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5), 0px 0px 10px rgba(255,255,255,0.5);
      animation: title-animation 3s infinite;
      border-style:inset;
    margin-bottom: 80px;
    
     
      
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
  
  
  
  .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
       /* This will center the button vertically */
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
  
    /* add this new CSS rule to position the new container */
.new-container {
  margin-left: 10px; 
  
  /* adjust the margin value as needed */
}



.box-image {
         display: block;
         margin: 0 auto;
        height: auto;
        border-radius: 10px;
        justify-content: center;
         align-items: center;
         width:150px;
         height:130px;
}



  </style>
  
  
<body>
<header>

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
          <a class="active" href="itfield.php">Quiz</a>
        </li>
				<li>
					<a href="../Wecan/about.php">About US</a>
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
</header>
<!--=================================================================-->


  <!----3 jdod-->

  <div class="containerb new-container">
    <div class="box">
        <p class="box-title">Web Development </p> <br> 
        <a href="quizdev.html" class="box-link"> 
          <img src="itfield/dev.png" alt="image" class="box-image">
          
        </a>
        
        
    </div>
    <div class="box">
        <p class="box-title">Graphic Designer</p> <br> 
        <a href="quizgraph.html" class="box-link">
        <img src="itfield/des.jpg" alt="image" class="box-image">   
      </a>  
    </div>

    
    
  </div>

  <div class="containerb new-container">
    <div class="box">
      <p class="box-title">Data analyst </p> <br> 
      <a href="quizdata.html" class="box-link">
      <img src="itfield/data.jpg" alt="image" class="box-image">   
      </a>  
    </div>
    
    <div class="box">
      <p class="box-title">Tester ISTQB </p> <br> 
      <a href="quizISTQB.html" class="box-link">
      <img src="itfield/test.jpg" alt="image" class="box-image">   
      </a>  
    </div>
       </div>

  <div class="containerb new-container">
    <div class="box">
      <p class="box-title">IT Project Manager  </p> <br> 
      <a href="quizmanager.html" class="box-link">
      <img src="itfield/chef.jpg" alt="image" class="box-image">      
      </a>  
    </div>
    <div class="box">
      <p class="box-title">Degital Marketing </p> <br> 
      <a href="quizdegital.html" class="box-link">
      <img src="itfield/deg.jpg" alt="image" class="box-image">      
      </a>  
    </div>
    
  </div>


 
    
    <!----bouton back -->
  <div class="button-container">
    <a href="../quiz/flexbox.php" class="button-link">Back</a>
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