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

<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password_conf').value) {
    document.getElementById('message').style.color = 'white';
    document.getElementById('message').innerHTML = '';
    //document.getElementById('message_background').style.background = 'green';
    document.getElementById('registerButton').disabled = false;
  } else {
    document.getElementById('message').style.color = 'white';
    document.getElementById('message').innerHTML = 'not matching';
    document.getElementById('message_background').style.background = 'red';
    document.getElementById('registerButton').disabled = true;
  }
}


</script>

<body>

   <?php include "header_searchbar.php";?>


        <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2> Login and Register</h2>
                </div>
            </div>
        </div>
    </div>

        <!-- Start Register  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                        <h2>REGISTER</h2>
                        <form id="registerForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Your Surname" required data-error="Please enter your surname">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email"  placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required data-error="Please enter your password" onkeyup='check();'>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Password Confirmation" required data-error="Please confirm your password" onkeyup='check();'>
                                        <div class="help-block with-errors" id='message_background'><span id='message'></span></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="registerButton" type="submit"> Register</button>

                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                        <script type="text/javascript">

                                        	$(document).ready(function(){
                                        		$('#registerButton').click(function(event){
                                        			event.preventDefault();
                                        			var	name = $('#name').val();
                                        			var	surname = $('#surname').val();
                                        			var	email = $('#email').val();
                                        			var	password = $('#password').val();
                                        			$.ajax({
                                        			    type: "POST",
                                        			    url: "http://" + <?php var_export($config["host"])?> + "/user/register",
                                        			    data: { name:name, surname:surname, email:email, password:password },
                                        			    dataType: "json",
                                        			    success: function(result){

                                                    // use cookies

                                                    document.cookie = result.token;

                                                    alert(result.message );

                                                  },
                                                  error: function(jqXHR, exception) {
                                                    alert(jqXHR.responseJSON.message);
                                                  }


                                        			}).done(function( msg ) {

                                                //alert(msg.message );

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
                        <h2>LOG IN </h2>
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

                                        <button class="btn hvr-hover" id="loginButton" type="submit">Log in</button>

                                        <div id="loginbtn" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                                        <script type="text/javascript">
                                          $(document).ready(function(){
                                            $('#loginButton').click(function(event){
                                              event.preventDefault();
                                              var	email_login = $('#email_login').val();
                                              var	password_login = $('#pass_login').val();
                                              $.ajax({
                                                  type: "POST",
                                                  url: "http://" + <?php var_export($config["host"])?> + "/user/login", // "http://localhost:3000/user/login"
                                                  data: {email:email_login, password:password_login },
                                                  dataType: "json",
                                                  success: function(result){

                                                    // use cookies

                                                    document.cookie = "token=" + result.token;
                                                    document.cookie = "name=" + result.name;
                                                    alert(result.message);
                                                    window.location.href = "index.php";

                                                  },
                                                  error: function(jqXHR, exception) {
                                                    alert(jqXHR.responseJSON.message);
                                                  }
                                              });
                                            });
                                          });
                                        </script>
                                        <div href ="">

                                            <p> Forgot your password?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register -->



    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About ThewayShop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
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
