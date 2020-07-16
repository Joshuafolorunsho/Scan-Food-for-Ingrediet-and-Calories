<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scan Food for Ingrediets and Calories</title>
    <meta name="description" content="fScan is an application that helps you scan your food and provides you a detailed review of calories and ingrediets in the food">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="row py-4">
          <div class="col-md-6">
            <div class="logo">
              <a href="/">
                <img
                  class="img-fluid"
                  src="assets/images/fscan-logo.svg"
                  alt="fscan logo"
                />
              </a>
            </div>
          </div>
        </nav>
      </div>
      <section class="header-section">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-5 col-lg-6">
                     <div class="header__info">
                       <h5
                         class="header__sub-title d-flex align-items-center text-uppercase mb-4"
                       >
                         We are launching soon
                       </h5>
                       <h1 class="header__title heading-1 mb-4 font-weight-bold">
                        Ever Worried about What is in your Food?
                       </h1>
                       <p class="header__description">Take control of what you eat. Track calories and breakdown ingredients with fSacn.</p>
                       <button
                         class="btn btn-custom font-weight-bold d-inline-block justify-content-start align-items-center"
                         id="notify-me"
                       >
                         Notify me
                         <img
                           class="pl-2"
                           src="./assets/images/right-arrow.svg"
                           alt="arrow right"
                         />
                       </button>
                     </div>
                  </div>
                  <div class="d-none d-md-block col-md-7 col-lg-6">
                     <img class="hero-img" class="img-fluid" src="./assets/images/fscan home screen.svg" alt="fscan home screen">
                  </div>
               </div>
            </div>
            
         </section>
      </header>
      <button id="goTop">top</button>
    <main>
      <section class="about py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <img class="img-fluid" src="./assets/images/phone.svg" alt="phone mockup" />
            </div>
            <div class="col-sm-6 pt-5 py-sm-0">
              <h2 class="text-middle color-blue heading-2 font-weight-bold text-center text-sm-left">Say No More to Unhealthy Food</h2>
              <p class="py-2 text-center text-sm-left heading-4">
                Our goal is to bring tansparency to the food industry and
                providing valuable and much-needed information readily available
                at your fingertips to make better informed choices and promote
                healthy living.
              </p>
              <p class="text-center text-sm-left heading-4">
                We are bringing you a completely free app that allows you to
                scan / search your food products and obtain the nutritional
                values in it.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="features">
        <div class="container">
          <div class="row mt-2 mb-5 my-sm-5">
            <div class="col">
              <h2 class="text-middle text-center features__title color-blue heading-2 font-weight-bold">
                Amazing benefits of fScan
              </h2>
              <p class=" text-middle text-center heading-4 py-2">
                Easy to use, convenient and suitable for all age groups, our
                food scan app is equipped with benefits to keep you healthy.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div
                class="feature feature-blue text-center p-3 p-sm-2 p-lg-4 mb-5 mt-3"
              >
                <div class="feature__icon">
                  <img
                    class="img-fluid"
                    src="./assets/images/checkmark-blue.svg"
                    alt="checkmark orange"
                  />
                </div>
                <h6 class="feature__sub-title py-3 heading-3 color-blue">
                  Never Worry About what you eat
                </h6>
                <p class="feature__sub-description heading-4">
                  With just a few clicks, you can scan unlimited number of food
                  based on your diet with our advanced scan and get instant
                  detailed overview on your scan.
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="feature text-center p-3 p-sm-2 p-lg-4 mb-5 mt-3">
                <div class="feature__icon">
                  <img
                    class="img-fluid"
                    src="./assets/images/checkmark-orange.svg"
                    alt="checkmark orange"
                  />
                </div>
                <h6 class="feature__sub-title py-3 heading-3 color-blue">Track your Diet</h6>
                <p class="feature__sub-description heading-4">
                  With just a single click, you can now track your your calories
                  and nutrients and maintain a healthy living, making you enjoy
                  your favorite foods without feeling guilty
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div
                class="feature feature-blue text-center p-3 p-sm-2 p-lg-4 mb-5 mt-3"
              >
                <div class="feature__icon">
                  <img
                    class="img-fluid"
                    src="./assets/images/checkmark-blue.svg"
                    alt="checkmark orange"
                  />
                </div>
                <h6 class="feature__sub-title py-3 heading-3 color-blue">Eat Healthy and More</h6>
                <p class="feature__sub-description heading-4">
                  With your allergens in mind, we are not just bringing the
                  option of scanning your food, but the option of giving you
                  essential healtier choices base on your allergens.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="how-it-works">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3 class="how-it-works__title color-blue heading-2 font-weight-bold heading-2 text-center text-md-left">How fScan works</h3>
              <p class="heading-4 text-center text-md-left pb-2">
                With this few steps, you can enjoy your food without wondering
                what is in it.
              </p>
              <div class="how-it-works__processes">
                <div class="how-it-works__process">
                  <img class="lazyload" data-src="./assets/images/1.svg" alt="process one" />
                  <h5 class="how-it-works__sub-title heading-3">
                    Scan unlimited number of food
                  </h5>
                  <p class="how-it-works__sub-description heading-4">
                    Find out what is in your food with just glance using our app
                  </p>
                </div>
                <div class="how-it-works__process">
                  <img class="lazyload" data-src="./assets/images/2.svg" alt="process two" />
                  <h5 class="how-it-works__sub-title heading-3">
                    Log your meals in seconds.
                  </h5>
                  <p class="how-it-works__sub-description heading-4">
                    You can also scan food from your gallery and get instant
                    overview with our advanced image recognition.
                  </p>
                </div>
                <div class="how-it-works__process">
                  <img class="lazyload" data-src="./assets/images/3.svg" alt="process three" />
                  <h5 class="how-it-works__sub-title heading-3">
                    Get the result of your scan
                  </h5>
                  <p class="how-it-works__sub-description heading-4">
                    With a click, instantly you will get result of calories,
                    macros and micronutrients
                  </p>
                </div>
                <div class="how-it-works__process">
                  <img class="lazyload" data-src="./assets/images/4.svg" alt="process four" />
                  <h5 class="how-it-works__sub-title heading-3">
                    Scan unlimited number of food
                  </h5>
                  <p class="how-it-works__sub-description heading-4">
                    Find out what is in your food with just glance using our app
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
              <img 
                class="img-fluid lazyload"
                data-src="./assets/images/phone-scanning-food-with-edge.svg"
                alt="screenshot of app scanning food"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="other-benefits">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-6 mx-auto">
              <div class="other-benefits__card py-4">
                <h4 class="heading-3 other-benefits__title text-center">Other Benefits</h4>
                <div class="mx-auto rounded-circle other-benefits__logo d-flex align-items-center my-4">
                  <img class="lazyload" data-src="./assets/images/benefit fScan logo.svg" alt="benefit fscan logo" />
                </div>
                <ul class="pt-1 mx-auto other-benefits__lists list-unstyled">
                  <li class="other-benefits__item heading-4">It is <span>FREE</span></li>
                  <li class="other-benefits__item heading-4">Make better choices on your diet</li>
                  <li class="other-benefits__item heading-4">Know what you can actually consume</li>
                  <li class="other-benefits__item heading-4">Visualizing is energizing</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <h2 class="benefits__title color-blue heading-2 font-weight-bold mb-3 text-center text-sm-left pt-3 pt-sm-0">
                Create your own health journey
              </h2>
              <p class="heading-4">
                To help you reach your health goals and customize your health
                journey, you can now add your favorites food scans to your diary
                to keep track of your daily intake.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="showcase py-5">
        <div class="container">
          <h2 class="showcase__title text-center color-blue heading-2 font-weight-bold">
            Screenshots from our Awesome App
          </h2>
          <p class="showcase__description text-center text-middle heading-4">
            With our customer at heart, we are making sure our app is easy to
            navigate, helping you achieve your goals easier and faster.
          </p>
          <div class="row py-5">
            <div class="col">
              <div class="carousel">
                <ul class="carousel__list">
                  <li class="carousel__item" data-pos="-2">1</li>
                  <li class="carousel__item" data-pos="-1">2</li>
                  <li class="carousel__item" data-pos="0">3</li>
                  <li class="carousel__item" data-pos="1">4</li>
                  <li class="carousel__item" data-pos="2">5</li>
                  <li class="carousel__item" data-pos="3">6</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="subscribe">
        <div class="container">
          <div class="subscribe-text">
            <div class="row">
              <div class="col">
                <h2 class="subscribe__title text-center color-blue heading-2 font-weight-bold">
                  Don't Hesitate To Subscribe
                </h2>
                <p class="subscribe__description text-middle text-center heading-4 mb-4">
                  Subscribe to get notified on when our app will be launched and
                  be the first to get our exclusive premium access to unlimited
                  health care services.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <form action="index.php" method="post" id="subscribe-form">
                  <div class="position-relative">
                    <label class="hide" for="email">Email</label>
                    <input
                      type="text"
                      class="email-input"
                      name="email"
                      id="email"
                      placeholder="Enter your email"
                    />
                    <input
                      type="submit"
                      value="Notify me"
                      class="btn btn-custom font-weight-bold submit position-absolute"
                      name="submit"
                      id="validate"
                    />
                  </div>
                  <!-- <?php
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
                           ?> -->
                  <p id="result"></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer text-center py-4 py-sm-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-4">
            <img class="logo lazyload" data-src="./assets/images/fscan-logo.svg" alt="fscan logo" />
          </div>
          <div class="col-sm-4">
            <p class="pt-3">
              Copyright &copy; 2020 fScan. All rights reserved
            </p>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled d-flex justify-content-center align-items-center pt-3">
              <li class="pr-3">
                <a href="https://www.twitter.com" target="_blank" rel="noreferrer">
                  <img class="lazyload" data-src="./assets/images/twitter.svg" alt="twitter logo" />
                </a>
              </li>
              <li class="pr-3">
                <a href="https://www.linkedin.com" target="_blank" rel="noreferrer">
                  <img class="lazyload" data-src="./assets/images/linkedin.svg" alt="linkedin logo" />
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com" target="_blank" rel="noreferrer">
                  <img class="lazyload" data-src="./assets/images/facebook.svg" alt="facebook logo" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div id="subscribe"></div>
    <script src="./assets/js/lazysizes.min.js" async></script>
    <script src="./assets/js/jquery.js" async defer></script>
    <script src="./assets/js/popper.js" async defer></script>
    <script src="./assets/js/bootstrap.js" async defer></script>
    <script async defer src="./assets/js/app.js"></script>
  </body>
</html>
