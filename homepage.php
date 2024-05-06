<!DOCTYPE html>
  <?php include('loginvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To Best Flight Suggestion System</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
   </head>
  <body>
  <section class="header">
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="travel.png">Best Flight Suggestion System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <?php if(isset($_SESSION['uname'])): ?>
        <a class="nav-link" id="user" href="#"><?php echo "Welcome " .$_SESSION['uname']; ?></a>
      <?php endif ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contactus.html"><i class="fa fa-question-circle" aria-hidden="true"></i>Contact us</a>
      </li>
      <?php if(isset($_SESSION['uname'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="user profile.php"><i class="fa fa-address-card" aria-hidden="true"></i>Your profile</a>
        </li>
      <li class="nav-item">
        <a class="nav-link"  href="homepage.php?homelogout='1'" ><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</nav>
    </section>
    <video  autoplay loop class="video-bg" muted plays-inline>
      <source src="bg.mp4" type="video/mp4">
    </video>
    <div class="welcome-msg">
      <h1>Welcome to Best Flight Suggestion system</h1>
      <a href="usersearch.php" class="btn btn-book">Book Now</a>
    </div>
    <img src="whitewaves.png" class="fluid">
  </section>
  <section id="services" >
    <div class="container">
    <h5 style="color:white">Let’s take a situation wherein you’d want to travel from Rajkot to Bangalore, and the website shows you the prices for the direct flight but doesn’t allow you to find the prices for connecting flights to bangalore from Rajkot. Let’s assume that the direct flight costs you Rs 5000, but you would want cheaper options since you want to save your money. In this situation, an average person looking for the cheapest connecting flight would sit and search for flights from rajkot to every other airport and then to bangalore. Adding the sum of the costs incurred for each stop, they would arrive at the total amount. If the total amount is lesser than the direct flight’s cost, you’d have arrived at a cheaper option.</h5>
  </section>
  <section id=bestsellers>
    <h3>Our Bestsellers</h3>
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="RAJKOT.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Rajkot</h5>
            <p>One of the fast devoloping city of Gujarat state, Rajkot is also known as Entrance of Saurasthra.  It is now an important commercial and industrial centre. The manufacture of cotton and woolen textiles is a major activity; ceramics, diesel engines, and water pump sets are also produced in the city. Rajkot is known for its traditional handicrafts (silver work, embroidery, and patola weaving)</p>
            <a href="usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="Mumbai1.jpg" alt="">
        </div>
          <div class="card-body text-center">
            <h5>Mumbai</h5>
            <p>Mumbai, formerly Bombay, city, capital of Maharashtra state, southwestern India. It is the country’s financial and commercial centre and its principal port on the Arabian Sea. Located on Maharashtra’s coast,t was built on a site of ancient settlement, and it took its name from the local goddess Mumba—a form of Parvati, the consort of Shiva, one of the principal deities of Hinduism—whose temple once stood in what is now the southeastern section of the city. </p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="Ahmadabad.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Ahmedabad</h5>
            <p>Ahmadabad, also spelled Ahmedabad, city, eastern Gujarat state, west-central India. It lies along the Sabarmati River about 275 miles (440 km) north of Mumbai (Bombay). Ahmadabad is at the junction of the main roads leading to Mumbai and central India, the Kathiawar Peninsula, and the Rajasthan border. The city is also a major junction on the Western Railway, with lines running to Mumbai, Delhi, and the Kathiawar Peninsula.</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow style="width:20rem"; >
          <div class="inner">
          <img class="card-img-top" src="delhi.jpg" alt="">
          </div>
          <div class="card-body text-center">
            <h5>Delhi</h5>
            <p>Delhi, city and national capital territory, north-central India. The city of Delhi actually consists of two components: Old Delhi, in the north, the historic city; and New Delhi, in the south, since 1947 the capital of India.One of the country’s largest urban agglomerations, Delhi sits astride (but primarily on the west bank of) the Yamuna River, a tributary of the Ganges (Ganga) River, about 100 miles (160 km) south of the Himalayas.</p>
            <a href="Usersearch.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="promo">
    <div class="text">
      <i class="fas fa-plane-departure"></i>
      <p><strong>Come.<br>Fall in love at First Flight</strong></p>
    </div>
    <div class="promotion">
    <video autoplay loop class="vid" muted plays-inline>
      <source src="first-flight.mp4" type="video/mp4">

    </video>
      </div>
  </section>
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer-info">
        <div class="ftitle">
        <h3>Best Flight Suggestion System</h3>
      </div>
    <p>Here we provide best flight booking system and its different from other since we show which flight would be best for your destination directed or Connecting for money saving purpose</p>
      </div>
      <div class="col-md-3 footer-links">
        <h3>Menu</h3>
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Home</a></li>
          <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="usersearch.php">Book tickets</a></li>
          <li><i class="fa fa-plane" aria-hidden="true"></i><a href="usersearch.php">Flight Schedules</a></li>
          <li><i class="fa fa-phone" aria-hidden="true"></i><a href="contactus.html">Contact us</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-social">
        <h3>Reach us</h3>
        <p>Marwadi University, Rajkot.</p>

          <a href="https://www.facebook.com/Marwadiuniversity/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://instagram.com/marwadi.university?igshid=YmMyMTA2M2Y=/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
      </div>
      <div class="col-md-3 Newsletter">
        <h3>About us</h3>
        <p>Darshil Lunagariya<br/>
           Harshil Bhatt<br/>
           Meet Savaliya</p>
        <form class=""  method="post">
          <input type="email" class="email" name="" placeholder="Email">
          <input type="submit" class="submit" name="" value="Subscribe">
        </form>
      </div>
    </div>

      </div>
</section>

  </body>
</html>
