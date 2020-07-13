<?php

   if (isset($_POST["submit"])) {
      $email = $_POST["email"];
      
      $connection = mysqli_connect("eu-cdbr-west-03.cleardb.net", "baf86ee77677b7", "7ad43e4f", "heroku_ac6c00859a69057");
      if ($email) {
         if($connection) {
            echo "we are connected";
         } else {
            die("database connection failed");
         }
         $query = "INSERT INTO user(email) ";
         $query .= "VALUES ('$email')"; 

         $result = mysqli_query($connection, $query);

         if (!$result) {
            die('Query Failed' . mysqli_error());
         }
      } else {
         echo "Field cannot be blank";
      }

   }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Scan Food for Ingrediets and Calories</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./assets/css/main.css">
   </head>
   <body>
      <!--[if lt IE 7]>
         <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <form action="index.php" method="post" id="subscribe-form">
         <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
         </div>
         <div>
            <input type="submit" value="subscribe" name="submit">
         </div>
      </form>

      <!-- <script defer src="./assets/js/app.js"></script> -->
   </body>
</html>