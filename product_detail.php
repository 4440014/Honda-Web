<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb = "honda";

$con = mysqli_connect($servername, $username, $password, $mydb);

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pathFragments = explode('=', $url);
$end = end($pathFragments);

$query = mysqli_query($con, "SELECT * FROM tblproducts where productId = $end");

$query = mysqli_fetch_row($query);

// echo "<pre>";
// print_r($query);
// echo "</pre>";
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Honda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <style>
        	/* jssor slider loading skin double-tail-spin css */

        	.jssorl-004-double-tail-spin img {
        		animation-name: jssorl-004-double-tail-spin;
        		animation-duration: 1.2s;
        		animation-iteration-count: infinite;
        		animation-timing-function: linear;
        	}

        	@keyframes jssorl-004-double-tail-spin {
        		from {
        			transform: rotate(0deg);
        		}

        		to {
        			transform: rotate(360deg);
        		}
        	}


        	.jssorb051 .i {position:absolute;cursor:pointer;}
        	.jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        	.jssorb051 .i:hover .b {fill-opacity:.7;}
        	.jssorb051 .iav .b {fill-opacity: 1;}
        	.jssorb051 .i.idn {opacity:.3;}

        	.jssora051 {display:block;position:absolute;cursor:pointer;}
        	.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        	.jssora051:hover {opacity:.8;}
        	.jssora051.jssora051dn {opacity:.5;}
        	.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
        <script src="assets/js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        	jssor_1_slider_init = function() {

        		var jssor_1_SlideshowTransitions = [
        		{$Duration:1200,$Opacity:2}
        		];

        		var jssor_1_options = {
        			$AutoPlay: 1,
        			$SlideshowOptions: {
        				$Class: $JssorSlideshowRunner$,
        				$Transitions: jssor_1_SlideshowTransitions,
        				$TransitionsOrder: 1
        			},
        			$ArrowNavigatorOptions: {
        				$Class: $JssorArrowNavigator$
        			},
        			$BulletNavigatorOptions: {
        				$Class: $JssorBulletNavigator$
        			}
        		};

        		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        		/*#region responsive code begin*/
        		function ScaleSlider() {
        			var containerElement = jssor_1_slider.$Elmt.parentNode;
        			var containerWidth = containerElement.clientWidth;
        			if (containerWidth) {
        				var MAX_WIDTH = 1500;

        				var expectedWidth = containerWidth;

        				if (MAX_WIDTH) {
        					expectedWidth = Math.min(MAX_WIDTH, expectedWidth);
        				}

        				jssor_1_slider.$ScaleWidth(expectedWidth);
        			}
        			else {
        				window.setTimeout(ScaleSlider, 30);
        			}
        		}

        		ScaleSlider();
        		$Jssor$.$AddEvent(window, "load", ScaleSlider);
        		$Jssor$.$AddEvent(window, "resize", ScaleSlider);
        		$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        		/*#endregion responsive code end*/
        	};
        </script>

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 0300-4440014</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: usmanbajwa.uol@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container"> 
                    <!-- <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>  -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/honda-logo.jpg" class="logo" alt="" height="10">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>                    
                            <li><a href="aboutUs.php">About Us</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <div class="w3-container">
              <h2>Slideshow Indicators</h2>
              <p>An example of using buttons to indicate how many slides there are in the slideshow, and which slide the user is currently viewing.</p>
            </div>



            <div class="row deatil_page">
                <div class="col-md-12" style="margin-top: 100px;height: 450px;">

                    <div class="col-md-6" style=" height: 450px;">
                        <div class="col-md-4"></div>
                        <div class="col-md-8" style="height: 450px;">
                            <div class="row" style="background-color:  height: 300px;">
                                <div class="col-md-12" style="margin-top: 40px;">
                                    <img src="assets/images/civic.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="height: 450px;">

                        <div class="col-md-12">
                            <table class="detail_table">
                                <tbody>
                                    <tr>
                                        <th class="car_main_heading" colspan="4">
                                             Specification 
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="" style="top:20px; padding: 21px 0px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Name</td>
                                        <td><?php echo $query[1]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Picture</td>
                                        <td><?php echo $query[2]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Price</td>
                                        <td><?php echo $query[3]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Model</td>
                                        <td><?php echo $query[4]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Stock</td>
                                        <td><?php echo $query[5]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Discount</td>
                                        <td><?php echo $query[6]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Size</td>
                                        <td><?php echo $query[7]?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px">Detail</td>
                                        <td><?php echo $query[8]?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            

            <footer id="contact" class="footer action-lage bg-black p-top-55">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-4">
                                <div class="widget_item widget_about">
                                     <h5 class="text-white">About Us</h5>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>0300-4440014</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>usmanbajwa.uol@gmail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            

                            <div class="col-md-4">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Lahore, 17 December 2016 – Honda Atlas Cars (Pakistan)</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> "Ride into the Future" to its customers.</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Honda Pakistan is confident that the styling</a></li>
                                    </ul>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-4">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Newsletter</h5>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter you Email">
                                            <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>

                                    </form>
                                   
                                    <ul class="list-inline m-top-20">
                                        <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                
            </footer>




        </div>

        <!-- JS includes -->


        <script type="text/javascript">jssor_1_slider_init();</script>
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>

<!-- <script type="text/javascript">
    $( document ).ready(function() {
        var currentLocation = window.location["search"];
        var fields = currentLocation.split('=');
        $.ajax({
            url: "test.html",
            context: document.body,
            success: function(){
              
            }
        });
        console.log("dfsdfsaldkjhks");
        console.log(fields[1]);
    });
</script> -->
