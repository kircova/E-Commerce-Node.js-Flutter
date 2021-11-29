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

                <a style="margin-left: 300px; padding-top: 10px; padding-bottom: 10px"  href="product-admin.php">
                        <img src="images/logo.png" class="logo" alt="">
                    </a>
                <h2 style = "margin-top: 25px;">Product Manager </br></h2>
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
                        <li class="nav-item"><a class="nav-link" href="product-admin.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="product-admin-comments.php">Comments</a></li>
                        <li class="nav-item"><a class="nav-link" href="product-admin-orders.php">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" onclick="logoutfunction()"  href="index.php">Sign Out</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
        </nav>
        <!-- End Navigation -->
    </header>




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


            <script type="text/javascript">
        
            function logoutfunction()
            {
                document.cookie = "token=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "name=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
        </script>

       <div class="wishlist-box-main" style="margin-top:30px;">
        <div class="container" style="margin:auto; " >
            <div class="row">
                <div class="col-lg-50">
                    <div class="table-main table-responsive" >
                        <table class="table" style="margin-left:0px; border:3px solid black ">
                            <thead>
                                <tr>
                                    <th  style="text-align: center;">Approve/Delete</th>
                                    <th  style="text-align: center;">Product ID</th>
                                    <th  style="text-align: center;">Comment Rating</th>
                                    <th  style="text-align: center;">Comment Text</th>
                                    <th  style="text-align: center;">User ID</th>
                                </tr>
                            </thead>
                            <tbody id = comments-table>
                            </tbody>
                        </table>
                    </div>
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

       <script type="text/javascript">
        
            function getToken() {
                    let xx = "";
                    decodeURIComponent(document.cookie).split('; ').forEach(val => {

                       if (val.indexOf("token=") === 0) {
                         console.log(val.substring("token=".length));
                         xx = val.substring("token=".length);
                       };
                   });
                   return xx;
                  }



                $(document).ready(function(){
                     $.ajax({
                                    type: "GET",
                                    url: "http://" + <?php var_export($config["host"])?> + "/pmanager/comments",
                                    dataType: "json",
                                    headers: {"Authorization": "Bearer " + getToken()},
                                    success: function(result)
                                    {
                                        let commentlist = result;
                                        console.log(commentlist);                                   
                                        commentlist.comments.forEach(function(value)
                                        {
                                            document.getElementById("comments-table").innerHTML +=
                                            `
                                            <tr style = "background-color:white">
                                                <td class="add-pr" style="text-align: center;">
                                                    <button class="approveComment"  style="padding:10px; border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; color:white; background-color:#39870f;">Aprove Comment</button>
                                                    <input hidden tyle="text-align: center;" type="text" name="cid" value="`+value.cid+`">
                                                    <button class="deleteComment" style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:10px; color:white; background-color:#d43c34;">Delete Comment</button>
                                                </td>
                                                    <td class="name-pr">
                                                        <a style="text-align: center;">`+value.prid+` </a>
                                                </td>
                                                <td class="price-pr">
                                                    <a style="text-align: center;"> `+value.rating+`/5</a>

                                                </td>
                                                <td class="price-pr">
                                                    <a style="text-align: center;">`+value.com_text+` </a>

                                                </td>
                                                <td class="price-pr">
                                                    <a style="text-align: center;">`+value.pid+` </a>
                                                </td>
                                            </tr>
                                             `;
                                        });
                                   },
                                  error: function(jqXHR, exception) 
                                  {
                                    alert("Comments cant be accessed");
                                  }
                            }).done(function( msg ) 
                            {

                            //alert(msg.message );
                          });
                        });
        </script>                 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


         <script type="text/javascript">
                $(document).ready(function(){
                     $(document).on('click', 'button.approveComment',  function() {

                          var cid = jQuery(this).next().val();
                          
                          console.log(cid);

                          if(parseInt(cid) >= 0 )
                          {
                            $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/pmanager/comments/approve", // "http://localhost:3000/user/login"
                                      data: {
                                        cid:cid,
                                         },
                                      headers: {"Authorization": "Bearer " + getToken()},  
                                      dataType: "json",
                                      success: function(result){
                                        alert("Comment is approved!");
                                        location.reload(true);
                                        // use cookies
                                      },
                                      error: function(jqXHR, exception) {
                                        alert("Comment can not be approved!");
                                      }
                                  });
                            }
                            else
                            {
                                  alert("The comment with that id does not exist!");
                            }
                        });

                     $(document).on('click', 'button.deleteComment',  function() {

                          var cid = jQuery(this).prev().val();
                          
                          console.log(cid);

                          if(parseInt(cid) >= 0 )
                          {
                            $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/pmanager/comments/disapprove", // "http://localhost:3000/user/login"
                                      data: {
                                        cid:cid,
                                         },
                                      headers: {"Authorization": "Bearer " + getToken()},     
                                      dataType: "json",
                                      success: function(result){
                                        alert("Comment is deleted!");
                                        location.reload(true);
                                        // use cookies
                                      },
                                      error: function(jqXHR, exception) {
                                        alert("Comment can not be deleted!");
                                      }
                                  });
                            }
                            else
                            {
                                  alert("The comment with that id does not exist!");
                            }
                        });
        });

        </script>

    <!-- ALL JS FILES -->
    </body>

</html>