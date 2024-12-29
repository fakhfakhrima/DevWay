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
<!--=================================================================-->
<section>

   <h1 class="Title">Understand the difference between HTML and CSS:</h1> <br>

<div class="container">
   <div class="box">
      <p style="  text-align: center;   font-size: 20px;">You know that you are going to learn how to create web pages, in HTML and CSS. </p>
      <p style=" text-align: center;    font-size: 20px;">But first of all, do you know what HTML and CSS are used for respectively? </p>
      <p style=" text-align: center;   font-size: 20px;"> So let's do a quick introduction:</p>
   </div>
</div>


<p style="  font-weight: bold;      text-align: center;    font-size: 20px;">Html and Css are the basis for the functioning of all websites, really all</p>
<p style=" text-align: center;    font-size: 20px;">we are also talking about web language. If we want to be even more precise <br> we are talking about Html as a markup language <b>(langage de balisage)</b> <br></p>

<p style=" text-align: center;    font-size: 20px;" >and css3 as a <b> description language</b>, contrary to what you have already heard, <br> these are not programming languages like :​ python, java, kotlin, ruby, php etc...</p>
<p  style=" text-align: center;    font-size: 20px;">because they only allow you to describe content in a static way. <br> <br> If you simply want to use the term web language, that's fine.<br> no one will blame you, now to come back to what I was saying, it doesn't matter which website <br> you want to visit: Wikipédia,W3schools,linkedIn,comment ça marche etc...</p>

<p style=" text-align: center;    font-size: 20px;">to access it you open the browser and type the keyword corresponding to your search. example: <br>  </p> <br> <br>
<img src="images/search.png" class="center" alt="Wikipedia" height="500px" width="800px" > <br> <br>
<p style=" text-align: center;    font-size: 20px;"> but behind the scenes what happens when a wb site is displayed on the screen of a computer or smartphone <br> When you want to access a site your browser sends what is called a request to the server <br> A request is a kind of message and a server is a computer that contains All information and site content </p>

<p  style=" text-align: center;    font-size: 20px;">It will analyze this request and will return the HTML data of the web page
<br> The browser will interpret this HTML code to display the content in a readable way for the user <br> that's a picture that will summarize everything that happens behind the scenes between the browser and the server: </p>

<img src="images/http0.png" class="center" alt="Wikipedia" height="500px" width="800px" >
    <p style="  text-align: center;   font-size: 20px;"> <b>And to be more precise That is a video that will explain the HTTP protocol:</b></p>
   
    <div class="container">
        <video width="1000" height="500" controls>
            <source src="video/http.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> 
    </div> <br> <br>

     
<p  style=" text-align: center;    font-size: 20px;" > take the example of the Wikipedia page,If I right click display the source code of the page <br> I can see all the lines of codes that were sent to the browser <br> This is a code written in HTML and CSS, don't hesitate to do it with any website like this "DevWay" site. <br> that's the source code of Wikipédia for example:</p>
 <br> <br>
<img src="images/wikipedia.png" class="center" alt="Wikipedia" height="500px" width="800px" > <br> <br>

<p style=" text-align: center;    font-size: 20px;">maybe you'll say to yourself that it seems complicated and that I'll never be able to create something like that <br>I assure you it's much simpler than it seems, now I also see you coming and you will ask me <br> 
        but then why creating two languages, HTML and CSS, just one would have been enough, right? <br> Html and Css are complementary
</p>

<p style=" text-align: center;    font-size: 20px;">Let's focus first on the first language, the role of HTML is to write and structure the content of the page <br> you will have to use it to add text, links, or images to your page</p>
 <br> <br>

<div class="container">
   <div class="box">
      <p style="  text-align: center;   font-size: 20px;">Let's do a little test together and see what this site looks like without CSS just in pure html </p>
      <p style=" text-align: center;    font-size: 20px;">so as you see here the page is displayed in its entirety .We can see the texts, the images,</p>
      <p style=" text-align: center;   font-size: 20px;">  the links but we agree the presentation leaves a little to be desired, it's not beautiful <br>     
         <a href="https://drive.google.com/drive/folders/1pyYXIWuidZhf7HfwVLP1RLNZ840jIfhL?usp=sharing"  target ="_blank" style= "color: blue;"><b>This is a link of Google Drive</b>            <img src="https://drive-thirdparty.googleusercontent.com/16/type/application/vnd.google-apps.document" alt="Google Drive"> </a>
                it contains two versions of this site ,The first is created only with HTML,While in the second we add the CSS.  Only you will notice the difference, and you will say that the second one is great, right?
      </p>
          
    
   </div>
    
</div> 
<br> <br>

</section>
<!--=====================================================================================-->
<!-- les video -->
<section class="watch-video" id="top-video">

   <div class="video-container">
      <div class="video">
         <video src="video/01-html.mp4" controls poster="images/post-1-1.png" id="video"></video>
      </div>

      <h3 class="title">Complete HTML Tutorial (part 01)</h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>03-03-2024</span></p>
         <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p>
      </div>

      <form action="" method="post" class="flex">
         <a href="playlist.php" class="inline-btn">View Playlist</a>
         <button><i class="far fa-heart"></i><span>Like</span></button>
      </form>
      <p class="description">
         HTML5 (HyperText Markup Language 5) is the language used to structure and design webpages. 
         It's the latest major revision of HTML and is considered a core technology for the World Wide Web.  
         HTML5 introduced new features that allow for richer content and more dynamic web applications.
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
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>Aziz Khemiri</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">This is a comment form Aziz Khemiri</div>
         <form action="" class="flex-btn">
            <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
         </form>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Fairouz</h3>
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
               <h3>Salah</h3>
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
               <h3>Haythem</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">loved it, thanks for the tutorial!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Mohamed</h3>
               <span>03-03-2024</span>
            </div>
         </div>
         <div class="comment-box">this is what I have been looking for! thank you so much!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Ilef</h3>
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
   <a href="watch-video2.php" class="button-link">I finished this chapter</a>
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