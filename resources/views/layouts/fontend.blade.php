<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />



    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="{{ env('APP_ASSET') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_ASSET') }}assets/css/bootstrap.extension.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_ASSET') }}assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_ASSET') }}assets/css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_ASSET') }}assets/css/sumoselect.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_ASSET') }}assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />



    <title>OP camera</title>

    <style>
        .success_use {
            border-color: #2b542c !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168 !important;
        }

        .error_use {
            border-color: #843534 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483 !important;
        }

    </style>

</head>

<body>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">
        <!-- HEADER -->
        <header>
            <div class="header-top">
                <div class="content-margins">
                    <div class="row">
                        <div class="col-md-5 hidden-xs hidden-sm">
                            
                            <div class="entry"><b>email:</b> <a href="mailto:office@exzo.com">OP@gmail.com</a></div>
                        </div>
                        <div class="col-md-7 col-md-text-right">
                            @if(Session::has('user_id'))
                            <div class="entry language"><b>{{ Session::get('name') }}</b>
                                <div class="language-toggle header-toggle-animation">
                                    <a href="{{ url('/logout') }}">log out</a>
                                </div>
                            </div>
                            @else
                            <div class="entry"><a class="open-popup" data-rel="1"><b>login</b></a>&nbsp; or &nbsp;<a
                                    class="open-popup" data-rel="2"><b>register</b></a></div>
                            @endif


                            <div class="entry hidden-xs hidden-sm cart">
                                <a href="{{route('cart')}}">
                                    <b class="hidden-xs">Your bag</b>
                                    <span class="cart-icon">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <span class="cart-label" id="in_cart_label">5</span>
                                    </span>
                                    <span class="cart-title hidden-xs" id="total_price2">00</span>
                                </a>
                                <div class="cart-toggle hidden-xs hidden-sm">
                                    <div class="cart-overflow" id="list_cart">
                                        <div class="cart-entry clearfix">
                                            <a class="cart-entry-thumbnail" href="#"><img
                                                    src="{{ env('APP_ASSET') }}assets/img/product-1.png" alt="" /></a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#">modern beat ht</a></div>
                                                            <div class="simple-article size-1">QUANTITY: 2</div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey">$155.00</div>
                                                            <div class="simple-article size-1">TOTAL: $310.00</div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-color" style="background: #eee;"></div>
                                                        </td>
                                                        <td>
                                                            <div class="button-close"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="cart-entry clearfix">
                                            <a class="cart-entry-thumbnail" href="#"><img
                                                    src="{{ env('APP_ASSET') }}assets/img/product-2.png" alt="" /></a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#">modern beat ht</a></div>
                                                            <div class="simple-article size-1">QUANTITY: 2</div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey">$155.00</div>
                                                            <div class="simple-article size-1">TOTAL: $310.00</div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-color" style="background: #bf584b;"></div>
                                                        </td>
                                                        <td>
                                                            <div class="button-close"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="cart-entry clearfix">
                                            <a class="cart-entry-thumbnail" href="#"><img
                                                    src="{{ env('APP_ASSET') }}assets/img/product-3.png" alt="" /></a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#">modern beat ht</a></div>
                                                            <div class="simple-article size-1">QUANTITY: 2</div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-3 grey">$155.00</div>
                                                            <div class="simple-article size-1">TOTAL: $310.00</div>
                                                        </td>
                                                        <td>
                                                            <div class="cart-color" style="background: #facc22;"></div>
                                                        </td>
                                                        <td>
                                                            <div class="button-close"></div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b40"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="cell-view empty-space col-xs-b50">
                                                <div class="simple-article size-5 grey">TOTAL <span class="color"
                                                        id="total_price">$1195.00</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a class="button size-2 style-3" href="{{route('update_cart_status')}}">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img
                                                            src="{{ env('APP_ASSET') }}assets/img/icon-4.png"
                                                            alt=""></span>
                                                    <span class="text">proceed to checkout</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="content-margins">
                    <div class="row">
                        <div class="col-xs-3 col-sm-1">
                            <a id="logo" href="index1.html"><img src="{{ env('APP_ASSET') }}assets/img/logo-2.png"
                                    alt="" /></a>
                        </div>
                        <div class="col-xs-9 col-sm-11 text-right">
                            <div class="nav-wrapper">
                                <div class="nav-close-layer"></div>
                                <nav>
                                    <ul>
                                        <li class="active">
                                            <a href="{{url('/')}}">Home</a>

                                        </li>
                                        <li>
                                            <a href="{{route('about_us_pae')}}">about us</a>
                                        </li>
                                        <li class="megamenu-wrapper">
                                            <a href="{{route('pro_all')}}">products</a>
                                            <div class="menu-toggle"></div>

                                        </li>

                                        <li><a href="{{route('contacts_sprite')}}">contact</a></li>
                                    </ul>
                                    <div class="navigation-title">
                                        Navigation
                                        <div class="hamburger-icon active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="header-bottom-icon toggle-search"><i class="fa fa-search"
                                    aria-hidden="true"></i></div>
                            <div class="header-bottom-icon visible-rd"><i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                            <div class="header-bottom-icon visible-rd">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="cart-label">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-wrapper">
                        <div class="header-search-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                        <form action="{{route('pro_all')}}" method="get">
                                            <div class="search-submit">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                                <input type="submit" />
                                            </div>
                                            <input class="simple-input style-1" type="text" name="pro_name" value=""
                                                placeholder="Enter keyword" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="button-close"></div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        {{-- <div class="header-empty-space"></div> --}}

        @yield('contents')


        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 col-xs-b30 col-md-b0">
                            <img src="{{ env('APP_ASSET') }}assets/img/icon-29.png" alt="" />
                            <div class="empty-space col-xs-b20"></div>
                            <div class="simple-article size-2 light fulltransparent">บริษัท โอพี คาเมร่า จำกัด (มหาชน)
                                115/1 ถนนสวัสดิการ 1 แขวงหนองแขม
                                เขตหนองแขม กรุงเทพฯ 10160
                            </div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="footer-contact"><i class="fa fa-mobile" aria-hidden="true"></i> contact us: <a
                                    href="tel:+35235551238745">09x xxxxxxx</a></div>
                            <div class="footer-contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> email: <a
                                    href="mailto:office@exzo.com">OPcamera@gmail.com</a></div>
                            <div class="footer-contact"><i class="fa fa-map-marker" aria-hidden="true"></i> address: <a
                                    href="#">1st, Thailand,Bangkok</a></div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-xs-b30 col-md-b0">
                            <h6 class="h6 light">queck links</h6>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="footer-column-links">
                                <div class="row">
                                    <div class="col-xs-6">
                                     <a href="{{url('/')}}">Home</a>
                                     <a href="{{route('about_us_pae')}}">about us</a>
                                     <a href="{{route('pro_all')}}">products</a>
                                     <li><a href="{{route('contacts_sprite')}}">contact</a></li>
                                    </div>
                                    <div class="col-xs-6">

                                        <a href="#">login</a>
                                        <a href="#">registration</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear visible-sm"></div>

                        <div class="follow">
                            <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-lg-8 col-xs-text-center col-lg-text-left col-xs-b20 col-lg-b0">
                                <div class="copyright">&copy; Copyright by oat&sprite <a </div> </div> </div> </div>
                                        </div> </div> </div> </footer> </div> <div class="popup-wrapper">
                                        <div class="bg-layer"></div>

                                        <div class="popup-content" data-rel="1">
                                            <div class="layer-close"></div>
                                            <div class="popup-container size-1">
                                                <div class="popup-align">
                                                    <h3 class="h3 text-center">Log in</h3>
                                                    <div class="empty-space col-xs-b30"></div>
                                                    <input class="simple-input" type="text" id="username"
                                                        name="username" value="" placeholder="Your username" />
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                                                    <input class="simple-input" type="password" id="pwd" value=""
                                                        name="pwd" placeholder="Enter password" />
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                                            <div class="empty-space col-sm-b5"></div>
                                                            <a class="simple-link">Forgot password?</a>
                                                            <div class="empty-space col-xs-b5"></div>
                                                            <a class="simple-link">register now</a>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <a class="button size-2 style-3" href="#">
                                                                <span class="button-wrapper" onclick="singIn()">
                                                                    <span class="icon"><img
                                                                            src="{{ env('APP_ASSET') }}assets/img/icon-4.png"
                                                                            alt="" /></span>
                                                                    <span class="text">submit</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-close"></div>
                                            </div>
                                        </div>
                                        <div class="popup-content" data-rel="2">
                                            <div class="layer-close"></div>
                                            <div class="popup-container size-1">
                                                <div class="popup-align">
                                                    <h3 class="h3 text-center">register</h3>
                                                    <div class="empty-space col-xs-b30"></div>
                                                    <input class="simple-input" type="text" id="re_pwd" name="re_pwd"
                                                        value="" placeholder="Your name" />
                                                    <div class="empty-space col-xs-b30"></div>
                                                    <input class="simple-input" type="text" id="re_username"
                                                        name="re_username" value="" placeholder="Your fullname" />
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                                                    <input class="simple-input" type="text" value=""
                                                        placeholder="Your email" id="re_email" name="re_email" />
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                                                    <input class="simple-input" type="password" value="" id="re_pwdc"
                                                        id="re_pwdc" placeholder="Enter password" />
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>
                                                    <input class="simple-input" type="password" value="" id="re_pwdc"
                                                        placeholder="Repeat password" />
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>

                                                    <textarea name="" class="simple-input" id="address" placeholder="Address"></textarea>
                                                    <div class="empty-space col-xs-b10 col-sm-b20"></div>

                                                    <div class="row">
                                                        <div class="col-sm-7 col-xs-b10 col-sm-b0">
                                                            <div class="empty-space col-sm-b15"></div>
                                                            <label class="checkbox-entry">
                                                                <input type="checkbox" /><span><a href="#">Privacy
                                                                        policy agreement</a></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-5 text-right">
                                                            <a class="button size-2 style-3" href="#">
                                                                <span class="button-wrapper" id="btn_register"
                                                                    onclick="register_user()">
                                                                    <span class="icon"><img
                                                                            src="{{ env('APP_ASSET') }}assets/img/icon-4.png"
                                                                            alt="" /></span>
                                                                    <span class="text">submit</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-close"></div>
                                            </div>
                                        </div>
                                        @yield('pup-up')
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
                                <script src="{{ env('APP_ASSET') }}assets/js/jquery-2.2.4.min.js"></script>
                                <script src="{{ env('APP_ASSET') }}assets/js/swiper.jquery.min.js"></script>
                                <script src="{{ env('APP_ASSET') }}assets/js/global.js"></script>

                                <!-- styled select -->
                                <script src="{{ env('APP_ASSET') }}assets/js/jquery.sumoselect.min.js"></script>
                                <!-- MAP -->
                                <script src="https://maps.googleapis.com/maps/api/js"></script>
                                <script src="{{ env('APP_ASSET') }}assets/js/map.js"></script>

                                <!-- counter -->
                                <script src="{{ env('APP_ASSET') }}assets/js/jquery.classycountdown.js"></script>
                                <script src="{{ env('APP_ASSET') }}assets/js/jquery.knob.js"></script>
                                <script src="{{ env('APP_ASSET') }}assets/js/jquery.throttle.js"></script>
                                <script type="text/javascript">
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });

                                </script>

                                <script>
                                    $(() => {
                                        load_list_cart();

                                        $("#pwd").keypress(function (e) {
                                            if (e.which == 13) {
                                                singIn()
                                            }
                                        });

                                    });

                                    function load_list_cart() {
                                        $.ajax({
                                            type: "post",
                                            url: "{{route('get_cart_list')}}",
                                            dataType: "json",
                                            success: (data) => {
                                                console.log(data)
                                                let path = "{{ env('APP_ASSET') }}"
                                                let len = data.cart_list.length
                                                let str = '',
                                                    total = 0;
                                                for (let i = 0; i < len; i++) {
                                                    sub_total = 0;
                                                    sub_total += parseFloat(data.cart_list[i].pro_price) *
                                                        parseInt(data.cart_list[i]
                                                            .cart_qty)
                                                    total += sub_total;
                                                    str += '<div class="cart-entry clearfix">'
                                                    str +=
                                                        '<a class="cart-entry-thumbnail" href="#"><img width="85px"'
                                                    str += ' src="' + path + 'images/product_img/' + data
                                                        .cart_list[i].pro_img + '" alt="" /></a>'
                                                    str += '<div class="cart-entry-description">'
                                                    str += '<table>'
                                                    str += '<tr>'
                                                    str += '<td>'
                                                    str += '<div class="h6"><a href="#">' + data.cart_list[
                                                        i].pro_name + '</a></div>'
                                                    str += '<div class="simple-article size-1">QUANTITY: ' +
                                                        data.cart_list[i].cart_qty + '</div>'
                                                    str += '</td>'
                                                    str += '<td>'
                                                    str += '<div class="simple-article size-3 grey">฿' +
                                                        data.cart_list[i].pro_price + '</div>'
                                                    str += '<div class="simple-article size-1">TOTAL: ฿' +
                                                        sub_total + '</div>'
                                                    str += '</td>'

                                                    str += '<td>'
                                                    str +=
                                                        '<div class="button-close" onclick="delete_cart(' +
                                                        data.cart_list[i].cart_id + ')" ></div>'
                                                    str += '</td>'
                                                    str += '</tr>'
                                                    str += '</table>'
                                                    str += '</div>'
                                                    str += '</div>'

                                                }
                                                $('#list_cart').html(str)
                                                $('#in_cart_label').html(len)
                                                $('#total_price').html('฿' + total.toFixed(2))
                                                $('#total_price2').html('฿' + total.toFixed(2))
                                            },
                                            error: (error) => {
                                                console.log(error)
                                            }
                                        });
                                    }

                                    function singIn() {

                                        if ($('#username').val() == '') {
                                            feed_error('Username is null !');
                                            return;
                                        }

                                        if ($('#pwd').val() == '') {
                                            feed_error('Password is null !');
                                            return;
                                        }
                                        let re_me = 0
                                        if ($('#remember_me').prop("checked") == true) {
                                            re_me = 1;
                                        } else {
                                            re_me = 0;
                                        }
                                        console.log(re_me)
                                        let data = {
                                            username: $('#username').val(),
                                            password: $('#pwd').val(),
                                            re_me: re_me
                                        }
                                        $.post("{{ url('/getuser') }}", data,
                                            (data, textStatus, jqXHR) => {
                                                if (data.status === true) {
                                                    location.href = "{{ url('/') }}"
                                                } else {
                                                    str = 'Username or password incorrect';
                                                    $('#pwd').val('')
                                                    feed_error(str);
                                                }
                                            },
                                            "json"
                                        );
                                    }
                                    $('#re_pwdc').keyup(function (e) {
                                        $(this).passtrength({
                                            tooltip: true,
                                            textWeak: "Weak",
                                            textMedium: "Medium",
                                            textStrong: "Strong",
                                            textVeryStrong: "Very Strong",
                                            eyeImg: "{{ env('APP_ASSET') }}assets/images/eye.svg",
                                            passwordToggle: false,
                                        });
                                    });

                                    $('#re_pwd').keyup(function (e) {
                                        let data = {
                                            username: $(this).val(),
                                        }
                                        $.post("{{ url('/check_username') }}", data,
                                            function (data, textStatus, jqXHR) {
                                                console.log(data)
                                                if (data.status == true) {
                                                    $('#re_pwd').removeClass('error_use');
                                                    $('#re_pwd').addClass('success_use');
                                                    $('#div_re_pwd').removeClass('has-error');
                                                    $('#div_re_pwd').addClass('has-success');
                                                    $('#help_re_pwd').html('')
                                                    $('#btn_register').prop("disabled", false);
                                                    $('#btn_register').attr('onclick', "register_user()");
                                                } else {
                                                    $('#re_pwd').removeClass('success_use');
                                                    $('#re_pwd').addClass('error_use');
                                                    $('#div_re_pwd').removeClass('has-success');
                                                    $('#div_re_pwd').addClass('has-error');
                                                    $('#help_re_pwd').html('Username already!')
                                                    $('#btn_register').prop("disabled", true);
                                                    $('#btn_register').removeAttr('onclick');
                                                }
                                            },
                                            "json"
                                        );
                                    })

                                    $('#re_email').keyup(function (e) {
                                        let data = {
                                            email: $(this).val(),
                                        }
                                        $.post("{{ url('/check_email') }}", data,
                                            function (data, textStatus, jqXHR) {
                                                console.log(data)
                                                if (data.status == true) {
                                                    $('#re_email').removeClass('error_use');
                                                    $('#re_email').addClass('success_use');
                                                    $('#div_re_email').removeClass('has-error');
                                                    $('#div_re_email').addClass('has-success');
                                                    $('#help_re_email').html('')
                                                    $('#btn_register').prop("disabled", false);

                                                } else {
                                                    $('#re_email').removeClass('success_use');
                                                    $('#re_email').addClass('error_use');
                                                    $('#div_re_email').removeClass('has-success');
                                                    $('#div_re_email').addClass('has-error');
                                                    $('#help_re_email').html('E-mail already!')
                                                    $('#btn_register').prop("disabled", true);
                                                }
                                            },
                                            "json"
                                        );
                                    })

                                    function alert_s() {
                                        Swal.fire({
                                            position: 'top-end',
                                            type: 'success',
                                            title: 'Add product to cart success',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                    }

                                    function register_user() {
                                        let data = {
                                            name: $('#re_username').val(),
                                            email: $('#re_email').val(),
                                            username: $('#re_pwd').val(),
                                            password: $('#re_pwdc').val(),
                                            address: $('#address')val(),
                                        }
                                        if (data.name === '') {
                                            feed_error_re('Name is null!')
                                            return;
                                        }

                                        if (data.email === '') {
                                            feed_error_re('E-mail is null!')
                                            return;
                                        }

                                        if (data.username === '') {
                                            feed_error_re('Username is null!')
                                            return;
                                        }

                                        if (data.password === '') {
                                            feed_error_re('Password is null!')
                                            return;
                                        }

                                        if (data.password.length < 8) {
                                            feed_error_re('Password min 8 !')
                                            return;
                                        }
                                        $.post("{{ url('/getregister') }}", data,
                                            (data, textStatus, jqXHR) => {
                                                if (data.status === true) {
                                                    location.href = "{{ url('/') }}"
                                                } else {
                                                    str = 'something went wrong';
                                                    // $('#pwd').val('')
                                                    feed_error_re(str);
                                                }
                                            },
                                            "json"
                                        );
                                    }

                                    function feed_error(str) {


                                        Swal.fire({
                                            type: 'error',
                                            title: 'Oops...',
                                            text: str,
                                        })

                                    }

                                    function feed_error_re(str) {
                                        Swal.fire({
                                            type: 'error',
                                            title: 'Oops...',
                                            text: str,
                                        })

                                    }

                                    function delete_cart(id) {
                                        let data = {
                                            id: id
                                        }
                                        $.post("{{route('delete_cart')}}", data,
                                            (data, textStatus, jqXHR) => {
                                                console.log(data)
                                                load_list_cart()
                                                get_data_cart_list()
                                            },
                                            "json"
                                        );
                                    }

                                    function swich_modal(data) {
                                        if (data === 0) {
                                            $('#sing_in').modal('toggle')
                                            setTimeout(() => {
                                                $('#register_modal').modal('toggle')
                                            }, 500)
                                        } else {
                                            $('#register_modal').modal('toggle')
                                            setTimeout(() => {
                                                $('#sing_in').modal('toggle')
                                            }, 500)
                                        }

                                    }

                                </script>
                                @yield('javascript')

</body>

</html>
