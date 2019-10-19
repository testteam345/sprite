@extends('layouts.fontend')
@section('contents')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li class="active">Product Details</li>
        </ul>
    </div>
</div>


<div class="main-content">
    <div class="container">
        <div class="product-details-content">
            <div class="col-md-6 col-sm-6">
                <div class="product-img-box">
                    <a id="image-view">
                        <img id="image" src="{{ env('APP_ASSET') }}images/product_img/{{$product[0]->pro_img}}"
                            alt="Product">
                    </a>
                    {{-- <div class="product-thumb">
                                      <ul class="thumb-content">
                                          <li class="thumb active images"><a href="assets/images/product-details1.jpg" title="thumb product view1" onclick="swap(this);return false;"><img src="assets/images/product-details1.jpg" alt="thumb product1"></a></li>
                                          <li class="thumb images"><a href="assets/images/product-details1.jpg" title="thumb product view1" onclick="swap(this);return false;"><img src="assets/images/product-details1.jpg" alt="thumb product2"></a></li>
                                          <li class="thumb images"><a href="assets/images/product-details1.jpg" title="thumb product view1" onclick="swap(this);return false;"><img src="assets/images/product-details1.jpg" alt="thumb product3"></a></li>
                                          <li class="thumb images"><a href="assets/images/product-details1.jpg" title="thumb product view1" onclick="swap(this);return false;"><img src="assets/images/product-details1.jpg" alt="thumb product4"></a></li>
                                      </ul>
                                  </div> --}}
                </div>
                <!-- End product-img-box -->
                <div class="share-tags">
                    <div class="share">
                        <span>Share this:</span>
                        <a class="facebook" href="#" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="twitter" href="#" title="twitter"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="instagram" href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                        <a class="google" href="#" title="google"><i class="zmdi zmdi-google-glass"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="product-box-content">
                    <div class="product-name">
                        <h1>{{$product[0]->pro_name}}</h1>
                        <p class="cat">{{$product[0]->cate_name}}</p>
                    </div>
                    <!-- End product-name -->
                    <div class="rating">
                        <div class="overflow-h">
                            <div class="icon-rating">
                                    <input type="radio" readonly id="bird-horizontal-rating-1-avg" value="5" name="bird-horizontal-rating-avg" >
                                    <label for="bird-horizontal-rating-1-avg"><i class="fa fa-star"></i></label>
                                    <input type="radio" readonly id="bird-horizontal-rating-2-avg" value="4" name="bird-horizontal-rating-avg">
                                    <label for="bird-horizontal-rating-2-avg"><i class="fa fa-star"></i></label>
                                    <input type="radio" readonly id="bird-horizontal-rating-3-avg" value="3" name="bird-horizontal-rating-avg">
                                    <label for="bird-horizontal-rating-3-avg"><i class="fa fa-star"></i></label>
                                    <input type="radio" readonly id="bird-horizontal-rating-4-avg" value="2" name="bird-horizontal-rating-avg">
                                    <label for="bird-horizontal-rating-4-avg"><i class="fa fa-star"></i></label>
                                    <input type="radio" readonly id="bird-horizontal-rating-5-avg" name="bird-horizontal-rating-avg" value="1" >
                                    <label for="bird-horizontal-rating-5-avg"><i class="fa fa-star"></i></label>
                            </div>
                        </div>
                    </div>
                    <!-- End Rating -->
                    <div class="wrap-price">
                        <p class="price">฿{{$product[0]->pro_price}}</p>
                    </div>
                    <!-- End Price -->
                    <p class="description">{{$product[0]->pro_sub_detail}}</p>
                    <div class="options">
                        <div class="quantity">
                            <input type="number" size="4" id="pro-qunt" class="input-text qty text" title="Qty"
                                value="1" name="quantity" max="100" min="1" step="1">
                        </div>
                        <!-- End quanity -->
                        <input type="hidden" name="pro_id_hidden" id="pro_id_hidden" value="{{$product[0]->pro_id}}">
                        @if(Session::has('user_id'))
                        <a title="link" href="#" class="link-v2"
                            onclick="add_item_to_cart({{$product[0]->pro_id}})"><span>Buy now</span><i
                                class="zmdi zmdi-shopping-cart-plus"></i></a>
                        @else
                        <a title="link" href="#" class="link-v2" onclick="set_secion({{$product[0]->pro_id}})"><span>Buy
                                now</span><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        @endif
                        {{-- <a title="link" href="#" class="link-v2 link-v2-bg"><span>Wishlist</span><i class="zmdi zmdi-favorite-outline"></i></a> --}}
                    </div>
                    <!-- End Options -->
                </div>
                <!-- End product box -->
            </div>
            <!-- End col-md-6 -->
        </div>
        <!-- End product-details-content -->
        <div class="hoz-tab-container space-padding-tb-40">
            <ul class="tabs">
                <li class="item active" rel="overview">Overview</li>
                <li class="item" rel="reviews">Reviews</li>
            </ul>
            <div class="tab-container">
                <div id="overview" class="tab-content" style="display: block;">
                    <h2>About This Product</h2>
                <p>{{$product[0]->pro_detail}}</p>
                </div>
                <div id="reviews" class="tab-content" style="display: none;">
                    <div class="col-md-6">
                        <div class="coment-container">
                            <div class="panel-body">
                                <ul class="media-list" id="review_show">
                                    <li class="media images">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="{{ env('APP_ASSET') }}assets/images/avatar1.jpg"
                                                alt="images">
                                        </a>
                                        <div class="media-body">
                                            <p class="date">April 9, 2016</p>
                                            <h4 class="media-heading">jennifer lopez</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                            <p class="tags">
                                                <a href="#" title="like"><i class="zmdi zmdi-favorite-outline"></i>3</a>
                                                <a href="#" title="reply"><i class="zmdi zmdi-mail-reply"></i>3</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="media images">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="{{ env('APP_ASSET') }}assets/images/avatar1.jpg"
                                                alt="images">
                                        </a>
                                        <div class="media-body">
                                            <p class="date">April 9, 2016</p>
                                            <h4 class="media-heading">jennifer lopez</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                            <p class="tags">
                                                <a href="#" title="like"><i class="zmdi zmdi-favorite-outline"></i>3</a>
                                                <a href="#" title="reply"><i class="zmdi zmdi-mail-reply"></i>3</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End comment -->
                    </div>
                    <div class="col-md-6">
                        <div class="title-ver2">
                            <h3>Add your review</h3>
                        </div>
                        <p class="vote">Vote:</p>
                        <div class="icon-rating">
                            <input type="radio" id="bird-horizontal-rating-1" onclick="$('#rate_hidden').val(5)"value="5" name="bird-horizontal-rating">
                            <label for="bird-horizontal-rating-1"><i class="fa fa-star"></i></label>
                            <input type="radio" id="bird-horizontal-rating-2" onclick="$('#rate_hidden').val(4)" value="4" name="bird-horizontal-rating">
                            <label for="bird-horizontal-rating-2"><i class="fa fa-star"></i></label>
                            <input type="radio" id="bird-horizontal-rating-3" onclick="$('#rate_hidden').val(3)" value="3" name="bird-horizontal-rating">
                            <label for="bird-horizontal-rating-3"><i class="fa fa-star"></i></label>
                            <input type="radio" id="bird-horizontal-rating-4" onclick="$('#rate_hidden').val(2)" value="2" name="bird-horizontal-rating">
                            <label for="bird-horizontal-rating-4"><i class="fa fa-star"></i></label>
                            <input type="radio" id="bird-horizontal-rating-5" onclick="$('#rate_hidden').val(1)" name="bird-horizontal-rating" value="1">
                            <label for="bird-horizontal-rating-5"><i class="fa fa-star"></i></label>
                        </div>
                        <input type="hidden" name="rate_hidden" id="rate_hidden" value="1">
                        <form class="form-horizontal" id="review_form">
                            <div class="form-group">
                                <label class=" control-label" for="inputName">Nick Name*</label>
                                <input type="text" class="form-control" readonly id="inputName" value="{{Session::get('name')}}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputsumary">Summary of Your Review *</label>
                                <input type="text" class="form-control" readonly id="inputsumary" value="{{Session::get('email')}}" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="review_content">Review*</label>
                                <input type="text" class="form-control" id="review_content" name="review_content" placeholder="Review*">
                            </div>
                            <button class="btn link-button link-button-v2" type="button" onclick="post_review({{Session::get('user_id')}},{{$product[0]->pro_id}})">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End container -->
</div>
@endsection
@section('javascript')
<script>
    $(document).ready(function () {
        load_review()
    });

    function add_item_to_cart(pro_id) {
        let data = {
            pro_id: pro_id,
            qty: $('#pro-qunt').val()
        }
        $.post("{{route('add_item_to_cart')}}", data,
            function (data, textStatus, jqXHR) {
                str = '<div class="alert">'
                str += '<div class="alert-icon">'
                str += '<i class="fa fa-check-circle"></i>'
                str += '</div>'
                str += '<div class="alert-content">'
                str += '<h4>Item Was Successfully Added To Your Cart.</h4>'
                str += '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing'
                str +=
                    'condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in'
                str += 'elementum purus molestie.</p>'
                str += '</div>'
                str += '</div>'
                load_list_cart()
                alert_s()
            },
            "json"
        );
    }

    function load_review() {
        let data = {
            pro_id: $('#pro_id_hidden').val()
        }

        $.post("{{route('get_post_review')}}", data,
            function (data, textStatus, jqXHR) {
                let str = '';
                data = data.data
                let rate_total = 0;
                for (let i = 0; i < data.length; i++) {
                    str += '<li class="media images">'
                    str += '<a class="pull-left" href="#">'
                    str += '<img class="media-object img-circle" src="{{ env("APP_ASSET") }}assets/images/avatar1.jpg" alt="images">'
                    str += '</a>'
                    str += '<div class="media-body">'
                    str += '<p class="date">'+formatDate(new Date(data[i].create_date))+'</p>'
                    str += '<h4 class="media-heading">' + data[i].name + '</h4>'
                    str += '<p>'
                    str +=  data[i].review_content
                    str += '</p>'
                    str += '<p class="tags">'
                    str += '</p>'
                    str += '</div>'
                    str += '</li>'
                    rate_total += parseInt(data[i].review_rate);
                }
                 avg = rate_total / data.length;
                 console.log(avg)
                 if(avg<=1){
                 console.log(1)
                 $('#bird-horizontal-rating-5-avg').prop('checked',true)
                 }else if(avg<2){
                 console.log(2)
                 $('#bird-horizontal-rating-4-avg').prop('checked',true)
                 }else if(avg<3){
                 console.log(3)
                 $('#bird-horizontal-rating-3-avg').prop('checked',true)
                 }else if(avg<4){
                 console.log(4)
                 $('#bird-horizontal-rating-2-avg').prop('checked',true)
                 }else{
                 $('#bird-horizontal-rating-1-avg').prop('checked',true)
                 console.log(5)
                 }
                // $('input[name="bird-horizontal-rating-avg"]').val(avg)
                 $('#review_show').html(str);
                // str = '';
                // for (x = avg; x > 0; x--) {
                //     str += '    <i class="fa fa-star"></i>'
                // }
                // let y = 3;
                // y = (y - avg);
                // str += '<i class="fa fa-star-half-o"></i>'
                // for (y = y; y > 0; y--) {
                //     str += '    <i class="fa fa-star-o"></i>'
                // }

                // $('#btn_revie').html('reviews(' + data.length + ')')
                // $('#count_review').html('reviews(' + data.length + ')')
                // $('#rate_views_total_avg').html(str);
            },
            "json"
        );
    }

    function formatDate(date) {
  var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();

  return monthNames[monthIndex] + ' ' + day + ',' + year;
}

    function post_review(user_id, pro_id) {
        let review_content = $('#review_content').val()
        let review_rate = $('input[name="rate_hidden"]').val()
        let data = {
            pro_id: pro_id,
            user_id: user_id,
            review_content: review_content,
            review_rate: review_rate
        }
        // console.log(review_rate);
        // return;
        $.post("{{route('post_review')}}", data,
            function (data, textStatus, jqXHR) {
                $('#review_content').val('')
                $('#review_rate').val('0')
                load_review()
            },
            "json"
        );
    }



    function plus() {
        data = parseInt($('#pro-qunt').val());
        $('#pro-qunt').val(data += 1);
    }

    function pluss() {
        data = $('#pro-qunt').val();
        $('#pro-qunt').val(data - 1);
    }

    function set_secion(pro_id) {
        $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        $('.dropdown').toggleClass("active");
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        let data = {
            pro_id: pro_id,
            qty: $('#pro-qunt').val()
        }
        $.post("{{route('set_session')}}", data,
            function (data, textStatus, jqXHR) {},
            "json"
        );
    }

</script>
@endsection
