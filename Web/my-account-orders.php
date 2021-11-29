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
        window.location.replace("login.php");
    }

    </script>

    <?php include "header_searchbar.php";?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Orders</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="my-account.php">My Account</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <div>
        <div>
            <div style="margin-top: 80px;" class="title-all text-center">
                    <h1>Ongoing Orders</h1>
            </div>
            <div class="wishlist-box-main" style="margin-top:30px; margin-bottom: 50px;">
                <div class="container" style="margin:auto; " >
                    <div class="row">
                        <div class="col-lg-50">
                            <div class="table-main table-responsive" >
                                <table class="table" style="margin-left:0px; border:3px solid black ">
                                    <thead>
                                        <tr>
                                            <th  style="text-align: center;">Order Date</th>
                                            <th  style="text-align: center;">Recipient Name</th>
                                            <th  style="text-align: center;">Total Price</th>
                                            <th  style="text-align: center;">Products</th>
                                            <th  style="text-align: center;">Delivery Address</th>
                                            <th  style="text-align: center;">Order Status</th>
                                            <th  style="text-align: center;">Invoices</th>
                                            <th  style="text-align: center;">Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody id = "ongoing-order-table">
                                        <tr style = "background-color:white">
                                                       
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin:auto;" id="prev-orders">
            <div style="margin-top: 25px;" class="title-all text-center">
                    <h1>Previous Orders</h1>
            </div>
            <div class="wishlist-box-main" style="margin-top:30px;">
                <div class="container" style="margin:auto; " >
                    <div class="row">
                        <div class="col-lg-50">
                            <div class="table-main table-responsive" >
                                <table class="table" style="margin-left:0px; border:3px solid black ">
                                    <thead>
                                        <tr>
                                            <th  style="text-align: center;">Order Date</th>
                                            <th  style="text-align: center;">Recipient Name</th>
                                            <th  style="text-align: center;">Total Price</th>
                                            <th  style="text-align: center;">Products</th>
                                            <th  style="text-align: center;">Delivery Address</th>
                                            <th  style="text-align: center;">Order Status</th>
                                            <th  style="text-align: center;">Invoices</th>
                                            <th  style="text-align: center;">Return</th>
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
        </div>

</div>
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div  class="container">
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
    <div style="margin-bottom: 0px;" class="footer-copyright">
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


    <script type="text/javascript">
          $(document).ready(function(){
                     $.ajax({
                                    type: "GET",
                                    url: "http://" + <?php var_export($config["host"])?> + "/profile/orders",
                                    dataType: "json",
                                    headers: {"Authorization": "Bearer " + getToken()},
                                    success: function(result)
                                    {
                                        let productlist = result;
                                        console.log("---------");
                                        console.log(productlist);
                                        var prevcounter = 0;
                                        var ongoingcouter= 0 ;                                       
                                        productlist.orders.forEach(function(ab)
                                        {
                                            if(ab.Order.orderStatus == "Delivered" || ab.Order.orderStatus == "Cancelled")
                                            {
                                                prevcounter ++;
                                                value = ab.Order;
                                                if(value.orderStatus == "Delivered")
                                                {
                                                    document.getElementById("order-table").innerHTML +=
                                                    `
                                                    <tr style = "background-color:white">
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.orderdate+`</a>
                                                            </td>
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.name+`</a>
                                                            </td>
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.orderPrice+`</a> TL
                                                            </td>
                                                            <td id="product`+value.oid+`" class="name-pr">
                                                                    
                                                            </td>
                                                            <td class="price-pr">
                                                                <a style="text-align: center;"> `+value.shipAddress+`</a>
                                                            </td>

                                                            <td class="price-pr">
                                                                 <a name="cars" id="status`+value.orderStatus+`">
                                                                 `+value.orderStatus+`
                                                                 </a>
                                                            </td>
                                                            </td>
                                                            <td id="invoice`+value.oid+`" class="price-pr">
                                                                <a id="invoicelink`+value.oid+`" orderid=`+value.oid+` class="invoice" href="#" style="text-align: center;">Download PDF </a>
                                                            </td>

                                                            <td class="price-pr">
                                                                <button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-left: 0px; padding:10px; color:white; background-color:#d43c34;"id="refund`+value.oid+`" orderid=`+value.oid+` class="refund" style="text-align: center;">Refund </button>
                                                            </td>
                                                    </tr>

                                                    `  ;
                                                }
                                                else
                                                {
                                                    document.getElementById("order-table").innerHTML +=
                                                    `
                                                    <tr style = "background-color:white">
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.orderdate+`</a>
                                                            </td>
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.name+`</a>
                                                            </td>
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.orderPrice+`</a> TL
                                                            </td>
                                                            <td id="product`+value.oid+`" class="name-pr">
                                                                    
                                                            </td>
                                                            <td class="price-pr">
                                                                <a style="text-align: center;"> `+value.shipAddress+`</a>
                                                            </td>

                                                            <td class="price-pr">
                                                                 <a name="cars" id="status`+value.orderStatus+`">
                                                                 `+value.orderStatus+`
                                                                 </a>
                                                            </td>
                                                            </td>
                                                            <td id="invoice`+value.oid+`" class="price-pr">
                                                                <a id="invoicelink`+value.oid+`" orderid=`+value.oid+` class="invoice" href="#" style="text-align: center;">Download PDF </a>
                                                            </td>

                                                            <td class="price-pr">
                                                            </td>
                                                    </tr>

                                                    `  ;
                                                }
                                                 
                                                    value.OrderDetails.forEach(function(productx)
                                                    {
                                                        let productId  = "product"+value.oid;
                                                        document.getElementById(productId).innerHTML +=
                                                        `
                                                            <p> `+productx.Product.pname+` x `+productx.quantity+`</p>
                                                        `
                                                    });
                                                }
                                                else if(ab.Order.orderStatus == "Processing" || ab.Order.orderStatus == "On delivery")
                                                {
                                                    ongoingcouter ++;
                                                    value = ab.Order;
                                                    document.getElementById("ongoing-order-table").innerHTML +=
                                                    `
                                                    <tr style = "background-color:white">
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.orderdate+`</a>
                                                            </td>
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.name+`</a>
                                                            </td>
                                                            <td class="name-pr">
                                                                    <a style="text-align: center;">`+value.orderPrice+`</a> TL
                                                            </td>
                                                            <td id="xproduct`+value.oid+`" class="name-pr">
                                                                    
                                                            </td>
                                                            <td class="price-pr">
                                                                <a style="text-align: center;"> `+value.shipAddress+`</a>
                                                            </td>

                                                            <td class="price-pr">
                                                                 <a name="cars" id="status`+value.orderStatus+`">
                                                                 `+value.orderStatus+`
                                                                 </a>
                                                            </td>
                                                            </td>
                                                            <td id="invoice`+value.oid+`" class="price-pr">
                                                                <a id="invoicelink`+value.oid+`" orderid=`+value.oid+` class="invoice" href="#" style="text-align: center;">Download PDF </a>
                                                            </td>

                                                            <td class="price-pr">
                                                                <button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-left: 0px; padding:10px; color:white; background-color:#d43c34;"id="cancel`+value.oid+`" orderid=`+value.oid+` class="cancel" style="text-align: center;">Cancel </button>
                                                            </td>
                                                    </tr>

                                                    `   
                                                     
                                                        value.OrderDetails.forEach(function(productx)
                                                        {
                                                            let productId  = "xproduct"+value.oid;
                                                            document.getElementById(productId).innerHTML +=
                                                            `
                                                                <p> `+productx.Product.pname+` x `+productx.quantity+`</p>
                                                            `
                                                        });
                                                }

                                        });
                                        if(prevcounter == 0)
                                        {
                                             document.getElementById("prev-orders").innerHTML = 
                                             `
                                             `;
                                        }
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
                            url: "http://" + <?php var_export($config["host"])?> + "/order/invoice/" + oid,
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


           $(document).ready(function(){

                $(document).on('click', 'button.cancel',  function() 
                { 
                    var oid = jQuery(this).attr("orderid");
                    console.log(oid)

                     $.ajax({
                            type: "POST",
                            url: "http://" + <?php var_export($config["host"])?> + "/order/cancel/" + oid,
                            dataType: "json",
                            headers: {"Authorization": "Bearer " + getToken()},
                                success: function(result)
                                {
                                    alert("You have cancelled your order!");
                                        location.reload(true);
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

            $(document).ready(function(){

                $(document).on('click', 'button.refund',  function() 
                { 
                    var oid = jQuery(this).attr("orderid");
                    console.log(oid)

                     $.ajax({
                            type: "POST",
                            url: "http://" + <?php var_export($config["host"])?> + "/order/cancel/" + oid,
                            dataType: "json",
                            headers: {"Authorization": "Bearer " + getToken()},
                                success: function(result)
                                {
                                    alert("You have cancelled your order!");
                                        location.reload(true);
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

</body>

</html>