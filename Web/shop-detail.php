<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<script type="text/javascript">


</script>


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
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img id ="product-image" class="d-block w-100" src="images/big-img-01.jpg" alt="First slide">
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2 id = "product-name">Product Name</h2>
                        <h5 id = "product-price"> <del>$ 60.00</del> $40.79</h5>


                        <p id = "product-stock" class="available-stock"><span> Stock </a></span>
                            <p>
                                <h5 id = "product-rating" class = "fa fa-star unchecked">  </h5>
                                <h5 id = "product-rating" class = "fa fa-star">  </h5>
                                <h5 id = "product-rating" class = "fa fa-star">  </h5>
                                <h5 id = "product-rating" style = "color:gray" class = "fa fa-star">  </h5>
                                <h5 id = "product-rating" style = "color:gray" class = "fa fa-star">  </h5>

                                <h4>Product Description:</h4>
                                <p id="product-description"></p>
                                <h4> Song List </h4>
                                <ul>
                                        <li>
                                            <div id ="product-songs" class="form-group quantity-box">
                                            </div>
                                        </li>
                                </ul>

                                <div id="buying-buttons" class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a>
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
                                    </div>
                                </div>

                                    <div id="write-review" class="form-group">
                                        <div class="title-all text-center">
                                            <h1> Write a review for this Product</h1>
                                        </div>
                                        <div id = "rating-stars">
                                            <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star"> </button>
                                            <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star"> </button>
                                            <button id = "3" style="color:red;" ispressed = "on" value= "3" class = "fa fa-star">  </button>
                                            <button id = "4" style="color:red;" ispressed = "on" value= "4" class = "fa fa-star">  </button>
                                            <button id = "5" style="color:red;" ispressed = "on" value= "5" class = "fa fa-star">  </button>
                                        </div>

                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                        <button style = "cursor: pointer; margin-top:10px; padding:8px; color:white; background-color:#d33b33;" class="customer-review"></i> Write a customer review</button>
                                    </div>

                                <div style="margin-top: 15px;" class="title-all text-center">
                                    <h1>Reviews</h1>
                                </div>

                                 <div class="row my-5">
                                    <div class="col-sm-8 col-lg-8">
                                        <div id ="review-users">
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>

            <!-- Start Products  -->
                <div class="products-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-all text-center">
                                    <h1>Similar Products</h1>
                                    <p>Products with the same genre</p>
                                </div>
                            </div>
                        </div>

                        <div stlye="margin-bottom: 200px;" id = "featured-products" class="row special-list">

                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- End Cart -->

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

       <script>

            const urlParams = new URLSearchParams(window.location.search);
            const myParam = urlParams.get('id');
            console.log(myParam);

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

                  if(!getToken())
                  {

                        document.getElementById("write-review").innerHTML = "";
                  }




         $(document).ready(function(){
                    $.ajax({
                        type: "GET",
                        url: "http://" + <?php var_export($config["host"])?> + "/products/"+ myParam,
                        dataType: "json",
                        success: function(result){

                                console.log(result.product);

                                document.getElementById("product-name").innerText = result.product.pname;
                                document.getElementById("product-price").innerText = "₺" + result.product.price;
                                if(result.product.stock > 0)
                                {
                                    document.getElementById("product-stock").innerText = result.product.stock + " available";
                                }
                                else
                                {
                                    document.getElementById("product-stock").innerText = " Out of stock";
                                }

                                document.getElementById("product-image").src = result.product.productImgUrl;
                                document.getElementById("product-description").innerText = result.product.description;


                                if(result.product.stock > 0)
                                {
                                document.getElementById("buying-buttons").innerHTML = 
                                `<div id="buying-buttons" class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                         <button value = "`+result.product.prid+`" style=" cursor: pointer; padding:8px; color:white; background-color:#d43c34" class="addToCart" data-fancybox-close="" >Add to Cart</button>

                                    </div>
                                </div>
                                `;
                                }
                                else
                                {
                                     document.getElementById("buying-buttons").innerHTML = 
                                    `<div id="buying-buttons" class="price-box-bar">
                                        <div class="cart-and-bay-btn">
                                             <button style=" padding:8px; color:white; background-color:#808080" data-fancybox-close="" >Out of Stock</button>

                                        </div>
                                    </div>
                                `;
                                }


                                result.product.Comments.forEach(function(value){

                                    document.getElementById("review-users").innerHTML +=
                                    `
                                    <div class="service-block-inner">
                                                <p>`+value.time.substring(0,10)+`</p>
                                                <h3>`+value.rating+` / 5</h3>
                                                <p>`+value.com_text+`  </p>
                                    </div>
                                    `
                                });


                                result.product.Songs.forEach(function(value){

                                    document.getElementById("product-songs").innerHTML +=
                                        `
                                            <label class="control-label"> `+ value.TrackNumber+ "-"+ value.songname +`</label><br>
                                        `
                                });
                                $.ajax({
                                    type: "GET",
                                    url: "http://" + <?php var_export($config["host"])?> + "/products/similar/"+ result.product.genre +"/" + myParam,
                                    dataType: "json",
                                        success: function(featured_products){
                                            console.log(featured_products);
                                            let counter = 0;
                                            featured_products.products.forEach(function(var_featured_products){
                                                if(counter < 4)
                                                {
                                                    if(var_featured_products.stock != 0)
                                                    {
                                                        document.getElementById("featured-products").innerHTML +=

                                                        `
                                                            <div class="col-lg-3 col-md-6 special-grid best-seller">
                                                                <div class="products-single fix">
                                                                    <div class="box-img-hover">
                                                                        <img src="`+var_featured_products.productImgUrl+`" class="img-fluid" alt="Image">
                                                                        <div class="mask-icon">
                                                                            <ul>
                                                                                <li><a href="shop-detail.php?id=`+var_featured_products.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                            </ul>
                        <button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+var_featured_products.prid+`" >Add to Cart</button> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="why-text">
                                                                        <a href="shop-detail.php?id=`+var_featured_products.prid+`"
                                                                            <h4>`+ var_featured_products.pname+`</h4>
                                                                            <h5> ₺`+var_featured_products.price+`</h5>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        `;
                                                    }
                                                    else
                                                    {
                                                                                                                `
                                                            <div class="col-lg-3 col-md-6 special-grid best-seller">
                                                                <div class="products-single fix">
                                                                    <div class="box-img-hover">

                                                                    <div style="position:relative; text-align:center; color:white;" class="container">
                                                                    <img src= "`+ var_featured_products.productImgUrl +`" class="img-fluid" alt="Image">
                                                                    <div style="color:#d43c34; position:absolute; top:8px; right:16px;" class="centered"><b>Out of Stock</b></div>
                                                                </div>
                                                                        <div class="mask-icon">
                                                                            <ul>
                                                                                <li><a href="shop-detail.php?id=`+var_featured_products.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                            </ul>
                                                                        <a>
<button style="border: 0; box-shadow:none; border-radius:0px; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" >Out of Stock</button>
</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="why-text">
                                                                        <a href="shop-detail.php?id=`+var_featured_products.prid+`"
                                                                            <h4>`+ var_featured_products.pname+`</h4>
                                                                            <h5> ₺`+var_featured_products.price+`</h5>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        `;
                                                    }
                                                }
                                                counter++;
                                            });
                                  },
                                  error: function(jqXHR, exception) {
                                    alert("Products cant be accessed");
                                  }
                                    }).done(function( msg ) {

                                //alert(msg.message );
                                  });
                    // use cookies
                  },
                  error: function(jqXHR, exception) {
                    alert("Products cant be accessed");
                  }
                    }).done(function( msg ) {

                //alert(msg.message );
                  });

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


                $(document).on('click', 'button.addToCart',  function() 
                {
                    var prid = jQuery(this).val();

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

                $(document).on('click', 'button.customer-review',  function() {

                          var review = jQuery(this).prev().prev().val();
                          var star1 = jQuery(this).prev().prev().prev().children().attr("ispressed");
                          var star2 = jQuery(this).prev().prev().prev().children().next().attr("ispressed");
                          var star3 = jQuery(this).prev().prev().prev().children().next().next().attr("ispressed");
                          var star4 = jQuery(this).prev().prev().prev().children().next().next().next().attr("ispressed");
                          var star5 = jQuery(this).prev().prev().prev().children().next().next().next().next().attr("ispressed");

                          if(review != "")
                          {
                              console.log(review);
                              if(star5 == "on")
                              {
                                    var rating = 5;
                                    $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/products/add/comment", // "http://localhost:3000/user/login"
                                      data: {
                                        rating:rating,
                                        text:review,
                                        prid: myParam,
                                         },
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
                              else if(star4 == "on")
                              {
                                    var rating = 4;
                                    $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/products/add/comment", // "http://localhost:3000/user/login"

                                      data: {
                                        rating:rating,
                                        text:review,
                                        prid: myParam,
                                         },
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
                              else if(star3 == "on")
                              {
                                    var rating = 3;
                                    $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/products/add/comment",

                                      data: {
                                        rating:rating,
                                        text:review,
                                        prid: myParam,
                                         },
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
                              else if(star2 == "on")
                              {
                                    var rating = 2;
                                    $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/products/add/comment", // "http://localhost:3000/user/login"

                                      data: {
                                        rating:rating,
                                        text:review,
                                        prid: myParam,
                                         },
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
                              else if(star1 == "on")
                              {
                                    var rating = 1;
                                    $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/products/add/comment", // "http://localhost:3000/user/login"

                                      data: {
                                        rating:rating,
                                        text:review,
                                        prid: myParam,
                                         },
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
                            }
                            else
                            {
                                alert("Your review must have a text");
                            }
                        });

                 $(document).on('click', 'button.fa-star',  function() {

                          var rate = jQuery(this).val();
                          var ispressed = jQuery(this).attr("ispressed");

                          if(rate == 1)
                          {
                            if(ispressed =="off")
                            {
                                 document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:black;" ispressed = "off" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:black;" ispressed = "off" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                            else if(ispressed =="on")
                            {
                                document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:black;" ispressed = "off" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:black;" ispressed = "off" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                          }
                          if(rate == 2)
                          {
                            if(ispressed =="off")
                            {
                                 document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:black;" ispressed = "off" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                            else if(ispressed =="on")
                            {
                                document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:black;" ispressed = "off" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:black;" ispressed = "off" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                          }
                          if(rate == 3)
                          {
                            if(ispressed =="off")
                            {
                                 document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:red;" ispressed = "on" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                            else if(ispressed =="on")
                            {
                                document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:black;" ispressed = "off" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                          }
                          if(rate == 4)
                          {
                            if(ispressed =="off")
                            {
                                 document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:red;" ispressed = "on" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:red;" ispressed = "on" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                            else if(ispressed =="on")
                            {
                                document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:red;" ispressed = "on" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:black;" ispressed = "off" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                          }
                          if(rate == 5)
                          {
                            if(ispressed =="off")
                            {
                                 document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:red;" ispressed = "on" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:red;" ispressed = "on" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:red;" ispressed = "on" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                            else if(ispressed =="on")
                            {
                                document.getElementById("rating-stars").innerHTML =
                                  `
                                    <button id = "1" style="color:red;" ispressed = "on" value = "1" class = "fa fa-star">  </button>
                                    <button id = "2" style="color:red;" ispressed = "on" value = "2" class = "fa fa-star">  </button>
                                    <button id = "3" style="color:red;" ispressed = "on" value= "3" class = "fa fa-star">  </button>
                                    <button id = "4" style="color:red;" ispressed = "on" value= "4" class = "fa fa-star">  </button>
                                    <button id = "5" style="color:black;" ispressed = "off" value= "5" class = "fa fa-star">  </button>
                                  `
                            }
                          }
                        });

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
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
