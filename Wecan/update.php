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
	<title>update</title>
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
        <?php             
            if(isset($_SESSION['user_name'])){
                 echo '<a  class="active" href="../login_system/user_page.php">'.$username.'</a>';
            } else if (isset($_SESSION['admin_name'])){
                  echo '<a class="active" href="../login_system/admin_page.php">'.$username.'</a>';
            }
            else{
                 echo '<a href="../login_system/login_form.php">'.$username.'</a>';
               }
            ?>				</li>
			</ul>
			
		</div>
	</nav>
<!--===================================================-->
<section class="form-container" id="top-update">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Update Profile</h3>
      <p>update full name</p>
      <input type="text" name="name" placeholder="full name" maxlength="50" class="box">
      <p>update email</p>
      <input type="email" name="email" placeholder="name.contact@gmail.com" maxlength="50" class="box">
      <p>previous password</p>
      <input type="password" name="old_pass" placeholder="enter your old password" maxlength="20" class="box">
      <p>new password</p>
      <input type="password" name="new_pass" placeholder="enter your old password" maxlength="20" class="box">
      <p>confirm password</p>
      <input type="password" name="c_pass" placeholder="confirm your new password" maxlength="20" class="box">
      <p>update picture</p>
      <input type="file" accept="image/*" class="box">
      <input type="submit" value="update profile" name="submit" class="btn">
   </form>

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
   
<a href="#top-update">
  <button class="button">
   <svg class="svgIcon" viewBox="0 0 384 512">
     <path
       d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0
        17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
     ></path>
   </svg>
 </button>
</a>




</body>
</html>