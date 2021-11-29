
<?php

$config = include('config.php');

?>

<script type="text/javascript">
        
    function getName() 
    {
            let xx = "";
            decodeURIComponent(document.cookie).split('; ').forEach(val => {

               if (val.indexOf("name=") === 0) {
                 console.log(val.substring("name=".length));
                 xx = val.substring("name=".length);
               };
           });
           return xx;
    }



</script>



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
                        <p>Call US :<a href="#"> (0216) 483 90 00</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li id="login-topbar">
                                <a href="login.php">Login/Register</a>
                            </li>
                            <li></li>
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>

                        <li class="dropdown">
                            <a href="shop.php" class="nav-link dropdown-toggle arrow">Product</a>

                            <ul class="dropdown-menu" id = genres-dropdown>
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
                                                            var genre = [];
                                                            products.genres.forEach(function(value){
                                                                    document.getElementById("genres-dropdown").innerHTML +=
                                                                        `<li>
                                                                            <a href="shop.php?genre=`+ value.genre+`">`+value.genre+`</a>
                                                                        </li>`;
                                                                
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
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Our Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="my-account.php">My Account</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div id="cartxdbox"class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul id = "cartbox" class="cart-list">

                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <form action="shop.php?searchVar" method="get">
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('#TextBoxId').keypress(function(e){
                                  if(e.keyCode==13)
                                  $('#linkadd').click();
                                });
                            });
                        </script>
                        <input type="text"  id="inputxt" name="searchVar" class="form-control" placeholder="Search">
                    </form>
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>

        </div>
    </div>


      <script type="text/javascript">

            if(getName())
            {
                var name = getName();
                document.getElementById("login-topbar").innerHTML = 
                `
                        <li id="login-topbar">
                                    <a style="color:white;">Welcome back, `+ name+`</a>

                        </li>
                `

                 document.getElementById("login-topbar").innerHTML += `
                         <li style="cursor: pointer">
                                    <a href="index.php" onclick="logoutfunction()" id="log-out" style="color:white;">Log out</a>   
                        </li>
                        `
            }
            function logoutfunction()
            {
                document.cookie = "token=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = "name=" + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }






           $(document).ready(function(){
                if(searchVar)
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
                                        products.products.forEach(function(value){
                                            document.getElementById("product-row").innerHTML +=
                                                `<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                    <div class="products-single fix">
                                                        <div class="box-img-hover">
                                                            <img src= "`+ value.productImgUrl +`" class="img-fluid" alt="Image">
                                                            <div class="mask-icon">
                                                                <ul>
                                                                    <li><a href="shop-detail.php?id=`+value.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                </ul>
                                                                <a class="cart" href="#">Add to Cart</a>
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
                    });


             $(document).on('click', 'li.log-out',  function() {
                    console.log("logedout");

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
                function createCookie(name, value, days) {
                var expires;
                        if (days) {
                            var date = new Date();
                            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                            expires = "; expires=" + date.toGMTString();
                        }
                        else {
                            expires = "";
                        }
                        document.cookie = name + "=" + value + expires + "; path=/";
                    }

                    function getCookie(c_name) {
                        if (document.cookie.length > 0) {
                            c_start = document.cookie.indexOf(c_name + "=");
                            if (c_start != -1) {
                                c_start = c_start + c_name.length + 1;
                                c_end = document.cookie.indexOf(";", c_start);
                                if (c_end == -1) {
                                    c_end = document.cookie.length;
                                }
                                return unescape(document.cookie.substring(c_start, c_end));
                            }
                        }
                        return "";
                    }



                if(!getToken())
                {
                        if(getCookie('mycookie'))
                        {
                                var json_str = getCookie('mycookie');
                                var arr = JSON.parse(json_str);

                                console.log("xda");
                                console.log(arr);
                                var orderPrice = 0;
                                arr.forEach(function(value)
                                {
                                     $.ajax({
                                                    type: "GET",
                                                    url: "http://" + <?php var_export($config["host"])?> + "/products/"+ value[0],
                                                    dataType: "json",
                                                    success: function(featuredpr)
                                                    {
                                                            let product_result = featuredpr;
                                                            console.log(product_result);
                                                            orderPrice += product_result.product.price;
                                                            document.getElementById("cartbox").innerHTML +=
                                                            `
                                                                <li>
                                                                    <a href="shop-detail.php?id=`+product_result.product.prid+`" class="photo"><img src="`+product_result.product.productImgUrl+`" class="cart-thumb" alt="" /></a>
                                                                    <h6><a href="shop-detail.php?id=`+product_result.product.prid+`"> `+product_result.product.pname+` </a></h6>
                                                                    <p>`+value[1]+`x - <span class="price">`+product_result.product.price+` TL</span></p>
                                                                </li>
                                                            `
                                                            ;
                                                    },
                                                    error: function(jqXHR, exception) {
                                                            alert("Products cant be accessed");
                                                          }
                                                            }).done(function( msg ) {

                                                        //alert(msg.message );
                                                    });
                                 });
                                $(document).ready(function(){
                                    document.getElementById("cartbox").innerHTML +=
                                        `
                                            <li class="total">
                                                <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                                <span class="float-right"><strong>Total</strong>: `+orderPrice+` TL</span>
                                            </li>
                                                                    
                                        `;

                                    });
                        }
                        else
                        {
                            document.getElementById("cartbox").innerHTML =
                                `
                                    <li class="total">
                                        <a href="shop.php" class="btn btn-default hvr-hover btn-cart">YOUR CART IS EMPTY</a>       
                                    </li>
                                `
                                ;


                        }
                }
                else
                {
                    $(document).ready(function(){
                         $.ajax({
                                        type: "GET",
                                        url: "http://" + <?php var_export($config["host"])?> + "/order/cart",
                                        dataType: "json",
                                        headers: {"Authorization": "Bearer " + getToken()},
                                        success: function(result)
                                        {
                                            let productlist = result;
                                            console.log(productlist);
                                            if(productlist.cart.length != 0)
                                            {
                                                var orderPrice = 0;
                                                productlist.cart.forEach(function(value)
                                                {
                                                    var totalPrice = parseInt(value.Product.price) * parseInt(value.quantity);
                                                    orderPrice += totalPrice;
                                                    document.getElementById("cartbox").innerHTML +=
                                                    `
                                                        <li>
                                                            <a href="shop-detail.php?id=`+value.Product.prid+`" class="photo"><img src="`+value.Product.productImgUrl+`" class="cart-thumb" alt="" /></a>
                                                            <h6><a href="shop-detail.php?id=`+value.Product.prid+`"> `+value.Product.pname+` </a></h6>
                                                            <p>`+value.quantity+`x - <span class="price">`+totalPrice+` TL</span></p>
                                                        </li>
                                                    `
                                                    ;
                                                });

                                                document.getElementById("cartbox").innerHTML +=
                                                    `
                                                        <li class="total">
                                                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                                                            <span class="float-right"><strong>Total</strong>: `+orderPrice+` TL</span>
                                                        </li>
                                                                                
                                                    `;
                                            }
                                            else
                                            {
                                                document.getElementById("cartbox").innerHTML ="" ;
                                                
                                                document.getElementById("cartbox").innerHTML = "";


                                            }
                                       },
                                      error: function(jqXHR, exception) 
                                      {
                                        alert("Cart cant be accessed");
                                      }
                                }).done(function( msg ) 
                                {

                                //alert(msg.message );
                              });
                            });
                }

    </script>
    <!-- End Top Search -->