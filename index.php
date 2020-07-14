<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Scan Food for Ingrediets and Calories</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
      <header class="header">
         <div class="container">
            <nav class="row py-4">
               <div class="col">
                  <div class="logo">
                     <img src="assets/images/fscan-logo.svg" alt="">
                  </div>
               </div>
            </nav>
         </div>
         <section>
            <div class="container">
               <div class="">
                  <div class="col-sm-5">
                     <div class="header__info">
                        <h5 class="header__title d-flex align-items-center text-uppercase mb-4">We are launching soon</h5>
                        <h1 class="header__description mb-4">
                           Easiest way to identify your allergens with just a click Using our food scan app
                        </h1>
                        <button class="btn btn-custom d-flex align-items-center" id="notify-me">Notify me <img class="pl-2" src="./assets/images/right-arrow.svg" alt="arrow right"></button>
                        <form action="index.php" class="d-none" method="post" id="subscribe-form">
                              <div class="position-relative">
                                 <!-- <label for="email">Email</label> -->
                                 <input type="text" class="email-input" name="email" id="email" placeholder="Enter your email">
                                 <input type="submit" value="Notify me" class="btn btn-custom submit position-absolute" name="submit" id="validate">
                                 </div>
                                 <?php
                                    if (isset($_POST["submit"])) {
                                       $email = $_POST["email"];
                                       
                                       // $connection = mysqli_connect("eu-cdbr-west-03.cleardb.net", "baf86ee77677b7", "7ad43e4f", "heroku_ac6c00859a69057");
                                       if ($email) {
                                          if(!$connection) {
                                             die("database connection failed");
                                          }
                                          $query = "INSERT INTO user(email) ";
                                          $query .= "VALUES ('$email')"; 

                                          $result = mysqli_query($connection, $query);

                                          if (!$result) {
                                             die('Query Failed' . mysqli_error());
                                          }
                                       } else {
                                             echo "<p style='color:red'>";
                                             echo "Field cannot be blank";
                                             echo "<p>";
                                       }

                                    }
                                 ?>
                                 <p id="result"></p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </header>
      <main>
         <div class="container">
          
         </div>
      </main>

      <script src="./assets/js/jquery.js"></script>
      <script src="./assets/js/popper.js"></script>
      <script src="./assets/js/bootstrap.js"></script>
      <script defer src="./assets/js/app.js"></script>
</body>
</html>