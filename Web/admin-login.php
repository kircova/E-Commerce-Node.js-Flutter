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

                <a style="margin-left: 300px; padding-top: 10px; padding-bottom: 10px"  href="index.php">
                        <img src="images/logo.png" class="logo" alt="">
                    </a>
                        <div href = "index.php">
                             <li class="nav-item"><a class="nav-link"  style = "margin-top: 25px; text-align: center;" href="index.php">Go back to Homepage</a></li>
                         </div>

        </nav>
        <!-- End Navigation -->
    </header>

        <div class="contact-box-main" style="background-color: grey;">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-sm-12">
                        <h2 style = "margin-top: 10px; color:white; text-align: center;">Product Manager Log in </h2>
                        <form id="loginForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email_login" class="form-control" name="email_login" required data-error="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" id="pass_login" class="form-control" name="pass_login" required data-error="Password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-button text-center">

                                        <button class="btn hvr-hover" id="productloginButton" type="submit">Log in</button>
                                        <div id="loginbtn" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                        <script type="text/javascript">
                                          $(document).ready(function(){
                                            $('#productloginButton').click(function(event){
                                              event.preventDefault();
                                              var   email_login = $('#email_login').val();
                                              var   password_login = $('#pass_login').val();
                                              $.ajax({
                                                  type: "POST",
                                                  url: "http://" + <?php var_export($config["host"])?> + "/user/admin/login", // "http://localhost:3000/user/login"
                                                  data: {email:email_login, password:password_login },  
                                                  dataType: "json",
                                                  success: function(result){

                                                    document.cookie = "token=" + result.token;
                                                    document.cookie = "name=" + result.name;
                                                    //TODO Admin Security
                                                    alert(result.message);
                                                    window.location.href = "product-admin.php";

                                                  },
                                                  error: function(jqXHR, exception) {
                                                    alert(jqXHR.responseJSON.message);
                                                  }
                                              });
                                            });
                                          });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <div class="col-lg-6 col-sm-12">
                        <h2 style = "margin-top: 10px; color: white; text-align: center;">Sales Manager Log in </h2>
                        <form id="loginForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email_login" class="form-control" name="email_login" required data-error="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" id="pass_login" class="form-control" name="pass_login" required data-error="Password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-button text-center">

                                        <button class="btn hvr-hover" id="salesloginButton" type="submit">Log in</button>
                                        <div id="loginbtn" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                        <script type="text/javascript">
                                          $(document).ready(function(){
                                            $('#salesloginButton').click(function(event){
                                              event.preventDefault();
                                              var   email_login = $('#email_login').val();
                                              var   password_login = $('#pass_login').val();
                                              $.ajax({
                                                  type: "POST",
                                                  url: "http://" + <?php var_export($config["host"])?> + "/user/admin/login", // "http://localhost:3000/user/login"
                                                  data: {email:email_login, password:password_login },  
                                                  dataType: "json",
                                                  success: function(result){

                                                    document.cookie = "token=" + result.token;
                                                    document.cookie = "name=" + result.name;
                                                    alert(result.message);
                                                    window.location.href = "sales-manager.php";

                                                  },
                                                  error: function(jqXHR, exception) {
                                                    alert(jqXHR.responseJSON.message);
                                                  }
                                              });
                                            });
                                          });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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

</body>

</html>