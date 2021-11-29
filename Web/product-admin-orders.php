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
        
            function logoutfunction()
            {
                document.cookie = "token=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "name=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
        </script>

    <div class="wishlist-box-main" style="margin-top:30px;">
        <div class="container" style="margin-left:200px; " >
            <div class="row">
                <div class="col-lg-50">
                    <div class="table-main table-responsive" >
                        <table class="table" style="margin-left:0px; border:3px solid black ">
                            <thead>
                                <tr>
                                    <th  style="text-align: center;">Order ID</th>
                                    <th  style="text-align: center;">Order Date</th>
                                    <th  style="text-align: center;">Customer Name</th>
                                    <th  style="text-align: center;">Total Price</th>
                                    <th  style="text-align: center;">Products</th>
                                    <th  style="text-align: center;">Delivery Address</th>
                                    <th  style="text-align: center;">Order Status</th>
                                    <th  style="text-align: center;">Invoices</th>
                                </tr>
                            </thead>
                            <tbody id = order-table>
                                <tr style = "background-color:white">
                                               
                                </tr>
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
          $(document).ready(function(){
                     $.ajax({
                                    type: "GET",
                                    url: "http://" + <?php var_export($config["host"])?> + "/pmanager/orders",
                                    dataType: "json",
                                    headers: {"Authorization": "Bearer " + getToken()},
                                    success: function(result)
                                    {
                                       
                                        let productlist = result;
                                        console.log(productlist);                                        
                                        productlist.orders.forEach(function(value)
                                        {
                                            document.getElementById("order-table").innerHTML +=
                                            `
                                            <tr style = "background-color:white">
                                                    <td class="add-pr" style="text-align: center;">
                                                        <a style="text-align: center;">`+value.oid+`</a>
                                                    </td>
                                                    <td class="name-pr">
                                                            <a style="text-align: center;">`+value.orderdate+`</a>
                                                    </td>
                                                    <td class="name-pr">
                                                            <a style="text-align: center;">`+value.name+`</a>
                                                    </td>
                                                    <td class="name-pr">
                                                            <a style="text-align: center;">`+value.orderPrice+`</a>
                                                    </td>
                                                    <td id="product`+value.oid+`" class="name-pr">
                                                            
                                                    </td>
                                                    <td class="price-pr">
                                                        <a style="text-align: center;"> `+value.shipAddress+`</a>
                                                    </td>

                                                    <td class="price-pr">
                                                         <select name="cars" id="status`+value.oid+`">
                                                         </select>
                                                         <button value="`+value.oid+`" style="padding:10px; border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; color:white; background-color:#39870f;" class="updateStatus" style="color:white; background-color: green">Update</button>
                                                    </td>


                                                    </td>
                                                    <td id="invoice`+value.oid+`" class="price-pr">
                                                        <a id="invoicelink`+value.oid+`" orderid=`+value.oid+` class="invoice" href="#" style="text-align: center;">Download PDF </a>
                                                    </td>
                                            </tr>

                                            `   
                                             
                                            value.OrderDetails.forEach(function(productx)
                                            {
                                                let productId  = "product"+value.oid;
                                                document.getElementById(productId).innerHTML +=
                                                `
                                                    <p> `+productx.Product.pname+` x `+productx.quantity+`</p>
                                                `
                                            });

                                            let a = value.orderStatus;

                                            let statusid = "status"+value.oid;
                                            if(a=="Processing")
                                            {
                                                    document.getElementById(statusid).innerHTML +=
                                                    ` <option selected id="0" value="0"> Processing </option>
                                                    <option id="1" value="1"> In-Transit </option>
                                                    <option id="2" value="2"> Delivered </option>
                                                    <option id="3" value="3"> Cancelled </option>
                                                    `
                                            }
                                            else if(a=="On delivery")
                                            {
                                                    document.getElementById(statusid).innerHTML +=
                                                    ` <option id="0" value="0"> Processing </option>
                                                    <option selected id="1" value="1">  In-Transit </option>
                                                    <option id="2" value="2"> Delivered </option>
                                                    <option id="3" value="3"> Cancelled </option>
                                                    `
                                            }
                                            else if(a == "Delivered")
                                            {
                                                    document.getElementById(statusid).innerHTML +=
                                                    ` <option id="0" value="0"> Processing </option>
                                                    <option  id="1" value="1"> In-Transit </option>
                                                    <option selected id="2" value="2"> Delivered </option>
                                                    <option id="3" value="3"> Cancelled </option>`
                                            }
                                            else if(a == "Cancelled")
                                            {
                                                     document.getElementById(statusid).innerHTML +=
                                                    ` <option id="0" value="0"> Processing </option>
                                                    <option  id="1" value="1"> In-Transit </option>
                                                    <option  id="2" value="2"> Delivered </option>
                                                    <option selected id="3" value="3"> Cancelled </option>`
                                            }


                                        });


                                    },
                                  error: function(jqXHR, exception) 
                                  {
                                    alert("Orders cant be accessed");
                                  }
                            }).done(function( msg ) 
                            {

                            //alert(msg.message );
                          });
                        });


    </script>


    <script type="text/javascript">
           $(document).ready(function(){

                $(document).on('click', 'button.updateStatus',  function() { 

                  var status = jQuery(this).prev().val();
                  var orderid = jQuery(this).val();

                  console.log(orderid);
                  console.log(status);

                  var stat = "On delivery"

                if(status == 1)
                {
                    stat = "On delivery"
                     $.ajax({
                                  type: "POST",
                                  url: "http://" + <?php var_export($config["host"])?> + "/pmanager/status/update", // "http://localhost:3000/user/login"
                                  data: {
                                    oid:orderid,
                                    status:1,
                                     },
                                  headers: {"Authorization": "Bearer " + getToken()},  
                                  dataType: "json",
                                  success: function(result){
                                    alert("Order status updated");
                                    location.reload(true);
                                    // use cookies
                                  },
                                  error: function(jqXHR, exception) {
                                    alert("Status can not be changed!");
                                  }
                            });
                }
                if(status == 2)
                {
                    stat = "Delivered"
                     $.ajax({
                              type: "POST",
                              url: "http://" + <?php var_export($config["host"])?> + "/pmanager/status/update", // "http://localhost:3000/user/login"
                              data: {
                                oid:orderid,
                                status:2,
                                 },
                              headers: {"Authorization": "Bearer " + getToken()},  
                              dataType: "json",
                              success: function(result){
                                alert("Order status updated");
                                location.reload(true);
                                // use cookies
                              },
                              error: function(jqXHR, exception) {
                                alert("Status can not be changed!");
                              }
                          });
                }
                if(status == 0)
                {
                    stat = "Processing"
                     $.ajax({
                              type: "POST",
                              url: "http://" + <?php var_export($config["host"])?> + "/pmanager/status/update", // "http://localhost:3000/user/login"
                              data: {
                                oid:orderid,
                                status:4,

                                 },
                              headers: {"Authorization": "Bearer " + getToken()},  
                              dataType: "json",
                              success: function(result){
                                alert("Order status updated");
                                location.reload(true);
                                // use cookies
                              },
                              error: function(jqXHR, exception) {
                                alert("Status can not be changed!");
                              }
                          });
                }
                if(status == 3)
                {
                    console.log("sd");
                    stat = "Cancelled"
                     $.ajax({
                              type: "POST",
                              url: "http://" + <?php var_export($config["host"])?> + "/pmanager/status/update", // "http://localhost:3000/user/login"
                              data: {
                                oid:orderid,
                                status:3,
                                 },
                              headers: {"Authorization": "Bearer " + getToken()},  
                              dataType: "json",
                              success: function(result){
                                alert("Order status updated");
                                location.reload(true);
                                // use cookies
                              },
                              error: function(jqXHR, exception) {
                                alert("Status can not be changed!");
                              }
                          });
                }

            });
        });

    </script>


    <script type="text/javascript" src="../libs/base64.js"></script>
   <script type="text/javascript" src="../libs/sprintf.js"></script>
   <script type="text/javascript" src="../jspdf.js"></script>
    <script type="text/javascript">

        function downloadPDF(pdf) {
            const linkSource = `data:application/pdf;base64,${pdf}`;
            const downloadLink = document.createElement("a");
            const fileName = "abc.pdf";
            downloadLink.href = linkSource;
            downloadLink.download = fileName;
            downloadLink.click();
        }

           $(document).ready(function(){

                $(document).on('click', 'a.invoice',  function() { 
                    var oid = jQuery(this).attr("orderid");
                    console.log(oid)
                     $.ajax({
                            type: "GET",
                            url: "http://" + <?php var_export($config["host"])?> + "/pmanager/invoice/" + oid,
                            dataType: "json",
                            headers: {"Authorization": "Bearer " + getToken()},
                                success: function(result)
                                {
                                    var b64 = result.base64;
                                    var link = 'data:application/pdf;base64,' + b64;
                                    
                                    var string = link;
                                    var iframe = "<iframe title=`Order "+oid +"` width='100%' height='100%' src='" + string + "'></iframe>"
                                    var x = window.open();
                                    x.document.open();
                                    x.document.write(iframe);
                                    x.document.close();
                                  },
                                  error: function(jqXHR, exception) 
                                  {
                                    alert("Orders cant be accessed");
                                  }
                              }).done(function( msg ) 
                            {

                            //alert(msg.message );
                          });
                });
            });

    </script>

        <!-- ALL JS FILES -->
    </body>

</html>