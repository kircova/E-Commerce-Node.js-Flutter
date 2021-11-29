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




<script type="text/javascript">
        

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
                            
                <div style="margin-bottom:20px; margin-top:20px;" class="submit-button text-center">
                    <input  type ="text" style="text-align: center;" id="myInput" onkeyup="myFunction()"  placeholder="Search for items">
                    <i class="fa fa-search"></i>
                </div>

                <div class="submit-button text-center">
                    <input  style="text-align: center; width:60px;" id="stock" type="number" name="stock" placeholder="50"> %
                    <div style="margin-top: 15px;" id="butonlan">
                        <button disabled class="btn hvr-hover" style="color:white;" id="button-addproduct"> Discount for Selected Products</button>
                    </div>
                </div>


     <div class="wishlist-box-main" style="margin-top:30px;">
        <div class="container" style="margin-left:auto;" >
            <div class="row">
                <div class="col-lg-50">
                    <div class="table-main table-responsive" >
                        <table class="table" style="margin-left:0px; border:3px solid black ">
                            <thead>
                                <tr>
                                    <th  style="text-align: center;">Images</th>
                                    <th  style="text-align: center;">Product Name</th>
                                    <th  style="text-align: center;">Unit Price ₺</th>
                                     <th  style="text-align: center;">Discounted Price ₺</th>
                                </tr>
                            </thead>
                            <tbody id = "products-table">
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

        var discountProducts = new Array;
        var discountedPrices = new Array;

        function RemoveElement(element, arrayx, arrayd)
        {
            var i;
            var index = arrayx.indexOf(element);
            if(index > -1)
            {
                arrayx.splice(index,1);
                arrayd.splice(index,1);
            }
            return arrayx;
        }

        $(document).ready(function(){
             $.ajax({
                            type: "GET",
                            url: "http://" + <?php var_export($config["host"])?> + "/products/all",
                            dataType: "json",
                            success: function(result)
                            {
                                let productlist = result;
                                console.log(productlist);                                        
                                productlist.products.forEach(function(value)
                                {
                                    document.getElementById("products-table").innerHTML +=
                                        ` 
<tr id="prod`+value.prid+`" class="discountpr" style="cursor: pointer" onclick="productDiscount(\``+value.prid+`\`, \``+value.pname+`\`, \``+value.productImgUrl+`\`, \``+value.price+`\`, \``+value.discountedPrice+`\`)" >
                                            <input type="hidden" id="ispressed`+value.prid+`"  value="0"></input>
                                                        <td value=" `+value.pname+`">
                                                            <div class="thumbnail-img">
                                                                <a href="#">
                                                                    <img class="img-fluid" src="`+value.productImgUrl+`" alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                            <td class="name-pr">
                                                                <input  disabled style="text-align: center;" type="text" name ="pname" value="`+value.pname+`">
                                                        </td>
                                                        <td class="price-pr">
                                                            <input disabled style="text-align: center;" type="number" name="pprice" value="`+value.price+`">  ₺
                                                        </td>

                                                        <td class="add-pr" style="text-align: center;">
                                                            <input  disabled style="text-align: center;" type="number" name="pstock" value="`+value.discountedPrice+`"> ₺
                                                        </td>
                                            </tr>
                                    ` ;
                                });
                           },
                          error: function(jqXHR, exception) 
                          {
                            alert("Products cant be accessed");
                          }
                    }).done(function( msg ) 
                    {

                    //alert(msg.message );
                  });
                });

            function productDiscount(xd, name, img, price, discountprice)
            {
                 console.log("xd");
                 console.log(xd);
                 console.log(name);
                 console.log(img);
                 console.log(price);
                 console.log(discountprice);

                 var ispressed = document.getElementById('ispressed'+xd).value;

                 console.log(ispressed);

                 if(ispressed == 0)
                 {
                     document.getElementById("prod"+xd).innerHTML =
                     `
                                                 <input type="hidden" id="ispressed`+xd+`"  value="1"></input>
                                                            <td value="`+name+`" style="background-color:#ecffa8;">
                                                                <div class="thumbnail-img">
                                                                    <a href="#">
                                                                        <img class="img-fluid" src="`+img+`" alt="" />
                                                                    </a>
                                                                </div>
                                                            </td>
                                                                <td style ="background-color:#ecffa8;" class="name-pr">
                                                                    <input  disabled style="text-align: center;" type="text" name ="pname" value="`+name+`">
                                                            </td>
                                                            <td style="background-color:#ecffa8;" class="price-pr">
                                                                <input disabled style="text-align: center;" type="number" name="pprice" value="`+price+`">  ₺
                                                            </td>

                                                            <td style="background-color:#ecffa8;"class="add-pr" style="text-align: center;">
                                                                <input  disabled style="text-align: center;" type="number" name="pstock" value="`+discountprice+`"> ₺
                                                            </td>
                    `;
                    discountProducts.push(xd);
                    discountedPrices.push(price);
                    console.log(discountProducts);
                    if(discountProducts.length != 0)
                    {
                        document.getElementById("butonlan").innerHTML = 
                        `<button class="btn hvr-hover" style="color:white;" id="button-addproduct"> Discount for Selected Products</a>
                        `;
                    }
                }
                else
                {
                    document.getElementById("prod"+xd).innerHTML =
                     `
                                                 <input type="hidden" id="ispressed`+xd+`"  value="0"></input>
                                                            <td value="`+name+`">
                                                                <div class="thumbnail-img">
                                                                    <a href="#">
                                                                        <img class="img-fluid" src="`+img+`" alt="" />
                                                                    </a>
                                                                </div>
                                                            </td>
                                                                <td >
                                                                    <input  disabled style="text-align: center;" type="text" name ="pname" value="`+name+`">
                                                            </td>
                                                            <td >
                                                                <input disabled style="text-align: center;" type="number" name="pprice" value="`+price+`">  ₺
                                                            </td>

                                                            <td>
                                                                <input  disabled style="text-align: center;" type="number" name="pstock" value="`+discountprice+`"> ₺
                                                            </td>
                    `;
                    console.log(discountProducts);
                    discountProducts = RemoveElement(xd, discountProducts, discountedPrices);

                    if(discountProducts.length == 0)
                    {
                        document.getElementById("butonlan").innerHTML = 
                        `<button disabled class="btn hvr-hover" style="color:white;" id="button-addproduct" > Discount for Selected Products</a>
                        `;
                    }
                }
            }



            $(document).on('click', "#button-addproduct", function() {
                         
                        var discount = jQuery(this).parent().prev().val();
                        var counter = 0;
                        discountProducts.forEach(function(value)
                        {
                            var id = value;
                            var priced = parseInt(discountedPrices[counter]) * discount / 100 ;
                            console.log(counter);
                            console.log(discountProducts.length);
                               $.ajax({
                                  type: "POST",
                                  url: "http://" + <?php var_export($config["host"])?> + "/smanager/discount/apply", // "http://localhost:3000/user/login"
                                  data: {
                                    prid:id,
                                    discountedPrice: priced,
                                     },
                                    headers: {"Authorization": "Bearer " + getToken()},  
                                  dataType: "json",
                                  success: function(result){
                                    if(counter >= (discountProducts.length -1))
                                    {
                                            alert("Discount is applied!");
                                            location.reload(true);
                                    }
                                    // use cookies
                                  },
                                  error: function(jqXHR, exception) {
                                    alert("Log in expired, please log in again!");
                                  }

                              });
                               counter ++;

                        });
                    });



        function myFunction() {
          // Declare variables
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById('myInput');

          filter = input.value.toUpperCase();

          ul = document.getElementById("products-table");
          li = ul.getElementsByTagName('tr');


          // Loop through all list items, and hide those who don't match the search query
          for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("td")[0].getAttribute("value");
            if (a.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
            } else {
              li[i].style.display = "none";
            }
          }
        }

        </script>
    </body>
</html>
