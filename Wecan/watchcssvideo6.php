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
	<title>watch</title>
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <!--  css xdev -->
	<link rel="stylesheet" href="../style.css">
   <!-- css wecan -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="video1html.css">
  
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

<!--=====================================================================================-->
<!-- les video -->
<section class="watch-video" id="top-video">

   <div class="video-container">
      <div class="video">
         <video src="video/css-06.mp4" controls poster="images/post-2-6.png" id="video"></video>
      </div>

      <h3 class="title">Complete CSS Tutorial (part 06)</h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>03-04-2024</span></p>
         <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p>
      </div>
      

      <form action="" method="post" class="flex">
         <a href="playlistcss.php" class="inline-btn">View Playlist</a>
         <button><i class="far fa-heart"></i><span>Like</span></button>
      </form>
      <p class="description">
        CSS is a styling language that defines the layout, formatting, and appearance of HTML elements on a webpage. It is used to add visual flair to the structure defined by HTML, enabling the creation of visually appealing and user-friendly websites.
      </p>
   </div>

</section>

<section class="comments">

   <h1 class="heading">5 comments</h1>

   <form action="" class="add-comment">
      <h3>Add Comments</h3>
      <textarea name="comment_box" placeholder="enter your comment" required maxlength="1000" cols="30" rows="10"></textarea>
      <input type="submit" value="add comment" class="inline-btn" name="add_comment">
   </form>

   <h1 class="heading">User Comments</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Yassmine Ben Mohamed</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">This is a comment form Yassmine Ben Mohamed</div>
         <form action="" class="flex-btn">
            <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
         </form>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo 1</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">
            awesome tutorial! keep going!
         </div>

      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>john deo 2</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">amazing way of teaching!
            thank you so much!
         </div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>john deo 3</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">loved it, thanks for the tutorial!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>john deo 4</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">this is what I have been looking for! thank you so much!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo 5</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">thanks for the tutorial!

            how to download source code file?
         </div>
      </div>

   </div>

   

</section>
<div class="button-container">
   <a href="courses.php" class="button-link">Back
   </a>
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

<a href="#top-video">
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