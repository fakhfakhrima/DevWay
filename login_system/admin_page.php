<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Admin</span></h3><br>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page</p>
      <a href="../user_crud/index.php" class="btn">Crud Page</a>   <!-- en attente jusqu'a la page de CRUD est terminé -->
      <a href="../Wecan/profileadmin.php" class="btn">View Profile</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>