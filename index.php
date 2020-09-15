<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>logiGoods</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div id="top"><!-- Top start -->
            <div class="container"><!-- container Begin -->
                <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php">4 Items In Your Cart | Total Price: ₹300 </a>
                </div><!-- col-md-6 offer Finish -->
                <div class="col-md-6"><!-- col-md-6 Begin -->
                    <ul class="menu"><!-- cmenu Begin -->
                        <li><a href="customer_register.php">Register</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Go To Cart</a></li>
                        <li><a href="checkout.php">Login</a></li>
                    </ul><!-- menu Finish -->
                </div><!-- col-md-6 Finish -->
            </div><!-- container Finish --></div><!-- Top Finish -->
        <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
            <div class="container"><!-- container Begin -->
                <div class="navbar-header"><!-- navbar-header Begin -->
                    <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                        <img src="images/logiGoods.png" alt="logiGoods Logo" class="hidden-xs">
                        <img src="images/logiGoodsmobile.png" alt="logiGoods Logo Mobile" class="visible-xs">
                    </a><!-- navbar-brand home Finish -->
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div><!-- navbar-header Finish -->
                <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
                    <div class="padding-nav"><!-- padding-nav Begin -->
                        <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop.php">My Shop</a></li>
                            <li><a href="checkout.php">My Account</a></li>
                            <li><a href="cart.php">Shopping Cart</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul><!-- nav navbar-nav left Finish -->
                    </div><!-- padding-nav Finish -->
                    <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 Items In Your Cart</span>
                    </a><!-- btn navbar-btn btn-primary Finish -->
                    <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button><!-- btn btn-primary navbar-btn Finish -->
                    </div><!-- navbar-collapse collapse right Finish -->
                    <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                        <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                            <div class="input-group"><!-- input-group Begin -->
                                <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                                <span class="input-group-btn"><!-- input-group-btn Begin -->
                                    <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                                        <i class="fa fa-search"></i>
                                    </button><!-- btn btn-primary Finish -->
                                </span><!-- input-group-btn Finish -->
                            </div><!-- input-group Finish -->
                        </form><!-- navbar-form Finish -->
                    </div><!-- collapse clearfix Finish -->
                </div><!-- navbar-collapse collapse Finish -->
            </div><!-- container Finish --></div><!-- navbar navbar-default Finish -->
        <div class="container" id="slider"><!-- container Begin -->
            <div class="col-md-12"><!-- col-md-12 Begin -->
                <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
                    <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol><!-- carousel-indicators Finish -->
                    <div class="carousel-inner"><!-- carousel-inner Begin -->
                        <div class="item active">
                            <img src="admin_area/slides_images/grocery.jpg" alt="Slider Image 1">
                        </div>
                        <div class="item">
                            <img src="admin_area/slides_images/low cost of delivery.jpg" width="490" height="100"  alt="Slider Image 2">
                        </div>
                        <div class="item">
                            <img src="admin_area/slides_images/slide-3.jpg" alt="Slider Image 3">
                        </div>
                        <div class="item">
                            <img src="admin_area/slides_images/slide-4.jpg" alt="Slider Image 4">
                        </div>
                    </div><!-- carousel-inner Finish -->
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a><!-- left carousel-control Finish -->
                    <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a><!-- left carousel-control Finish -->
                </div><!-- carousel slide Finish -->
            </div><!-- col-md-12 Finish --></div><!-- container Finish -->
        <div id="advantages"><!-- advantages start -->
            <div class="container"><!-- container Begin -->
                <div class="same-height-row"><!-- same-height-row Begin -->
                    <div class="col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                            <div class="icon"><!-- icon Begin -->
                                <i class="fa fa-heart"></i>
                            </div><!-- icon end -->
                            <h3><a href="#">Best Offers</a></h3>
                            <p>We Know to provide the possible services ever for you.  </p>
                        </div><!-- box same-height end -->
                    </div><!-- col-sm-4 end --> 
                    <div class="col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                            <div class="icon"><!-- icon Begin -->
                                <i class="fa fa-tag"></i>
                            </div><!-- icon end -->
                            <h3><a href="#">Best Prices</a></h3>
                            <p>Compare with other ecommerce sites. We Provide our best services. </p>
                        </div><!-- box same-height end -->
                    </div><!-- col-sm-4 end -->
                    <div class="col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                            <div class="icon"><!-- icon Begin -->
                                <i class="fa fa-thumbs-up"></i>
                            </div><!-- icon end -->
                            <h3><a href="#">100% pure </a></h3>
                            <p>We Just offer you best and original products. just order and relax.</p>
                        </div><!-- box same-height end -->
                    </div><!-- col-sm-4 end -->
                </div><!-- same-height-row end -->
            </div><!-- container end --></div><!-- advantages end -->
        <div id="hot"><!-- hot start -->
            <div class="box"><!-- box start -->
                <div class="container"><!-- container start -->
                    <div class="col-md-12"><!--col-md-12 start-->
                        <h2>Our latest Products</h2>
                    </div><!--col-md-12 end-->
                </div><!-- container end -->
            </div><!-- box end --></div><!-- hot end -->
        <div id= "content" class="container"><!-- container satrt-->
            <div class="row"><!-- row satrt-->
                <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single satrt-->
                    <div class="product" ><!--product start-->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\300-rocher-t24-imported-ferrero-original-imaff5m7ntksugag.jpeg" alt="Product 1">
                        </a>
                        <div class="text"><!--text start-->
                            <h3>
                                <a href="details.php">
                                    Ferrero Rocher(Original)
                                </a>
                            </h3> 
                            <p class="price">₹300</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a> 
                            </p>
                        </div><!--text end-->
                    </div><!--product end-->
                </div><!--col-sm-4 col-sm-6 single-->
                <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single satrt-->
                    <div class="product" ><!--product start-->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\1_6T_adapter_Cable_grande.jpg" alt="Product 2">
                        </a>
                        <div class="text"><!--text start-->
                            <h3>
                                <a href="details.php">
                                    1+ 6T adapter Cable grande
                                </a>
                            </h3> 
                            <p class="price">₹300</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a> 
                            </p>
                        </div><!--text end-->
                    </div><!--product end-->
                </div><!--col-sm-4 col-sm-6 single-->
                <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single satrt-->
                    <div class="product" ><!--product start-->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\450-dairy-milk-silk-missed-you-chocolate-bar-150g-pack-of-3-original-imafujagym8adkq8.jpeg" alt="Product 3">
                        </a>
                        <div class="text"><!--text start-->
                            <h3>
                                <a href="details.php">
                                    dairy milk silk missed you chocolate bar 150g pack of 3
                                </a>
                            </h3> 
                            <p class="price">₹300</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a> 
                            </p>
                        </div><!--text end-->
                    </div><!--product end-->
                </div><!--col-sm-4 col-sm-6 single-->
                <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single satrt-->
                    <div class="product" ><!--product start-->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\AnkleSocks.jpg" alt="Product 4">
                        </a>
                        <div class="text"><!--text start-->
                            <h3>
                                <a href="details.php">
                                    Ankle Socks
                                </a>
                            </h3> 
                            <p class="price">₹300</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a> 
                            </p>
                        </div><!--text end-->
                    </div><!--product end-->
                </div><!--col-sm-4 col-sm-6 single-->
                <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single satrt-->
                    <div class="product" ><!--product start-->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\Boxers.jpg" alt="Product 1">
                        </a>
                        <div class="text"><!--text start-->
                            <h3>
                                <a href="details.php">
                                    Boxers
                                </a>
                            </h3> 
                            <p class="price">₹300</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a> 
                            </p>
                        </div><!--text end-->
                    </div><!--product end-->
                </div><!--col-sm-4 col-sm-6 single--></div><!-- row end--></div><!-- container end-->
        <?php
            include("footer.php");
        ?>
        
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
   </body>
</html>