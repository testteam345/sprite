@extends('layouts.fontend')
{{-- @extends('layouts.master') --}}
@section('contents')

<div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
        <a href="#">home</a>
        <a href="#">products</a>
       
    </div>
    <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>
    <div class="row">
        <div class="col-md-9 col-md-push-3">
            <div class="swiper-container rounded">
                <div class="swiper-button-prev style-1 hidden"></div>
                <div class="swiper-button-next style-1 hidden"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-shortcode style-1">
                            <div class="background"
                                style="background-image: url({{ env('APP_ASSET') }}img/BC2.jpg);"></div>
                            <div class="description valign-middle">
                                
                                <div class="empty-space col-xs-b60 col-sm-b0"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>

            <div class="align-inline spacing-1">
                <div class="h4">Sport gadgets</div>
            </div>
            <div class="align-inline spacing-1">
                <div class="simple-article size-1">SHOWING <b class="grey">15</b> OF <b
                        class="grey">{{$products->total()}}</b> RESULTS</div>
            </div>
            <div class="align-inline spacing-1 hidden-xs">
                <a class="pagination toggle-products-view active"><img src="{{ env('APP_ASSET') }}img/icon-14.png"
                        alt="" /><img src="{{ env('APP_ASSET') }}img/icon-15.png" alt="" /></a>
                <a class="pagination toggle-products-view"><img src="{{ env('APP_ASSET') }}img/icon-16.png"
                        alt="" /><img src="{{ env('APP_ASSET') }}img/icon-17.png" alt="" /></a>
            </div>
            <div class="align-inline spacing-1 filtration-cell-width-1">
                <select class="SlectBox small">
                    <option disabled="disabled" selected="selected">Most popular products</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class="align-inline spacing-1 filtration-cell-width-2">
                <select class="SlectBox small">
                    <option disabled="disabled" selected="selected">Show 30</option>
                    <option value="volvo">30</option>
                    <option value="saab">50</option>
                    <option value="mercedes">100</option>
                    <option value="audi">200</option>
                </select>
            </div>


            <div class="empty-space col-xs-b25 col-sm-b60"></div>

            <div class="products-content">
                <div class="products-wrapper">
                    <div class="row nopadding">
                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="product-shortcode style-1">
                                <div class="title">
                                    <div class="simple-article size-1 color col-xs-b5"><a
                                            href="#">{{$product->cate_name}}</a></div>
                                    <div class="h6 animate-to-green"><a href="#">{{$product->pro_name}}</a></div>
                                </div>
                                <div class="preview">
                                    <img width="200px" src="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}" alt="">
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ env('APP_ASSET') }}img/icon-1.png"
                                                            alt=""></span>
                                                    
                                                </span>
                                            </a>
                                            
                                            @if (Session::has('user_id'))
                                            <a class="button size-2 style-3" href="#" onclick="add_item_to_cart({{$product->pro_id}})">
                                            @else
                                            <a class="button size-2 style-3" href="#" onclick="set_secion({{$product->pro_id}})">
                                                    @endif
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ env('APP_ASSET') }}img/icon-3.png"
                                                            alt=""></span>
                                                         
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="simple-article size-4"><span
                                            class="color">฿{{$product->pro_price}}</span></div>
                                </div>
                                <div class="description">
                                    <div class="simple-article text size-2">{{$product->pro_sub_detail}}</div>
                                    <div class="icons">
                                        
                                        <a class="entry open-popup" data-rel="{{$product->pro_id}}"><i class="fa fa-eye"
                                                aria-hidden="true"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="empty-space col-xs-b35 col-sm-b0"></div>
            {{ $products->links('layouts.pagination') }}

            {{-- <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <a class="button size-1 style-5" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            <span class="text">prev page</span>
                        </span>
                    </a>
                </div>
                
                <div class="col-sm-6 text-center">
                    <div class="pagination-wrapper">
                        <a class="pagination active">1</a>
                        <a class="pagination">2</a>
                        <a class="pagination">3</a>
                        <a class="pagination">4</a>
                        <span class="pagination">...</span>
                        <a class="pagination">23</a>
                    </div>
                </div>
                <div class="col-sm-3 hidden-xs text-right">
                    <a class="button size-1 style-5" href="#">
                        <span class="button-wrapper">
                            <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <span class="text">prev page</span>
                        </span>
                    </a>
                </div>
            </div> --}}

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-md-b70"></div>
        </div>
        <div class="col-md-3 col-md-pull-9">
           

            <div class="empty-space col-xs-b25 col-sm-b50"></div>

            <div class="h4 col-xs-b25">Price</div>
            <div id="prices-range"></div>
            <div class="simple-article size-1">PRICE: <b class="grey">$<span class="min-price">40</span> - $<span
                        class="max-price">300</span></b></div>

            <div class="empty-space col-xs-b25 col-sm-b50"></div>

            <div class="h4 col-xs-b25">Brands</div>
            <form id="where_form" action="{{route('pro_all')}}" method="get">
                @foreach ($cate_info as $row)
                <label for="c1{{$row->cate_id}}" class="checkbox-entry">
                    <input type="checkbox" onclick="$('#where_form').submit()" id="c1{{$row->cate_id}}"
                        value="{{$row->cate_id}}"
                        {{(isset($_GET['cc'][$row->cate_id])&& $_GET['cc'][$row->cate_id]==$row->cate_id)?'checked':''}}
                        name="cc[{{$row->cate_id}}]"><span>{{$row->cate_name}}</span>
                </label>
                <div class="empty-space col-xs-b10"></div>
                @endforeach
            </form>

            <div class="empty-space col-xs-b25 col-sm-b50"></div>



        </div>
    </div>
</div>




@endsection

@section('pup-up')
    @foreach ($products as $product)
    <div class="popup-content" data-rel="{{$product->pro_id}}">
        <div class="layer-close"></div>
        <div class="popup-container size-2">
            <div class="popup-align">
                <div class="row">
                    <div class="col-sm-6 col-xs-b30 col-sm-b0">
                        <div class="main-product-slider-wrapper swipers-couple-wrapper">
                            <div class="swiper-container swiper-control-top">
                                <div class="swiper-button-prev hidden"></div>
                                <div class="swiper-button-next hidden"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-space col-xs-b30 col-sm-b60"></div>

                            <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3"
                                data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5"
                                data-center="1" data-click="1">
                                <div class="swiper-button-prev hidden"></div>
                                <div class="swiper-button-next hidden"></div>
                                <div class="swiper-wrapper">
                                 
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="simple-article size-3 grey col-xs-b5">{{$product->cate_name}}</div>
                        <div class="h3 col-xs-b25">{{$product->pro_name}}</div>
                        <div class="row col-xs-b25">
                            <div class="col-sm-6">
                                <div class="simple-article size-5 grey">PRICE: <span class="color">฿{{$product->pro_price}}</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span
                                        class="grey">#{{$product->pro_id}}</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span>
                                </div>
                            </div>
                        </div>
                        <div class="simple-article size-3 col-xs-b30">{{$product->pro_sub_detail}}</div>
                        <div class="row col-xs-b40">
                            {{$product->pro_detail}}
                            </div>
                        </div>
                        <div class="row col-xs-b40">
                            
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">quantity:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="quantity-select">
                                    <span class="minus"></span>
                                    <span class="number">1</span>
                                    <span class="plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row m5 col-xs-b40">
                            <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                <a class="button size-2 style-2 block" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="{{ env('APP_ASSET') }}assets/img/icon-2.png"
                                                alt=""></span>
                                        <span class="text">add to cart</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a class="button size-2 style-1 block noshadow" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                        <span class="text">add to favourites</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-2">share:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="follow light">
                                    <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>
        @endforeach
@endsection
@section('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        // $('.dropdown').find('.dropdown-menu').stop(true, true).fadeOut().toggleClass("hover");
        // $('.dropdown').toggleClass("active"); var trigger = $('.discount_selector');

        $("#Slider1").slider({
            from: 0,
            to: 1000,
            step: 100,
            smooth: true,
            round: 0,
            change: function () {
                alert('testtttt')
            }
        });



        // $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        // $('.dropdown').toggleClass("active");

        $("#Slider1").on('change', function (event) {
            alert('te');
            // location.href="{{route('pro_all')}}?order="+$('#order').val()+"&&filter_min="+ui.values[0]+'&filter_max='+ui.values[1];
        });

    });




    function add_item_to_cart(pro_id) {
        let data = {
            pro_id: pro_id
        }
        $.post("{{route('add_item_to_cart')}}", data,
            function (data, textStatus, jqXHR) {
                console.log(data)
                load_list_cart()
                alert_s()
            },
            "json"
        );
    }

    function showVal(test) {
        alert(test);
    }

    function set_secion(pro_id) {
        $('.popup-content').removeClass('active');
		$('.popup-wrapper, .popup-content[data-rel="1"]').addClass('active');
		$('html').addClass('overflow-hidden');
    
        let data = {
            pro_id: pro_id
        }
        $.post("{{route('set_session')}}", data,
            function (data, textStatus, jqXHR) {
                console.log(data)
            },
            "json"
        );
    }

</script>
@endsection
