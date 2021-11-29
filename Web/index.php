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

</script>

<body>
    <?php include "header_searchbar.php";?>
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="https://aestheticmag.files.wordpress.com/2015/06/gambino4-erik-voake.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Vinly</strong></h1>
                            <p class="m-b-40">Listen to music</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="https://www.cumhuriyet.com.tr/Archive/2017/8/21/807766_cover.jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Vinly</strong></h1>
                            <p class="m-b-40">Gerçek müzik dinle </p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="https://www.gundemtube.com/wp-content/uploads/2020/03/maxresdefault-8.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Vinly</strong></h1>
                            <p class="m-b-40">Buy your favorite albums</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div style = "margin-bottom: 0px; " class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://pbs.twimg.com/profile_images/1332762258435428352/RBYtg6ip_400x400.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?genre=ARABESK">Arabesk</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://img.discogs.com/WOxkBkOZwxF9EnGeeOjHHQlFc-4=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-8356776-1460024037-6252.jpeg.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?genre=RAP">Rap</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://pbs.twimg.com/media/ELtWheKUUAA7wHY.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?genre=SOUNDTRACK">Soundtrack</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="https://img.jakpost.net/c/2020/03/31/2020_03_31_91307_1585623595._large.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.php?genre=POP">Pop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->



    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
             <div class="products-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-all text-center">
                                    <h1>Featured Products</h1>
                                    <p> These products have been sold the most over the months</p>
                                </div>
                            </div>
                        </div>

                        <div id = "featured-products" class="row special-list">

                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Team</h1>
                        <p>Development team</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="https://media-exp1.licdn.com/dms/image/C4D03AQE8A57xgVcpuQ/profile-displayphoto-shrink_200_200/0/1617668068793?e=1625097600&v=beta&t=looApLUngITyddE5g_xhgDlVbN3hlfXH6aBwQdkjFEs" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Yusufhan Kırçova</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="https://media-exp1.licdn.com/dms/image/C4D03AQH3TWA-2pl39w/profile-displayphoto-shrink_200_200/0/1607104832636?e=1625097600&v=beta&t=hkllgi7M2U4ObcsSoDsxdGA8raTH2grR12yqxSi6dEw" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Baran Çimen</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="https://media-exp1.licdn.com/dms/image/C4D03AQFgG86QaZIo6Q/profile-displayphoto-shrink_200_200/0/1615390058338?e=1625097600&v=beta&t=xuxBp_2S_9g7oAm9LzCASokbu2MWTOLWeT4vMVSnU0c" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Jankat Yaşar</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="https://media-exp1.licdn.com/dms/image/C4D03AQEYP9q8WhYZNQ/profile-displayphoto-shrink_200_200/0/1610015444915?e=1625097600&v=beta&t=DmahAuFxSVOhE-NlCORErKIqVr2caWUv4stpZsAIyvA" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Batuhan Demir</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="https://media-exp1.licdn.com/dms/image/C5603AQGOLN8cru5MqQ/profile-displayphoto-shrink_200_200/0/1609960863763?e=1625097600&v=beta&t=uJwZ6VrrQssGpgKykciyDv-Y8rqRmAQj--Xc-Ay-6Sw" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Işıl <br>Sefünç</br></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="blog-box">
                        <div class="blog-img">
                           
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Faik <br> Şahin</br></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->

    <?php include "bottom_footer.php";?>

    <script type="text/javascript">
         var products;
                $(document).ready(function(){
                    $.ajax({
                        type: "GET",
                        url: "http://" + <?php var_export($config["host"])?> + "/products/featured",
                        dataType: "json",
                        success: function(result){
                            let products = result;
                            var featured = [];
                            console.log(products);
                            let counterx = 0;
                            products.values.forEach(function(value){
                                    counterx++;
                                    if(counterx < 5)
                                    {

                                        $.ajax({
                                            type: "GET",
                                            url: "http://" + <?php var_export($config["host"])?> + "/products/"+ value[0],
                                            dataType: "json",
                                            success: function(featuredpr)
                                            {
                                                    let product_result = featuredpr;
                                                    console.log(product_result);
                                                    document.getElementById("featured-products").innerHTML +=
                                                        `
                                                        <div class="col-lg-3 col-md-6 special-grid best-seller">
                                                                        <div class="products-single fix">
                                                                            <div class="box-img-hover">
                                                                                <img src="`+product_result.product.productImgUrl+`" class="img-fluid" alt="Image">
                                                                                <div class="mask-icon">
                                                                                    <ul>
                                                                                        <li><a href="shop-detail.php?id=`+product_result.product.prid+`" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                                    </ul>
                                                                                                                                                <a>
<button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; padding:5px; color:white; background-color:#d43c34;" class="cart" value= "`+product_result.product.prid+`" >Add to Cart</button>
</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="why-text">
                                                                                <a href="shop-detail.php?id=`+product_result.product.prid+`"
                                                                                    <h4>`+ product_result.product.pname+`</h4>
                                                                                    <h5> ₺`+product_result.product.price+`</h5>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                            </div>
                                                        `;

                                            },
                                            error: function(jqXHR, exception) {
                                                    alert("Products cant be accessed");
                                                  }
                                                    }).done(function( msg ) {

                                                //alert(msg.message );
                                            });
                                    }
                            });
                  },
                  error: function(jqXHR, exception) {
                    alert("Products cant be accessed");
                  }
                    }).done(function( msg ) {

                //alert(msg.message );
              });
            });

    </script>

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>




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
                    else{
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