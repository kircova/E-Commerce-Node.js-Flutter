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
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody id="cart-table-body">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id = "order-cart">
                <div class="row my-5">
                    <div class="col-lg-6 col-sm-6">

                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-lg-8 col-sm-12"></div>
                    <div class="col-lg-4 col-sm-12">
                        <div id="orderbox" class="order-box">
                            <h3>Order summary</h3>
                            <div class="d-flex">
                                <h4>Sub Total</h4>
                                <div class="ml-auto font-weight-bold"> $ 130 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Discount</h4>
                                <div class="ml-auto font-weight-bold"> $ 40 </div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Coupon Discount</h4>
                                <div class="ml-auto font-weight-bold"> $ 10 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Tax</h4>
                                <div class="ml-auto font-weight-bold"> $ 2 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Shipping Cost</h4>
                                <div class="ml-auto font-weight-bold"> Free </div>
                            </div>
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Grand Total</h5>
                                <div class="ml-auto h5"> $ 388 </div>
                            </div>
                            <hr> 
                        </div>
                    </div>
                    <div class="col-12 d-flex shopping-box"><a href="checkout.php" class="ml-auto btn hvr-hover">Checkout</a> </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


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




                if(!getToken())
                {
                    if(getCookie('mycookie'))
                    {
                                var json_str = getCookie('mycookie');
                                var arr = JSON.parse(json_str);

                                console.log("xda");
                                console.log(arr.length);

                                if(arr.length != 0)
                                {
                                    var orderPricex= 0;
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

                                                    var totalPrice = parseInt(product_result.product.price) * parseInt(value[1]);
                                                    orderPricex += totalPrice;
                                                    console.log(totalPrice);
                                                    console.log(orderPricex);
                                                    document.getElementById("cart-table-body").innerHTML +=
                                                    `
                                                         <tr>
                                                            <td class="thumbnail-img">
                                                                <a href="shop-detail.php?id=`+product_result.product.prid+`">
                                                            <img class="img-fluid" src="`+product_result.product.productImgUrl+`" alt="" />
                                                                </a>
                                                            </td>
                                                            <td class="name-pr">
                                                                <a href="shop-detail.php?id=`+product_result.product.prid+`">
                                                                   `+product_result.product.pname+`
                                                                </a>
                                                            </td>
                                                            <td class="price-pr">
                                                                <p>₺`+product_result.product.price+`</p>
                                                            </td>
                                                            <td class="quantity-box">
                                                                <input prid="`+product_result.product.prid+`" prevval="`+value[1]+`" type="number" size="3" value="`+value[1]+`" min="0" step="1" class="updatecart">
                                                            </td>
                                                            <td class="total-pr">
                                                                <p>₺`+ totalPrice +`</p>
                                                            </td>
                                                            <td class="remove-pr">
                                                                <button class="deleteCart" style="cursor: pointer; width:30px; height:30px;" href="#">
                                                                   <i class="fas fa-times"></i>
                                                                   <input hidden tyle="text-align: center;" type="text" name="prid" value="`+product_result.product.prid+`">
                                                                   <input hidden tyle="text-align: center;" type="text" name="prid" value="`+product_result.product.quantity+`">
                                                                </button>
                                                            </td>
                                                        </tr>

                                                    `
                                                    ;

                                                        document.getElementById("orderbox").innerHTML =
                                                        `
                                                        <h3>Order summary</h3>
                                                        <div class="d-flex">
                                                            <h4>Sub Total</h4>
                                                            <div class="ml-auto font-weight-bold">`+orderPricex+` TL </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <h4>Discount</h4>
                                                            <div class="ml-auto font-weight-bold">0 TL </div>
                                                        </div>
                                                        <hr>
                                                            <div class="d-flex gr-total">
                                                                <h5>Grand Total</h5>
                                                                <div class="ml-auto h5"> `+orderPricex+` TL </div>
                                                            </div>
                                                        <hr> 
                                                        `;
                                                        },
                                                        error: function(jqXHR, exception) {
                                                                alert("Products cant be accessed");
                                                              }
                                                                }).done(function( msg ) {

                                                            //alert(msg.message );
                                                        });
                                                     });
                                            console.log(orderPricex);
                                    }
                                      else
                                    {
                                          $(document).ready(function(){

                                                        document.getElementById("cart-table-body").innerHTML =

                                                        `
                                                            <tr colspan="7">
                                                                <td colspan="7 rowspan = "5">
                                                                <div  style=" margin-top:30px; text-align:center;">
                                                                    <font size ="+2"> Your cart is empty</h3>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            
                                                        `;
                                                        
                                                        document.getElementById("order-cart").innerHTML = "";
                                                });
                                    }
                                         
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
                                                document.getElementById("cart-table-body").innerHTML +=
                                                `
                                                     <tr>
                                                        <td class="thumbnail-img">
                                                            <a href="shop-detail.php?id=`+value.Product.prid+`">
                                                        <img class="img-fluid" src="`+value.Product.productImgUrl+`" alt="" />
                                                            </a>
                                                        </td>
                                                        <td class="name-pr">
                                                            <a href="shop-detail.php?id=`+value.Product.prid+`">
                                                               `+value.Product.pname+`
                                                            </a>
                                                        </td>
                                                        <td class="price-pr">
                                                            <p>₺`+value.Product.price+`</p>
                                                        </td>
                                                        <td class="quantity-box">
                                                            <input prid="`+value.Product.prid+`" prevval="`+value.quantity+`" type="number" size="3" value="`+value.quantity+`" min="0" step="1" class="updatecart">
                                                        </td>
                                                        <td class="total-pr">
                                                            <p>₺`+ totalPrice +`</p>
                                                        </td>
                                                        <td class="remove-pr">
                                                            <button class="deleteCart" style="cursor: pointer; width:30px; height:30px;" href="#">
                                                               <i class="fas fa-times"></i>
                                                               <input hidden tyle="text-align: center;" type="text" name="prid" value="`+value.Product.prid+`">
                                                               <input hidden tyle="text-align: center;" type="text" name="prid" value="`+value.quantity+`">
                                                            </button>
                                                        </td>
                                                    </tr>

                                                `
                                                ;
                                            });
                                          

                                            document.getElementById("orderbox").innerHTML =
                                                `
                                                <h3>Order summary</h3>
                                                <div class="d-flex">
                                                    <h4>Sub Total</h4>
                                                    <div class="ml-auto font-weight-bold">`+orderPrice+` TL </div>
                                                </div>
                                                <div class="d-flex">
                                                    <h4>Discount</h4>
                                                    <div class="ml-auto font-weight-bold">0 TL </div>
                                                </div>
                                                <hr>
                                                    <div class="d-flex gr-total">
                                                        <h5>Grand Total</h5>
                                                        <div class="ml-auto h5"> `+orderPrice+` TL </div>
                                                    </div>
                                                <hr> 
                                                `;
                                        }
                                        else
                                        {
                                            document.getElementById("cart-table-body").innerHTML =

                                            `
                                                <tr colspan="7">
                                                    <td colspan="7 rowspan = "5">
                                                    <div  style=" margin-top:30px; text-align:center;">
                                                        <font size ="+2"> Your cart is empty</h3>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            `;
                                            
                                            document.getElementById("order-cart").innerHTML = "";


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
                 $(document).on('click', 'button.deleteCart',  function() {

                  var id = jQuery(this).children().next().val();
                  var quantity = jQuery(this).children().next().next().val();

                  console.log(id);
                  console.log(quantity);

                  if(!getToken())
                  {
                        var json_str = getCookie('mycookie');
                                var arr = JSON.parse(json_str);

                                console.log("yarra");
                                console.log(arr);

                                var isFound = 0;
                                var index = 0;
                                for(var i = 0; i < arr.length; i++)
                                {
                                    if(arr[i][0] == parseInt(id))
                                    {
                                        arr.splice(i,1);
                                    }
                                }
                                console.log(arr);
                                var json_str = JSON.stringify(arr);
                                createCookie('mycookie', json_str);

                                alert("Item is deleted from cart");
                                location.reload(true);                  
                            }
                  else
                  { 

                        $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/order/cart/remove/"+ id +"/"+ quantity,
                                      dataType: "json",
                                      headers: {"Authorization": "Bearer " + getToken()},
                                      success: function(result){
                                        alert("Product is removed from your cart!");
                                        location.reload(true);
                                        // use cookies
                                      },
                                      error: function(jqXHR, exception) {
                                        alert("Product can not be removed!");
                                      }
                                  });
                          }
                        });
                    });


    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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


            
            $(document).on('change','input.updatecart', function(e){

                 var prid = jQuery(this).attr("prid");
                 var quantity = jQuery(this).val();
                 var oldquantity = jQuery(this).attr("prevval");
                 console.log(prid);
                 console.log(quantity);
                 console.log(oldquantity);


                 if(quantity > oldquantity)
                 {
                    var difference = parseInt(quantity) - parseInt(oldquantity);

                    if(!getToken())
                    {

                                var json_str = getCookie('mycookie');
                                var arr = JSON.parse(json_str);

                                console.log("yarra");
                                console.log(arr);

                                var isFound = 0;
                                var index = 0;
                                for(var i = 0; i < arr.length; i++)
                                {
                                        if(quantity <= 0)
                                        {
                                            arr.splice(i,1);
                                        }
                                        else
                                        {
                                            arr[i][1] = quantity;
                                        }
                                }
                                console.log(arr);
                                var json_str = JSON.stringify(arr);
                                createCookie('mycookie', json_str);

                                alert("Item(s) added to cart");
                                location.reload(true);
                    }
                    else
                    {
                            $.ajax({
                                      type: "POST",
                                      url: "http://" + <?php var_export($config["host"])?> + "/order/cart/add/" + prid +"/" + difference,
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
                 else if(quantity < oldquantity)
                 {
                        var difference = oldquantity - quantity;
                        if(!getToken())
                        {
                                var json_str = getCookie('mycookie');
                                var arr = JSON.parse(json_str);

                                console.log("yarra");
                                console.log(arr);

                                var isFound = 0;
                                var index = 0;
                                for(var i = 0; i < arr.length; i++)
                                {
                                    if(arr[i][0] == parseInt(prid))
                                    {
                                        if(quantity <= 0)
                                        {
                                            arr.splice(i,1);
                                        }
                                        else
                                        {
                                            arr[i][1] = quantity;
                                        }
                                        
                                    }
                                }
                                console.log(arr);
                                var json_str = JSON.stringify(arr);
                                createCookie('mycookie', json_str);

                                alert("Item(s) removed from cart");
                                location.reload(true);


                        }
                        else
                        {

                            $.ajax({
                                  type: "POST",
                                  url: "http://" + <?php var_export($config["host"])?> + "/order/cart/remove/"+ prid +"/"+ difference,
                                  dataType: "json",
                                  headers: {"Authorization": "Bearer " + getToken()},
                                  success: function(result){
                                    alert("Product is removed from your cart!");
                                    location.reload(true);
                                    // use cookies
                                  },
                                  error: function(jqXHR, exception) {
                                    alert("Product can not be removed!");
                                  }
                              });
                        }

                 }


            });

    </script>

</body>

</html>