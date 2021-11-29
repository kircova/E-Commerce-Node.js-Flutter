<?php

$config = include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Vinly - Vinyl Shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/icon.png">
    <link rel="icon" href="images/icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<script type="text/javascript">
        

    function getToken() 
    {
            let xx = "";
            decodeURIComponent(document.cookie).split('; ').forEach(val => {

               if (val.indexOf("token=") === 0) {
                 console.log(val.substring("token=".length));
                 xx = val.substring("token=".length);
               };
           });
           return xx;
    }
    if(!getToken())
    {
        window.location.replace("admin-login.php");
    }


</script>


<body>

      <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                    </div>
                    <div class="right-phone-box">
                    </div>
                    <div class="our-link">
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">

        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">

                <a style="margin-left: 300px; padding-top: 10px; padding-bottom: 10px"  href="product-admin.php">
                        <img src="images/logo.png" class="logo" alt="">
                    </a>
                <h2 style = "margin-top: 25px;">Sales Manager </br></h2>
            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="sales-manager.php">Discounts</a></li>
                        <li class="nav-item"><a class="nav-link" href="sales-manager-invoices.php">Invoices</a></li>
                        <li class="nav-item"><a class="nav-link" href="sales-manager-revenue.php">View Revenue</a></li>
                        <li class="nav-item"><a class="nav-link" onclick="logoutfunction()"  href="index.php">Sign Out</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
        </nav>
        <!-- End Navigation -->
    </header>

        <script type="text/javascript">
        
            function logoutfunction()
            {
                document.cookie = "token=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "name=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
        </script>


     <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>


        </script>
    </body>
</html>
