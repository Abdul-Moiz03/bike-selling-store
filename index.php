<!DOCTYPE html>

<!-- giving id means calling css style sheet
givig class means calling bootstrap -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS {bootstrap Cdn}-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style/style.css">
<!-- jQuery library "Bootstrap uses jQuery for JavaScript plugins (like modals, tooltips, etc)"-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- link to fontawsome -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" 
integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
    <title>Bike selling store</title>
</head>
<body>
   
    <div id="top">  <!-- Start of top bar -->
    <div class="container"> <!-- bootstrap container calss start -->
     <div class="col-md-6 offer"> <!-- col-md offers botstrap class  12 colms in which we are using 6-->
     <a herf="#" class=" btn btn-success btn-sm"> Welcome Guest</a>
     <a herf="#"> Shopping cart total price: 100moiz ,total item 2</a>
     </div> <!--end of cln 6 -->
     <div class=" col-md-6">
     <ul class="menu">
     <li> <a herf="customer_registration.php">Register</a> </li>
     <li> <a herf="cart.php">Go to cart </a> </li>
     <li> <a herf="checkout.php">My Account</a> </li>
     <li> <a herf="login.php">Login</a> </li>
     </ul>
     </div>
    </div> <!-- bootstrap container calss end -->
    </div>  <!-- end of top bar -->
    <!-- start of nav bar -->
    <div class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                 <a class="navbar-brand home" href="index.php"> <!--logo section-->
                <!-- class hidden.xs means when screen is samll hide this image -->
                <img src="#" alt="teehosting" class="hidden-xs">
                <img src="#" alt="teehosting" class="visible-xs"></a>
                <!-- making buttons for responsive -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only sr-only-focusable">Toggle Navigation</span>
            <i class="fa fa-align-justify"></i></button>
            <!-- again one button for searach bar -->
            <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                <span class="sr-only"></span>
                <i class="fa fa-search"></i></button>
            </div>
            <div class="navbar-collapse collapse" id="avigation"><!--nav bar colaspe collapse end-->
                <div class="padding-nav"> <!--padding nav start-->
                    <ul class="nav navbar-nav navebar-left">
                        <li class="active">
                            <a href="index.php">home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shoping Cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div><!--padding nav End-->
                <div>
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 itme in cart</span>
                    </a>
                    <div class="navbar-collapse collapse right">
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#search">
                                <span class="sr-only"> toggle search</span>
                                <i class="fa fa-search"></i>
                    
                        </button>
                    </div>
                        <div class="collapse clearfix" id="search">
                        <form action="result.php" class="navbar-form" method="get">
                        
                        <div class="input-group">
                        <input type="text" name="user_query" placeholder="Search Here" class="form-control" required="">
                        <span class="input-group-btn">
                        <button type="submit" value="Submit " name="submit" class="btn btn-primary">
                        
                            <i class="fa fa-search"></i>
                        </button>
                        </span>
                        </div>

                        </form>

                        </div>

                </div>


            </div>   <!--nav bar colaspe collapse end-->
        </div>
    </div>    <!-- end of nav bar -->
<div class="container" id="slider">
<!-- container starts -->
    <div class="col-md-12">
    <!-- col-md-12 start -->
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
        <!-- carousel slide start -->
            <ol class="carousel-indicators">
            <li data-target="myCarousel" data-slide-to="0" class="active"></li> 
            <li data-target="myCarousel" data-slide-to="1" ></li> 
            <li data-target="myCarousel" data-slide-to="2" ></li> 
            <li data-target="myCarousel" data-slide-to="3" ></li> 
            </ol>

            <div class="carousel-inner">
            <!-- carousel inner start -->
            
                <div class="item active">
                    <img src="images/1.jpg
                    " width=1200px   alt="some image" >
                </div>

                <div class="item ">
                    <img src="images/2.jpg" width=1200px   alt="some image">
                </div>

                <div class="item ">
                    <img src="images/5.jpg" width=1200px   alt="some image">
                </div>

                <div class="item ">
                    <img src="images/4.jpg" width=1200px   alt="some image">
                </div>
            </div>
                    <!-- carousel inner ends -->
                    
                    <a href="myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>

                    <a href="myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
<!-- 
                    <a href="myCarousel" class="left carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>

                    <a href="myCarousel" class="left carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a> -->
        </div>
            <!-- carousel slide ends -->
    </div>
    <!-- col-md-12 ends -->
</div>
<!-- container ends -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>