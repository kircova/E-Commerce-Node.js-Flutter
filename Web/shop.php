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

  <?php include "header_searchbar.php";?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="shop.php?searchVar" method="get">
                                <input class="form-control" name="searchVar" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Genres</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-genre" data-children=".sub-men">

                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                                    <script type="text/javascript">
                                         var products;
                                                $(document).ready(function(){
                                                    $.ajax({
                                                        type: "GET",
                                                        url: "http://" + <?php var_export($config["host"])?> + "/products/genres",
                                                        dataType: "json",
                                                        success: function(result){
                                                            let products = result;
                                                            products.genres.forEach(function(value){
                                                                    document.getElementById("list-group-genre").innerHTML +=
                                                                        `<a href="shop.php?genre=`+ value.genre+`" class="list-group-item list-group-item-action"> `+ value.genre + ` <small class="text-muted"> </small></a>`;
                                                            });
                                                    // use cookies
                                                  },
                                                  error: function(jqXHR, exception) {
                                                    alert("Products cant be accessed");
                                                  }
                                                    }).done(function( msg ) {

                                                //alert(msg.message );
                                              });
                                            });
                                    </script>
                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <form action="shop.php?param1&param2" method="get">
                                    <div style = "text-align:center;"class="price-box-slider">
                                            <row>
                                                <input style="width: 25%" name="param1" type="number" value="1">
                                                ₺ from to 
                                                <input style="width: 25%" name="param2" type="number" value="1000">
                                                ₺
                                            </row>
                                    </div>
                                <button style = "margin-top: 5px; width: 100%; color:white"class="btn hvr-hover" type="submit">Filter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
    									<option value="0" data-display="Select">Nothing</option>
    									<option value="1">Popularity</option>
    									<option value="2">Price Increasing</option>
    									<option value="3">Price Decreasing</option>
                                        <option value="4">Alphabetical (A-Z)</option>
								</select>
                                </div>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row" id="product-row">

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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
                                <li><a href="shop.php?param1=150&param2=299">About Us</a></li>
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


    <script type="text/javascript">

            function GetBasic()
            {
                console.log(basic.value);


                if(basic.value == 1)
                {
                     $.ajax({
                        type: "GET",
                        url: "http://" + <?php var_export($config["host"])?> + "/products/featured",
                        dataType: "json",
                        success: function(result){
                            let products = result;
                            var featured = [];
                            console.log(products);
                            document.getElementById("product-row").innerHTML = "";      
                            products.values.forEach(function(ida){
                                        $.ajax({
                                            type: "GET",
                                            url: "http://" + <?php var_export($config["host"])?> + "/products/"+ ida[0],
                                            dataType: "json",
                                            success: function(value)
                                            {
                                                console.log(value);
                                                if(value.product.stock != 0)
                                                {
                                                    document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                    <img src= "`+ value.product.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.product.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
                                                }
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.product.prid+`"
                                                                        <h4>`+ value.product.pname + `</h4>
                                                                        <h3>`+ value.product.artist + `</h3>
                                                                        <h5> ` + "₺" + value.product.price  +`</h5>
                                                                     </a>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>`;
                                                    }
                                                    else
                                                    {
                                                        document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.product.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.product.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.product.prid+`"
                                                                        <h4>`+ value.product.pname + `</h4>
                                                                        <h3>`+ value.product.artist + `</h3>
                                                                        <h5> ` + "₺" + value.product.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                                    }

                                            },
                                            error: function(jqXHR, exception) {
                                                    alert("Products cant be accessed");
                                                  }
                                                    }).done(function( msg ) {

                                                //alert(msg.message );
                                            });
                            });
                          },
                          error: function(jqXHR, exception) {
                            alert("Products cant be accessed");
                          }
                            }).done(function( msg ) {

                        //alert(msg.message );
                      });

                }
                else if(basic.value == 0)
                    {
                          $.ajax({
                                type: "GET",
                                url: "http://" + <?php var_export($config["host"])?> + "/products/all",
                                dataType: "json",
                                success: function(result){
                                    let products = result;

                                    document.getElementById("product-row").innerHTML = "";                           
                                    products.products.forEach(function(value)
                                    {
                                        console.log(value);
                                        if(value.stock != 0)
                                        {
                                        document.getElementById("product-row").innerHTML +=
                                            `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            </ul>
                                                            <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <a href="shop-detail.php?id=`+value.prid+`"
                                                            <h4>`+ value.pname + `</h4>
                                                            <h3>`+ value.artist + `</h3>
                                                            <h5> ` + "₺" + value.price  +`</h5>
                                                         </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>`;
                                        }
                                        else
                                        {
                                            document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                        }

                                    }
                                );
                                                           },
                                error: function(jqXHR, exception) 
                                          {
                                            alert("Products cant be accessed");
                                           }
                                            }).done(function( msg ) {

                                    //alert(msg.message );
                                  });
                }
                 else if(basic.value == 4)
                    {
                          $.ajax({
                                type: "GET",
                                url: "http://" + <?php var_export($config["host"])?> + "/products/filter/alphabetical/increase",
                                dataType: "json",
                                success: function(result){
                                    let products = result;
                                    document.getElementById("product-row").innerHTML = "";                           
                                    products.products.forEach(function(value){

                                        if(value.stock != 0)
                                        {
                                        document.getElementById("product-row").innerHTML +=
                                            `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            </ul>
                                                            <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <a href="shop-detail.php?id=`+value.prid+`"
                                                            <h4>`+ value.pname + `</h4>
                                                            <h3>`+ value.artist + `</h3>
                                                            <h5> ` + "₺" + value.price  +`</h5>
                                                         </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>`;
                                        }
                                        else
                                        {
                                            document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.product.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.product.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                        }
                                });
                                                           },
                                error: function(jqXHR, exception) 
                                          {
                                            alert("Products cant be accessed");
                                           }
                                            }).done(function( msg ) {

                                    //alert(msg.message );
                                  });

                }
                else if(basic.value == 3)
                {
                    $.ajax({
                                type: "GET",
                                url: "http://" + <?php var_export($config["host"])?> + "/products/filter/price/decrease",
                                dataType: "json",
                                success: function(result){
                                    let products = result;
                                    document.getElementById("product-row").innerHTML = "";                           
                                    products.products.forEach(function(value){


                                        if(value.stock != 0)
                                        {
                                        document.getElementById("product-row").innerHTML +=
                                            `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            </ul>
                                                            <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <a href="shop-detail.php?id=`+value.prid+`"
                                                            <h4>`+ value.pname + `</h4>
                                                            <h3>`+ value.artist + `</h3>
                                                            <h5> ` + "₺" + value.price  +`</h5>
                                                         </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>`;
                                        }
                                        else
                                        {
                                            document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                        }
                                });
                                                           },
                                error: function(jqXHR, exception) 
                                          {
                                            alert("Products cant be accessed");
                                           }
                                            }).done(function( msg ) {

                                    //alert(msg.message );
                                  });

                }
                else if(basic.value == 2)
                {
                    $.ajax({
                                type: "GET",
                                url: "http://" + <?php var_export($config["host"])?> + "/products/filter/price/increase",
                                dataType: "json",
                                success: function(result){
                                    let products = result;
                                    document.getElementById("product-row").innerHTML = "";                           
                                    products.products.forEach(function(value){

                                        if(value.stock != 0)
                                        {
                                        document.getElementById("product-row").innerHTML +=
                                            `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            </ul>
                                                            <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <a href="shop-detail.php?id=`+value.prid+`"
                                                            <h4>`+ value.pname + `</h4>
                                                            <h3>`+ value.artist + `</h3>
                                                            <h5> ` + "₺" + value.price  +`</h5>
                                                         </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>`;
                                        }
                                        else
                                        {
                                            document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                        }
                                });
                                                           },
                                error: function(jqXHR, exception) 
                                          {
                                            alert("Products cant be accessed");
                                           }
                                            }).done(function( msg ) {

                                    //alert(msg.message );
                                  });

                    }
            }

            function GetURLParameter(sParam)
                {
                    var sPageURL = window.location.search.substring(1);
                    var sURLVariables = sPageURL.split('&');
                    for (var i = 0; i < sURLVariables.length; i++) 
                    {
                        var sParameterName = sURLVariables[i].split('=');
                        if (sParameterName[0] == sParam) 
                        {
                            return sParameterName[1];
                        }
                    }       
                };

                var genre = GetURLParameter('genre');
                var param1 = GetURLParameter('param1');
                var param2 = GetURLParameter('param2');
                var searchVar = GetURLParameter('searchVar');

                var basic = document.getElementById("basic");
                basic.onchange = GetBasic;

                var products;
                console.log(genre);
                console.log(param1);
                console.log(param2);

                $(document).ready(function(){
                    if(param1 && param2)
                    {   
                        if(parseInt(param1) < 0 )
                        {
                            param1 = "0";
                        }
                        if(parseInt(param2) < 0 )
                        {
                            param2 = "0";
                        }
                        $.ajax({
                            type: "GET",
                            url: "http://" + <?php var_export($config["host"])?> + "/products/filter/price/"+ param1 +"/"+param2,
                            dataType: "json",
                            success: function(result){
                                let products = result;
                                document.getElementById("product-row").innerHTML = "";                                       
                                products.products.forEach(function(value){

                                    if(value.stock != 0)
                                    {
                                    document.getElementById("product-row").innerHTML +=
                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        </ul>
                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                        <h4>`+ value.pname + `</h4>
                                                        <h3>`+ value.artist + `</h3>
                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                     </a>
                                                    
                                                </div>
                                            </div>
                                        </div>`;
                                    }
                                    else
                                    {
                                        document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                    }
                            });
                                                       },
                            error: function(jqXHR, exception) 
                                      {
                                        alert("Products cant be accessed");
                                       }
                                        }).done(function( msg ) {

                                //alert(msg.message );
                              });
                    }
                    else if(searchVar)
                    {
                        console.log(searchVar);
                        var query = searchVar;
                         $.ajax({
                            type: "POST",
                            url: "http://" + <?php var_export($config["host"])?> + "/products/search",
                            data: {query:query},
                            dataType: "json",
                            success: function(result){
                                console.log(result);
                                let products = result;
                                document.getElementById("product-row").innerHTML = "";                                        
                                products.products.forEach(function(value){
                                    if(value.stock != 0)
                                    {
                                    document.getElementById("product-row").innerHTML +=
                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        </ul>
                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                        <h4>`+ value.pname + `</h4>
                                                        <h3>`+ value.artist + `</h3>
                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                     </a>
                                                    
                                                </div>
                                            </div>
                                        </div>`;
                                    }
                                    else
                                    {
                                        document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                    }
                            });
                                                       },
                            error: function(jqXHR, exception) 
                                      {
                                        alert("Products cant be accessed");
                                       }
                                        }).done(function( msg ) {

                                //alert(msg.message );
                              });
                    }
                    else if(genre)
                    {
                        $.ajax({
                            type: "GET",
                            url: "http://" + <?php var_export($config["host"])?> + "/products/filter/genre/"+ genre,
                            dataType: "json",
                            success: function(result){
                                let products = result;
                                document.getElementById("product-row").innerHTML = "";                                              
                                products.products.forEach(function(value){
                                    if(value.stock != 0)
                                    {
                                    document.getElementById("product-row").innerHTML +=
                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        </ul>
                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                        <h4>`+ value.pname + `</h4>
                                                        <h3>`+ value.artist + `</h3>
                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                     </a>
                                                    
                                                </div>
                                            </div>
                                        </div>`;
                                    }
                                    else
                                    {
                                        document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                    }
                            });
                                                       },
                            error: function(jqXHR, exception) 
                                      {
                                        alert("Products cant be accessed");
                                       }
                                        }).done(function( msg ) {

                                //alert(msg.message );
                              });
                        }
                        else
                        {
                             $.ajax({
                                    type: "GET",
                                    url: "http://" + <?php var_export($config["host"])?> + "/products/all",
                                    dataType: "json",
                                    success: function(result){
                                        let products = result;
                                        document.getElementById("product-row").innerHTML = "";
                                        console.log(result);                                              
                                        products.products.forEach(function(value){
                                            if(value.stock != 0)
                                            {
                                            document.getElementById("product-row").innerHTML +=
                                                `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                    <div class="products-single fix">
                                                        <div class="box-img-hover">
                                                            <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                            <div class="mask-icon">
                                                                <ul>
                                                                    <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                </ul>
                                                                <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+value.prid+`" >Add to Cart</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="why-text">
                                                            <a href="shop-detail.php?id=`+value.prid+`"
                                                                <h4>`+ value.pname + `</h4>
                                                                <h3>`+ value.artist + `</h3>
                                                                <h5> ` + "₺" + value.price  +`</h5>
                                                             </a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>`;
                                            }
                                            else
                                            {
                                                document.getElementById("product-row").innerHTML +=
                                                        `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                            <div class="products-single fix">
                                                                <div class="box-img-hover">
                                                                <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                    <div class="mask-icon">
                                                                        <ul>
                                                                            <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#808080;" >Out of Stock</button>
</a>
                                                                    </div>
                                                                </div>
                                                                <div class="why-text">
                                                                    <a href="shop-detail.php?id=`+value.prid+`"
                                                                        <h4>`+ value.pname + `</h4>
                                                                        <h3>`+ value.artist + `</h3>
                                                                        <h5> ` + "₺" + value.price  +`</h5>
                                                                     </a>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                            }
                                        });
                                // use cookies
                                   },
                                  error: function(jqXHR, exception) 
                                  {
                                    alert("Products cant be accessed");
                                   }
                                    }).done(function( msg ) {

                            //alert(msg.message );
                          });
                        }  
            });
        </script>


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

                $(document).on('click', 'button.cart',  function() 
                {
                    var prid = jQuery(this).val();
                    console.log("xd");
                    console.log(prid);
                    if(!getToken())
                    {
                        if(getCookie('mycookie'))
                        {
                                var json_str = getCookie('mycookie');
                                var arr = JSON.parse(json_str);

                                console.log("yarra");
                                console.log(arr);

                                var isFound = 0;

                                for(var i = 0; i < arr.length; i++)
                                {
                                    if(arr[i][0] == parseInt(prid))
                                    {
                                        arr[i][1] = arr[i][1] + 1;
                                        isFound = 1;
                                    }
                                }
                                if(isFound == 0)
                                {
                                    arr.push([parseInt(prid),1]);
                                }

                                console.log(arr);

                                var json_str = JSON.stringify(arr);
                                createCookie('mycookie', json_str);

                                alert("Item is added to cart");
                                location.reload(true);
                        }
                        else
                        {
                            var arr = [];

                            arr.push([parseInt(prid),1]);

                            console.log(arr);

                            var json_str = JSON.stringify(arr);
                            createCookie('mycookie', json_str);

                            alert("Item is added to cart");
                            location.reload(true);
                        }
                    }
                    else
                    {
                         $.ajax({
                                          type: "POST",
                                          url: "http://" + <?php var_export($config["host"])?> + "/order/cart/add/" + prid +"/1", // "http://localhost:3000/user/login"
                                          dataType: "json",
                                          headers: {"Authorization": "Bearer " + getToken()},

                                          success: function(result){
                                            alert(result.message);
                                            location.reload(true);
                                            // use cookies
                                          },
                                          error: function(jqXHR, exception) {
                                            alert(jqXHR.responseJSON.message);
                                          }
                                      });

                    }

                }); 




        </script>


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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>