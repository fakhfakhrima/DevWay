<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

  // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']); /* hash the passwd*/
 //  $cpass = md5($_POST['cpassword']); /* hash the confirm passwd*/
  // $user_type = $_POST['user_type'];

   /*===================*/

   // Vérification de l'email
   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      // Vérification du mot de passe et du type d'utilisateur et email
      if ($row['password'] == $pass && $row['email']) {
         if ($row['user_type'] == 'admin' && $pass == md5("khemiri123") && $email = 'khemiri@gmail.com') { // Vérifie si l'utilisateur est admin et si le mot de passe est "khemiri123"
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
            exit;
         } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            
            header('location:../index.php');
            exit;
         }
      } else {
         $error[] =  'Incorrect email or password!';
      }
   } else {
      $error[] = ' Hum!  Incorrect email or password!';
   }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="icon" type="image/x-icon" href="../Wecan/images/logo.png">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>

   </div>

</body>

</html>