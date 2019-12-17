<?php
 session_start();
 $product_ids = array();
 session_destroy();

 //check if cart button has been submitted

 if (filter_input(INPUT_POST, 'add_to_cart')){
   if(isset($_SESSION['shopping_cart'])){

    //keep track of how many products in the shopping cart

    $count = count($_SESSION['shopping_cart']);

    //matching array key to product id
    $product_ids = array_column($_SESSION['shopping_cart'],'id');

    if (in_array(filter_input(INPUT_GET, 'id'),$product_ids)){
      $_SESSION['shopping_cart'][$count]= array
      (
        'id' => filter_input(INPUT_GET, 'id'),
        'name' => filter_input(INPUT_POST, 'name'),
        'price' => filter_input(INPUT_POST, 'price'),
        'quantity' => filter_input(INPUT_POST, 'quantity')
      );
    }else{ //if product already exist increase quantity

      for($i = 0; $i < count($product_ids); $i++){
        if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
        $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
      }
    }

    }
  }else{
     $_SESSION['shopping_cart'][0]= array
     (
       'id' => filter_input(INPUT_GET, 'id'),
       'name' => filter_input(INPUT_POST, 'name'),
       'price' => filter_input(INPUT_POST, 'price'),
       'quantity' => filter_input(INPUT_POST, 'quantity')
     );
   }

 }
//  if(filter_input(INPUT_GET, 'action') == 'delete)'{
//    foreach ($_SESSION['shopping_cart'] as $key => $product){
//      if($product['id'] == filter_input(INPUT_GET, 'id')){
//        unset($_SESSION['shopping_cart'][$key]);
//      }
//    }
//    $_SESSION['shopping_cart']= array_values($_SESSION['shopping_cart']);

//  }
 //pre_r($_SESSION);

 function pre_r($array){
   echo '<pre>';
   print_r($array);
   echo '</pre>';
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Start your project here-->  
 <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#">Western Graphics</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Categories
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">T-shirts</a>
          <a class="dropdown-item" href="#">Games kits</a>
          <a class="dropdown-item" href="#">Uniforms</a>
          <a class="dropdown-item" href="#">Banners</a>
        </div>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact us</a>
    </li>
     
     
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">My Account
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Register</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<!--Carousel Wrapper-->
<div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example" data-slide-to="1"></li>
    <li data-target="#video-carousel-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
 <!--Carousel Wrapper-->
<div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example" data-slide-to="1"></li>
    <li data-target="#video-carousel-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <video class="video-fluid" autoplay loop muted>
        <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
      <video class="video-fluid" autoplay loop muted>
        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
      <video class="video-fluid" autoplay loop muted>
        <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
      </video>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->

<?php
include_once 'database_connect.php';
?>

<div class="container">

<?php
//querying DB
$query = 'SELECT * FROM products ORDER BY id ASC';
$result = mysqli_query($connect,$query);

//returning results on the browser
if($result):
    if(mysqli_num_rows($result)>0):
        while($product = mysqli_fetch_assoc($result)):
          //print_r($product);
          
?>

<!-- displaying products from DB -->

<div class="col-md-3">
  <form method="POST" action="index.php?action=add&id=<?php echo $product['id'];?>">
  <div class="products" style="  border:1px solid #333; background-color: #f1f1f1; border-radius: 5px; padding: 16px; margin-bottom: 20px;">
    <img src="<?php echo $product ['image']; ?>" class="img-responsive">
    <h4 class="text-info"><?php echo $product['name']; ?></h4>
    <h4>Ksh <?php echo $product['price']; ?></h4>
    <input type="text" name="quantity" class="form-control" value="1">
    <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
    <input type="submit" name="add_to_cart" style="margin-top: 5px" class="btn btn-info" value="Add to cart">
  </div> 

  </form>

</div>


<?php
        endwhile;

      endif;
    endif;
?>

<div style="clear:both"></div>
<br>
<div class="table-responsive">
  <table class="table">
    <tr><th colspan="5"><h3>Order Details</h3></th></tr>
    <tr>
      <th width=40%>Product Name</th>
      <th width=10%>Quantity</th>
      <th width=20%>Price</th>
      <th width=15%>Total</th>
      <th width=5%>Action</th>
    </tr>

    <?php 
    if(!empty($_SESSION['shopping_cart'])):

    $total =0;

    foreach($_SESSION['shopping_cart'] as $key => $product):

    ?>
    <tr>
      <td><?php echo $product['name']; ?></td>
      <td><?php echo $product['quantity']; ?></td>
      <td>Ksh<?php echo $product['price']; ?></td>
      <td>Ksh <?php echo number_format($product['quantity'] * $product['price'], 2 ); ?></td>
      <td>
        <a href="index.php?action=delete&id=<?php echo $product['id'] ?>">
         <div class="btn-danger">Remove</div>
      </a>
      </td>
    </tr>

    <?php 
    $total = $total + ($product['quantity'] * $product['price']);
    endforeach;
    ?>

    <tr>
      <td colspan="3" align="right">Total</td>
      <td align="right"> Ksh<?php echo number_format($total , 2)  ?></td>
      <td></td>
    </tr>

    <tr>
      <td colspan="5">
        <?php

        if(isset($_SESSION['shopping_cart'])):
        if(count($_SESSION['shopping_cart'])>0):
         ?>
         <a href="#" class="btn btn-success btn-block">Checkout</a>
        <?php endif;
           endif; ?>
      </td>
    </tr>


    <?php endif; ?>

  </table>
</div>
</div>


<!-- image upload form -->
<form action="includes/imageupload.php" method="POST" enctype="multipart/form-data">
<div class="container">
    <div class="row">
        <div class="col-md-6">

        <h2>Upload Image</h2>
      
  <div class="form-group">
    <label for="price" style="font-size: 20px">Item Name</label>
    <input type="text" class="form-control" name="filename" placeholder="name...">
    <br>
    <label for="price"  style="font-size: 20px">Item Price</label>
    <input type="text" class="form-control" name="itemprice" placeholder="price">
    <br>
    <label for="type"  style="font-size: 20px">Image type</label>
    <input type="file" class="form-control" name="file">
    <br>
<button type="submit" class="btn btn-success">Upload</button>
</div>
</div>
</div>
</div>
</form>
 

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Western Graphics</h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2018 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/">
            <strong> MDBootstrap.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->


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