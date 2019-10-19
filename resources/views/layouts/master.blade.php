<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="zytheme" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="construction html5 template">
<link href="{{ env('APP_ASSET') }}assets/images/favicon/favicon.ico" rel="icon">

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
<link href="{{ env('APP_ASSET') }}assets/css/external.css" rel="stylesheet">
<link href="{{ env('APP_ASSET') }}assets/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ env('APP_ASSET') }}assets/css/style.css" rel="stylesheet">
<link href="{{ env('APP_ASSET') }}assets/css/custom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Autoshop | E-commerce Html5 Template</title>
</head>
<body>
<!-- Document Wrapper
    ============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5">
                        <ul class="list-inline top-contact">
                            <li><span>Phone :</span> + 2 0106 5370701</li>
                            <li><span>Email :</span> 7oroof@7oroof.com</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7">
                        <ul class="list-inline pull-right top-links">
                            <li>
                                <a href="#">Login</a>
                                /
                                <a href="#">Register</a>
                            </li>
                            <li>
                                <a href="#">Wishlist</a>
                            </li>
                            <li>
                                <a href="#">Checkout</a>
                            </li>
                            <li>
                                <a href="#">Stores</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <a href="#">German</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .top-bar end -->
        <nav id="primary-menu" class="navbar navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index.html">
                    <img src="{{ env('APP_ASSET') }}assets/images/logo/logo-light.png" alt="Autoshop">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="has-dropdown active">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Home</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="home-1.html">home 1</a>
                                </li>
                                <li>
                                    <a href="home-2.html">home 1</a>
                                </li>
                                <li>
                                    <a href="home-3.html">home 1</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown">
                        <a href="{{route('pro_all')}}">shop</a>
                        </li>
                        <!-- li end -->
                        <li>
                            <a href="about.html">about</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">pages</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="404.html">page 404</a>
                                </li>
                                <li>
                                    <a href="maintenance.html">maintenance</a>
                                </li>
                                <li>
                                    <a href="soon.html">soon</a>
                                </li>
                                <li>
                                    <a href="faqs.html">page Faqs</a>
                                </li>
                                <li>
                                    <a href="login.html">login</a>
                                </li>
                                <li>
                                    <a href="register.html">register</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">features</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Headers</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="header-1.html">header 1</a>
                                        </li>
                                        <li>
                                            <a href="header-2.html">header 2</a>
                                        </li>
                                        <li>
                                            <a href="header-3.html">header 3</a>
                                        </li>
                                        <li>
                                            <a href="header-4.html">header 4</a>
                                        </li>
                                        <li>
                                            <a href="header-5.html">header 5</a>
                                        </li>
                                        <li>
                                            <a href="header-6.html">header 6</a>
                                        </li>
                                        <li>
                                            <a href="header-7.html">header 7</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Footers</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="footer-1.html#footer">Footer 1</a>
                                        </li>
                                        <li>
                                            <a href="footer-2.html#footer">Footer 2</a>
                                        </li>
                                        <li>
                                            <a href="footer-3.html#footer">Footer 3</a>
                                        </li>
                                        <li>
                                            <a href="footer-4.html#footer">Footer 4</a>
                                        </li>
                                        <li>
                                            <a href="footer-5.html#footer">Footer 5</a>
                                        </li>
                                        <li>
                                            <a href="footer-6.html#footer">Footer 6</a>
                                        </li>
                                        <li>
                                            <a href="footer-7.html#footer">Footer 7</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">elements</a>
                                    <ul class="mega-menu left">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="element-cta.html">call to action</a>
                                                </li>
                                                <li>
                                                    <a href="element-video.html">video</a>
                                                </li>
                                                <li>
                                                    <a href="elements-blockquotes.html">blockquotes</a>
                                                </li>
                                                <li>
                                                    <a href="elements-blog.html">blog</a>
                                                </li>
                                                <li>
                                                    <a href="elements-clients.html">clients</a>
                                                </li>
                                                <li>
                                                    <a href="elements-columns-grids.html">grids</a>
                                                </li>
                                                <li>
                                                    <a href="elements-featured.html">featured</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="elements-icon-list.html">icon list</a>
                                                </li>
                                                <li>
                                                    <a href="elements-pricing.html">pricing</a>
                                                </li>
                                                <li>
                                                    <a href="elements-skills.html">skills</a>
                                                </li>
                                                <li>
                                                    <a href="elements-team.html">team</a>
                                                </li>
                                                <li>
                                                    <a href="elements-testimonials.html">testimonials</a>
                                                </li>
                                                <li>
                                                    <a href="elements-typography.html">typography</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-widget.html">widgets</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog-grid.html">blog grid</a>
                                </li>
                                <li>
                                    <a href="blog-standard.html">blog standard</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">blog single</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown pull-left">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">contact</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="contact-1.html">contact 1</a>
                                </li>
                                <li>
                                    <a href="contact-2.html">contact 2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->
                    </ul>

                    <!-- Mod-->
                    <div class="module module-search pull-left">
                        <div class="search-icon">
                            <i class="fa fa-search"></i>
                            <span class="title">search</span>
                        </div>
                        <div class="search-box">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type Your Search Words">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>
                    </div>
                    <!-- .module-search-->
                    <!-- .module-cart -->
                    <div class="module module-cart pull-left">
                        <div class="cart-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="title">shop cart</span>
                            <span class="cart-label" id="in_cart_label"></span>
                        </div>
                        <div class="cart-box">
                            <div class="cart-overview">
                                <ul class="list-unstyled" id="list_cart">
                                    <li>
                                        <img class="img-responsive" src="{{ env('APP_ASSET') }}assets/images/shop/thumb/1.jpg" alt="product"/>
                                        <div class="product-meta">
                                            <h5 class="product-title">Belt Car Engine</h5>
                                            <p class="product-price">Price: $68.00 </p>
                                            <p class="product-quantity">Quantity: 2</p>
                                        </div>
                                        <a class="cancel" href="#">cancel</a>
                                    </li>
                                    <li>
                                        <img class="img-responsive" src="{{ env('APP_ASSET') }}assets/images/shop/thumb/2.jpg" alt="product"/>
                                        <div class="product-meta">
                                            <h5 class="product-title">OIL FILTER</h5>
                                            <p class="product-price">Price: $180.00 </p>
                                            <p class="product-quantity">Quantity: 1</p>
                                        </div>
                                        <a class="cancel" href="#">cancel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-total">
                                <div class="total-desc">
                                    <h5>CART SUBTOTAL :</h5>
                                </div>
                                <div class="total-price">
                                    <h5 id="total_price">$316.00</h5>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="cart-control">
                                <a class="btn btn-primary btn-block" href="#">view cart</a>
                                <a class="btn btn-secondary btn-block" href="#">check out</a>
                            </div>
                        </div>
                    </div>
                    <!-- .module-cart end -->

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <!-- Hero #1
============================================= -->
   @yield('content')

    <!-- Footer #2
============================================= -->
    <footer id="footer" class="footer footer-2">
        <!-- Footer Info
    ============================================= -->
        <div class="footer-info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="panel-info">
                            <div class="info-icon">
                                <i class="icon icon-Truck"></i>
                            </div>
                            <div class="info-content">
                                <h4>Free Shipping</h4>
                                <p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="panel-info">
                            <div class="info-icon">
                                <i class="icon icon-Dollars"></i>
                            </div>
                            <div class="info-content">
                                <h4>Fair Prices</h4>
                                <p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="panel-info">
                            <div class="info-icon">
                                <i class="icon icon-Shield"></i>
                            </div>
                            <div class="info-content">
                                <h4>Secure Shopping</h4>
                                <p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="panel-info">
                            <div class="info-icon">
                                <i class="icon icon-Headset"></i>
                            </div>
                            <div class="info-content">
                                <h4>Customer Support</h4>
                                <p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-info end -->

        <!-- Footer Widget
    ============================================= -->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 footer-widget-about">
                        <div class="footer-widget-title">
                            <h5>About Us</h5>
                        </div>
                        <div class="footer-widget-content">
                            <p>Lorem ipsum dolor sit amet, adipiscing condimentum tristique vel, eleifend sed turpis. Amet, consectetur adipising elit Integer.</p>
                            <div class="footer-social">
                                <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="share-vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                <a class="share-rss" href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                        <div class="footer-widget-title">
                            <h5>My Account</h5>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">My Account</a>
                                </li>
                                <li>
                                    <a href="#">Order History</a>
                                </li>
                                <li>
                                    <a href="#">Wish List</a>
                                </li>
                                <li>
                                    <a href="#">Newsletter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-2 end -->

                    <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                        <div class="footer-widget-title">
                            <h5>Information</h5>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Delivery Information</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-2 end -->

                    <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                        <div class="footer-widget-title">
                            <h5>Customer Service</h5>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Returns</a>
                                </li>
                                <li>
                                    <a href="#">Site Map</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-2 end -->

                    <div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
                        <div class="footer-widget-title">
                            <h5>Extras</h5>
                        </div>
                        <div class="footer-widget-content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Brands</a>
                                </li>
                                <li>
                                    <a href="#">Gift Vouchers</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#">Specials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-2 end -->
                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-widget end -->

        <!-- Footer Bar
    ============================================= -->
        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="powered">
                            <p>Car Shop &copy; All Rights Reserved. With Made With Love By
                                <a href="http://themeforest.net/user/7oroof/portfolio?ref=7oroof">7oroof.com</a>
                            </p>
                            <ul class="list-inline mb-0">
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="#">Stores</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="payment-methods text-right">
                            <ul class="list-inline mb-0">
                                <li><img src="{{ env('APP_ASSET') }}assets/images/footer/visa.png" alt="payment"></li>
                                <li><img src="{{ env('APP_ASSET') }}assets/images/footer/mastercard.png" alt="payment"></li>
                                <li><img src="{{ env('APP_ASSET') }}assets/images/footer/american-express.png" alt="payment"></li>
                                <li><img src="{{ env('APP_ASSET') }}assets/images/footer/delta.png" alt="payment"></li>
                                <li><img src="{{ env('APP_ASSET') }}assets/images/footer/cirrus.png" alt="payment"></li>
                                <li><img src="{{ env('APP_ASSET') }}assets/images/footer/paypal.png" alt="payment"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </div>
        <!-- .footer-copyright end -->
    </footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{ env('APP_ASSET') }}assets/js/jquery-2.2.4.min.js"></script>
<script src="{{ env('APP_ASSET') }}assets/js/plugins.js"></script>
<script src="{{ env('APP_ASSET') }}assets/js/functions.js"></script>
<script>
    $(()=> {
        load_list_cart();
    });

function load_list_cart(){
    $.ajax({
        type: "post",
        url: "{{route('get_cart_list')}}",
        dataType: "json",
        success: (data) =>{
            console.log(data)
            let len = data.cart_list.length
            let str = '',total=0;
            for (let i = 0; i<len; i++){
                str += '<li>';
                str += '    <img class="img-responsive" src="{{ env('APP_ASSET') }}assets/images/shop/thumb/1.jpg" alt="product"/>';
                str += '    <div class="product-meta">';
                str += '        <h5 class="product-title">'+data.cart_list[i].pro_name+'</h5>';
                str += '        <p class="product-price">Price: ฿'+data.cart_list[i].pro_price+' </p>';
                str += '        <p class="product-quantity">Quantity: '+data.cart_list[i].cart_qty+'</p>';
                str += '    </div>';
                str += '    <a class="cancel" href="#" onclick="delete_cart('+data.cart_list[i].cart_id+')">cancel</a>';
                str += '</li>';
                total += parseFloat(data.cart_list[i].pro_price)*parseInt(data.cart_list[i].cart_qty)
            }
            $('#list_cart').html(str)
            $('#in_cart_label').html(len)
            $('#total_price').html('฿'+total.toFixed(2))
        },
        error: (error)=>{
            console.log(error)
        }
    });
}

function delete_cart(id){
    let data = {
        id:id
    }
    $.post("{{route('delete_cart')}}", data,
        function (data, textStatus, jqXHR) {
            console.log(data)
            load_list_cart()
        },
        "json"
    );
}

</script>
@yield('javascript')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
</body>
</html>
