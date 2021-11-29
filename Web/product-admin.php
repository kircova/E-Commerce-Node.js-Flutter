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
                        <li class="nav-item"><a class="nav-link" onclick="logoutfunction()" href="index.php">Sign Out</a></li>
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
                <!-- Start Atribute Navigation -->

   <div class="wishlist-box-main" style="margin-top:30px;">
        <div class="container" style="margin-left:90px;" >
            <div class="row">
                <div class="col-lg-50">
                    <div class="table-main table-responsive" >
                        <table class="table" style="margin:auto; border:3px solid black ">
                            <thead>
                                <tr>
                                    <th  style="text-align: center;">Images</th>
                                    <th  style="text-align: center;">Product Name</th>
                                    <th  style="text-align: center;">Artist</th>
                                    <th  style="text-align: center;">Genre</th>
                                    <th  style="text-align: center;">Description</th>
                                    <th  style="text-align: center;">Unit Price ₺</th>
                                    <th  style="text-align: center;">Warranty</th>
                                    <th  style="text-align: center;">Distributor</th>
                                    <th  style="text-align: center;">Update Stock</th>
                                    <th  style="text-align: center;">Remove</th>
                                </tr>
                            </thead>
                            <tbody id = "products-table">
                                <tr>
                                    <form id="productadd-form">
                                        <td class="name-pr">
                                                <input  style="text-align: center;" id = "imgurl" type="text" name ="imgurl" placeholder="Product Image Url">
                                        </td>
                                            <td class="name-pr">
                                                <input  style="text-align: center;" id= "productName" type="text" name ="productName" placeholder="Product Name">
                                        </td>
                                        <td class="price-pr">
                                            <input  style="text-align: center;" id = "productartist" type="text" name="productartist" placeholder="Artist">
                                        </td>
                                        <td class="price-pr">
                                            <input  style="text-align: center;" id="productgenre" type="text" name="productgenre" placeholder="Genre">
                                        </td>
                                        <td class="price-pr">
                                            <input  style="text-align: center;" id="description" type="text" name="description" placeholder="description">
                                        </td>
                                        <td class="price-pr">
                                            <input  style="text-align: center;" id="price" type="number" name="price" placeholder="1"> ₺
                                        </td>
                                        <td class="price-pr">
                                            <input  style="text-align: center;" id="warranty" type="text" name="warranty" placeholder="Warranty">
                                        </td>
                                        <td class="quantity-box">
                                            <input  style="text-align: center;" id="distributor" type="text" name="distributor" placeholder="Name">
                                        </td>
                                        <td class="add-pr" style="text-align: center;">
                                            <div class="submit-button text-center">
                                                <input  style="text-align: center;" id="stock" type="number" name="stock" placeholder="0">
                                                <a class="btn hvr-hover" style="color:white;" id="button-addproduct" type="submit"> Add Product</a>
                                            </div>
                                        </td>
                                        <td></td>
                                    </form>
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
                                                <form id="product-update-form`+value.prid+`">
                                                    <tr>
                                                        <td>
                                                            <div class="thumbnail-img">
                                                                <a href="#">
                                                                    <img class="img-fluid" src="`+value.productImgUrl+`"alt="" />
                                                                </a>
                                                                 <p>
                                                                    <input disabled type="text" name ="pname" value="`+value.productImgUrl+`">
                                                                </p>
                                                        </div>
                                                        </td>
                                                            <td class="name-pr">
                                                                <input  disabled style="text-align: center;" type="text" name ="pname" value="`+value.pname+`">
                                                        </td>
                                                        <td class="price-pr">
                                                            <input  disabled style="text-align: center;" type="text" name="partist" value="`+value.artist+`">
                                                        </td>
                                                        <td class="price-pr">
                                                            <input disabled style="text-align: center;" type="text" name="pgenre" value="`+value.genre+`">
                                                        </td>
                                                        <td class="price-pr">
                                                            <input disabled  style="text-align: center;" type="text" name="pdescription" value="`+value.description+`">
                                                        </td>
                                                        <td class="price-pr">
                                                            <input disabled style="text-align: center;" type="number" name="pprice" value="`+value.price+`">  ₺
                                                        </td>

                                                        <td class="price-pr" >
                                                            <input disabled  style="text-align: center;" type="number" name="pwarranty" value="`+value.warranty+`">
                                                        </td>

                                                        <td class="price-pr" value="12">
                                                            <input disabled style="text-align: center;" type="text" name="pdistributor" value="`+value.distributor+`">
                                                        </td>

                                                        <td class="add-pr" style="text-align: center;">
                                                            <input  style="text-align: center;" type="number" name="pstock" value="`+value.stock+`">
                                                            <button style="padding:10px; border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-right: 0px; color:white; background-color:#39870f;" class="updateClass">Update Stock</button>
                                                            <input hidden tyle="text-align: center;" type="text" name="prid" value="`+value.prid+`">
                                                        </td>

                                                         <td class="add-pr" style="text-align: center;">
                                                            <button style="border: 0; box-shadow:none; border-radius:0px; cursor:pointer; margin-left: 0px; padding:10px; color:white; background-color:#d43c34;" class="myclass"> Delete </button>
                                                            <input hidden tyle="text-align: center;" type="text" name="prid" value="`+value.prid+`">
                                                        </td>

                                                    </tr>
                                                </form>
                                            `;
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
        </script>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script type="text/javascript">
            
                $(document).ready(function(){
                    $(document).on('click', "#button-addproduct", function() {
                      var  imgurlx = $('#imgurl').val();
                      var  productNamex = $('#productName').val();
                      var  productartistx = $('#productartist').val();
                      var  productgenrex = $('#productgenre').val();
                      var  descriptionx = $('#description').val();
                      var  pricex = $('#price').val();
                      var  stockx = $('#stock').val();
                      var  warrantyx = $('#warranty').val();
                      var  distributorx = $('#distributor').val();
                      if((imgurlx && productNamex && productartistx && productgenrex && descriptionx && pricex && stockx && warrantyx && distributorx) && (imgurlx != "" && productNamex != "" &&
                          productartistx != "" && productgenrex != "" && descriptionx != "" && pricex != "" && stockx != "" && warrantyx != "" && distributorx != ""))
                      {
                        $.ajax({
                                  type: "POST",
                                  url: "http://" + <?php var_export($config["host"])?> + "/pmanager/add", // "http://localhost:3000/user/login"
                                  data: {
                                    productImgUrl:imgurlx,
                                    pname:productNamex,
                                    artist:productartistx, 
                                    genre:productgenrex, 
                                    description:descriptionx, 
                                    price:pricex, 
                                    stock:stockx,  
                                    warranty:warrantyx,
                                    distributor:distributorx,
                                     },  
                                  dataType: "json",
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
                        else
                        {
                              alert("At least one field is empty!");
                        }
                    });


                 $(document).on('click', 'button.myclass',  function() {

                  var id = jQuery(this).next().val();
                  
                  if(parseInt(id) >= 0 )
                  {
                    $.ajax({
                              type: "POST",
                              url: "http://" + <?php var_export($config["host"])?> + "/pmanager/delete", // "http://localhost:3000/user/login"
                              data: {
                                prid:id,
                                 },  
                              dataType: "json",
                              success: function(result){
                                alert("Product is deleted!");
                                location.reload(true);
                                // use cookies
                              },
                              error: function(jqXHR, exception) {
                                alert("Product can not be deleted!");
                              }
                          });
                    }
                    else
                    {
                          alert("The product with that id does not exist!");
                    }
                });

                $(document).on('click', 'button.updateClass',  function() {      
                  var id = jQuery(this).next().val();
                  var stock = jQuery(this).prev().val();
                  
                  console.log(id);
                  console.log(stock);


                  if(parseInt(id) >= 0 )
                  {
                    $.ajax({
                              type: "POST",
                              url: "http://" + <?php var_export($config["host"])?> + "/pmanager/stock/update", // "http://localhost:3000/user/login"
                              data: {
                                prid:id,
                                stock:stock,
                                 },  
                              dataType: "json",
                              success: function(result){
                                alert("Product is updated!");
                                location.reload(true);
                                // use cookies
                              },
                              error: function(jqXHR, exception) {
                                alert("Product stock can not be updated!");
                              }
                          });
                    }
                    else
                    {
                          alert("The product with that id does not exist!");
                    }
                });
            });

        </script>
    </body>
</html>