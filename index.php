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

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>DevWay</title>
  <link rel="icon" type="image/x-icon" href="Wecan/images/logo.png">
  <!-- css dev -->
  <link rel="stylesheet" href="style.css">
  
  <!-- css gallery -->
  <link rel="stylesheet" href="gallery_home/gallery.css">
  <style>
    .titre {
      font-size: 30px;
      font-weight: 700;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    #para {
      /*color: rgb(95, 91, 91); */
      text-align: center;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color: #777;
      font-size: 22px;
      font-weight: 400;
    }
  </style>

</head>

<body>

  <nav>
    <div class="container">
      <img src="Wecan/images/logo.png" alt="logo" width="60px">
      <a href="#" class="brand" style="text-transform: capitalize;">DevWay</a>
      <ul class="nav-menu">

        <li>
          <a class="active" href="index.php">Home</a>
        </li>

        <li>
          <a href="Wecan/courses.php">Courses</a>
        </li>
        <li>
          <a href="quiz/welcome.php">Quiz</a>
        </li>

        <li>
          <a href="Wecan/about.php">About Us</a>
        </li>

        <li>
          <a href="Wecan/contact.php">Contact</a>
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
  <!--============================================-->
  <!-- start: Gallery Section -->
  <header>
    <section class="gallery-section" id="top-home">
      <div class="container">
        <div class="gallery-wrapper">
          <div class="gallery-content">
            <div>
              <h1> The Future Begins Here! </h1>
              <p>DevWay is where lifelong learners come to learn the new skills they need, land the jobs they want and
                build the lives they deserve.</p>
              <br>
              <a href="Wecan/courses.php">
                <button class="btn-get" style="text-align: center;">
                  <span>Get Started</span>
                </button>
              </a>
            </div>
          </div>
          <div class="gallery-images-box">
            <div class="gallery-images-wrapper">
              <div class="gallery-images" style="--duration: 10s;">
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1511376777868-611b54f68947?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?q=80&w=1474&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://plus.unsplash.com/premium_photo-1661331911412-330f2e99cf53?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://plus.unsplash.com/premium_photo-1678566153919-86c4ba4216f1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1587440871875-191322ee64b0?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1587355760421-b9de3226a046?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
              </div>
              <div class="gallery-images" style="--duration: 15s;">
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1576595580361-90a855b84b20?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://plus.unsplash.com/premium_photo-1661593486413-d279b1a02e28?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1518349619113-03114f06ac3a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1586936893354-362ad6ae47ba?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1587089879249-87bf7d2972df?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1505238680356-667803448bb6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
              </div>
              <div class="gallery-images" style="--duration: 20s;">
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1531030874896-fdef6826f2f7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1545670723-196ed0954986?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1670057046254-3b5095eb4b66?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1687603858673-a08a2dc2302c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1687603921109-46401b201195?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1628258334105-2a0b3d6efee1?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1657537272240-4af01beb5c79?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1523800503107-5bc3ba2a6f81?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1519241047957-be31d7379a5d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1498409785966-ab341407de6e?q=80&w=1481&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1461988625982-7e46a099bf4f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
              </div>
              <div class="gallery-images" style="--duration: 10s;">
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1521702813222-1943f3fb9c07?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1516534775068-ba3e7458af70?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1483389127117-b6a2102724ae?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1599949104055-2d04026aee1e?q=80&w=1373&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1520881363902-a0ff4e722963?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://plus.unsplash.com/premium_photo-1677171749355-4ad563d86165?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
              </div>
              <div class="gallery-images" style="--duration: 15s;">
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1580894894513-541e068a3e2b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1580894908361-967195033215?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1549692520-acc6669e2f0c?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1581092582520-3da64a3c0d4c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1581091870619-835cee86e759?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1581094289810-adf5d25690e3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1643513208375-df314b16347a?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE0fHx8ZW58MHx8fHx8" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
              </div>
              <div class="gallery-images" style="--duration: 10s;">
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1504643220124-8317cca212bd?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1498758536662-35b82cd15e29?q=80&w=1288&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1530893609608-32a9af3aa95c?q=80&w=1364&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1603816241776-1997a372648f?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fHw%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1603816241776-1997a372648f?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fHw%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://plus.unsplash.com/premium_photo-1682130130215-98574e89ab71?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1669023414180-4dcf35d943e1?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1669023414162-5bb06bbff0ec?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
                <a href="#"><!---->
                  <img src="https://images.unsplash.com/photo-1667372393053-6e13b226fba6?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <!-- end: Gallery Section -->
  <!--=================project section===========================-->
  <section>
    <div class="content">
      <div class="separator">
        <h2 class="titre">Open Source Projects</h2>
        <p id="para">Our offer includes a free access to the source code of several projects,
          which can help you acquire new challenges and skills.
        </p>
      </div>

      <h2 class="titre" style="text-align: center; margin-bottom: 30px;">Beginner</h2>
      <div class="beginer">
        <div class="card"><!--card 1-->
          <div class="image"><img src="images/p1.jpg" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                QR Code Component
              </span>
            </a>

            <p class="desc">
              A perfect first challenge if you're new to HTML and CSS.
              The card layout doesn't shift, so it's ideal if you haven't learned about building responsive layouts yet
            </p>

            <a class="action" href="https://github.com/BrunoChabaribery/QR-Code-Component_MiniProject?fbclid=IwAR1WCOs2YMpVtDp7fMocngYZCz_mFdqdEe-YiZWi75JSFcA7mB7jsjqQTTU" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>


        <div class="card"><!--card 2-->
          <div class="image"><img src="images/p2.jpg" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Profile card component
              </span>
            </a>

            <p class="desc">
              This is a perfect challenge to test your layout skills.
              The card layout doesn't shift, so it's also great for those that haven't dived into responsive websites yet!
            </p>

            <a class="action" href="https://github.com/JaviVaSu/Profile-card-component-FrontEnd-Mentor?fbclid=IwAR12RpxqDx6TWxHp_p9A0Y0qdXQbOwIJyqpXh8IvEqzjOWDmeAMm3VmYL3w" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>



        <div class="card"><!--card 3-->
          <div class="image"><img src="images/p3.jpg" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Product preview card
              </span>
            </a>

            <p class="desc">
              This HTML & CSS-only challenge will be perfect for anyone starting to build responsive projects.
            </p>

            <a class="action" href="https://github.com/neildeo/frontendmentor-product-preview-card?fbclid=IwAR1VO2Uq6g4Eo3H4B0gnTX5BHo2r7O1BstsdSjRBAelTWjPYCtoex9VeSac" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>

      </div>
      <!--intermediate-->

      <h2 class="titre" style="text-align: center; margin-bottom: 50px;">Intermediate</h2>
      <div class="intermediate">
        <div class="card"><!--card 1-->
          <div class="image"><img src="images/p4.png" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Intro component with sign up form
              </span>
            </a>

            <p class="desc">
              Practice building out a sign-up form complete with client-side validation using JavaScript.
            </p>

            <a class="action" href="https://github.com/faizaan-lakd/Intro-component-with-sign-up-form?fbclid=IwAR0PcB9S5XeiSMJsFQcLdfz3jXJCqYt1t5HSSbbfOjmQI42N_M8Cw7SZFWY" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>


        <div class="card"><!--card 2-->
          <div class="image"><img src="images/p5.png" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Calculator Project
              </span>
            </a>

            <p class="desc">
              This calculator app will be a great test of your CSS and JS skills especially.
              If you're wanting to practice using Grid, this challenge will be perfect for you!
            </p>

            <a class="action" href="https://github.com/Karan551/Calculator_Project?fbclid=IwAR3zFWiPOJvCpKObTpIIHYqfdgrNWTKXUJSb0DGFq3QUL8fUyCFaoi8FJhg" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>



        <div class="card"><!--card 3-->
          <div class="image"><img src="images/p6.jpg" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Space tourism website
              </span>
            </a>

            <p class="desc">
              This project is a fun collaboration with Scrimba and Kevin Powell! If you like,
              you can follow along and watch Kevin complete the project on Scrimba. Lots to learn!
            </p>

            <a class="action" href="https://github.com/good-mistake/space-tourism-website-main?fbclid=IwAR1wArRg3Vwa9mezypfTvQOwzen_Adb4FesNaS2pY_namk8hI0Rszu9F71c" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>

      </div>





      <!--advanced-->

      <h2 class="titre" style="text-align: center; margin-bottom: 50px;">Advanced</h2>
      <div class="advanced">
        <div class="card"><!--card 1-->
          <div class="image"><img src="images/p.webp" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Fylo dark theme landing page
              </span>
            </a>

            <p class="desc">
              This design has some nice layout challenges in it. A perfect training ground to practice your Flexbox and/or Grid skills.
            </p>

            <a class="action" href="https://github.com/AdnaanH/fylo-dark-theme-landing-page" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>


        <div class="card"><!--card 2-->
          <div class="image"><img src="images/p8.jpg" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                News Home page
              </span>
            </a>

            <p class="desc">
              This news homepage will be an excellent opportunity to practice your CSS Grid skills.
              There will be lots of tricky decisions to make and plenty of learning opportunities!
            </p>

            <a class="action" href="https://github.com/Youmnaelzany/news-homepage-main-24-4-24?fbclid=IwAR2SDtiq8xSK3Cy2ald5JQjQxXXG_3vD0BwE3BjQwxqZcBlQbg03iUkuDy0" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>



        <div class="card"><!--card 3-->
          <div class="image"><img src="images/p9.jpg" alt="image1" width="100%" height="100%"></div>
          <div class="contenta">
            <a href="#">
              <span class="title">
                Newsletter sign up
              </span>
            </a>

            <p class="desc">
              This will test your skills with basic form structure, validation, and submission.
              The success state will also be an excellent opportunity to work with DOM manipulation
            </p>

            <a class="action" href="https://github.com/LisiFernandez/Newsletter-sign-up?fbclid=IwAR2p7UTszp49W7XEotO62_OrORUpkuoj7aBfNYRDxkGVj3pPRdkBKC3KxWI" target="_blank">
              Find out code
              <span aria-hidden="true">
                →
              </span>
            </a>
          </div>
        </div>

      </div>











      <div class="separator">
        <h2 class="titre">Blog Articles</h2>
        <p id="para">It's like a digital canvas where individuals,groups,
          or corporations
          regularly share content<br> related to a specific topic. Blogs are dynamic and ever-evolving, offering fresh
          insights, opinions, and advice.</p>
      </div>

      <div class="articles">
        <div class="item">
          <div class="top">
            <img src="images/art-1.jpg">
            <h5>What is Programming?</h5>
          </div>
          <div class="bottom">
            <h5><span>+420</span> Views</h5>
            <a href="#">Read More <i class='bx bx-chevron-right'></i></a>
          </div>
        </div>
        <div class="item">
          <div class="top">
            <img src="images/art-3.jpg">
            <h5>What is Security?</h5>
          </div>
          <div class="bottom">
            <h5><span>+420</span> Views</h5>
            <a href="#">Read More <i class='bx bx-chevron-right'></i></a>
          </div>
        </div>
        <div class="item">
          <div class="top">
            <img src="images/art-4.jpg">
            <h5>What is web development?</h5>
          </div>
          <div class="bottom">
            <h5><span>+420</span> Views</h5>
            <a href="#">Read More <i class='bx bx-chevron-right'></i></a>
          </div>
        </div>
        <div class="item">
          <div class="top">
            <img src="images/art-2.jpg">
            <h5>What is framework?</h5>
          </div>
          <div class="bottom">
            <h5><span>+420</span> Views</h5>
            <a href="#">Read More <i class='bx bx-chevron-right'></i></a>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!--Footer-->

  <footer class="footer" style="background-color: #fff;">
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


</body>

</html>