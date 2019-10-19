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
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i'
        rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    {{-- <link href="{{ env('APP_ASSET') }}assets/css/external.css" rel="stylesheet"> --}}
    {{-- <link href="{{ env('APP_ASSET') }}assets/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="{{ env('APP_ASSET') }}assets/css/style.css" rel="stylesheet"> --}}
    {{-- <link href="{{ env('APP_ASSET') }}assets/css/custom.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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


        @yield('contents')

        <!-- Footer #2
============================================= -->

    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/jquery-1.11.1.min.js"></script>
    <script src="{{ env('APP_ASSET') }}assets/js/plugins.js"></script>
    <script src="{{ env('APP_ASSET') }}assets/js/functions.js"></script>
    <script>
        $(() => {
            load_list_cart();
        });

        function load_list_cart() {
            $.ajax({
                type: "post",
                url: "{{route('get_cart_list')}}",
                dataType: "json",
                success: (data) => {
                    console.log(data)
                    let len = data.cart_list.length
                    let str = '',
                        total = 0;
                    for (let i = 0; i < len; i++) {
                        str += '<li>';
                        str += '    <img class="img-responsive" src="{{ env('
                        APP_ASSET ') }}assets/images/shop/thumb/1.jpg" alt="product"/>';
                        str += '    <div class="product-meta">';
                        str += '        <h5 class="product-title">' + data.cart_list[i].pro_name + '</h5>';
                        str += '        <p class="product-price">Price: ฿' + data.cart_list[i].pro_price +
                            ' </p>';
                        str += '        <p class="product-quantity">Quantity: ' + data.cart_list[i]
                            .cart_qty + '</p>';
                        str += '    </div>';
                        str += '    <a class="cancel" href="#" onclick="delete_cart(' + data.cart_list[i]
                            .cart_id + ')">cancel</a>';
                        str += '</li>';
                        total += parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i]
                            .cart_qty)
                    }
                    $('#list_cart').html(str)
                    $('#in_cart_label').html(len)
                    $('#total_price').html('฿' + total.toFixed(2))
                },
                error: (error) => {
                    console.log(error)
                }
            });
        }

        function delete_cart(id) {
            let data = {
                id: id
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
