<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact|Western Graphics</title>
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
  .map-container-section {
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-section iframe {
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}
  </style>
</head>
<body>

 
<?php require_once ("php/header.php"); ?>
  <!-- Section: Contact v.1 -->
<section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5 padding-top:20px">Contact us</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
      eum porro a pariatur veniam.</p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-4">
  
        <!-- Form with header -->
        <form action="contact form" action="php/mail.php" method="POST">
        <div class="card">
          <div class="card-body">
            <!-- Header -->
            <div class="form-header blue accent-1">
              <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
            </div>
            <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
            <!-- Body -->
            <div class="md-form">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="form-name" name="name" class="form-control">
              <label for="form-name">Your name</label>
            </div>
            <div class="md-form">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="text" id="form-email" name="email" class="form-control">
              <label for="form-email">Your email</label>
            </div>
            <div class="md-form">
              <i class="fas fa-tag prefix grey-text"></i>
              <input type="text" id="form-Subject" name="subject" class="form-control">
              <label for="form-Subject">Subject</label>
            </div>
            <div class="md-form">
              <i class="fas fa-pencil-alt prefix grey-text"></i>
              <textarea id="form-text" class="form-control md-textarea" name="message" rows="3"></textarea>
              <label for="form-text">Send message</label>
            </div>
            <div class="text-center">
              <button class="btn btn-light-blue" type="submit">Submit</button>
            </div>
          </div>
        </div>
        </form>
        <!-- Form with header -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-lg-7">
  
        <!--Google map-->
        <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=nakuru&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Buttons-->
        <div class="row text-center">
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-map-marker-alt"></i>
            </a>
            <p>Webuye, Lions </p>
            <p class="mb-md-0">Kenya</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-phone"></i>
            </a>
            <p>+254 721273151</p>
            <p class="mb-md-0">Mon - Sat, 8:00-06:00</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-envelope"></i>
            </a>
            <p>westerngraphics@gmail.com</p>
            <p class="mb-0">brandon@gmail.com</p>
          </div>
        </div>
  
      </div>
      <!-- Grid column -->
  
    </div>
    <!-- Grid row -->
  
  </section>
  <!-- Section: Contact v.1 -->

  <?php require_once ("php/footer.php"); ?>

  <!-- End your project here-->

  
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
