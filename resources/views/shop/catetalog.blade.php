@extends('layouts.fontend')
{{-- @extends('layouts.master') --}}
@section('contents')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li>Smart watches</li>
            <li class="active">Listing 1</li>
        </ul>
    </div>
    <!-- End container -->
</div>


<div class="listing-ver1">
    <div class="container">  
      <div id="secondary" class="widget-area col-xs-12 col-md-3">
          <h3 class="title-secondary">Smart Watches</h3>
          <aside class="widget widget_color_option hassub">
              <h4 class="active">Warehouse Options</h4>
              <div class="menu block">
                  <form id="where_form" action="{{route('pro_all')}}" method="get">
                        @foreach ($cate_info as $row)
                        <input type="checkbox" onclick="$('#where_form').submit()" id="c1{{$row->cate_id}}" value="{{$row->cate_id}}" {{(isset($_GET['cc'][$row->cate_id])&& $_GET['cc'][$row->cate_id]==$row->cate_id)?'checked':''}} name="cc[{{$row->cate_id}}]">
                        <label for="c1{{$row->cate_id}}"><span class="icon"></span>{{$row->cate_name}}<span class="count">{{$row->count_num}}</span></label>
                        @endforeach
                  </form>
              </div>
          </aside>
          {{-- <aside class="widget">
                <h4 class="active">Price Range</h4>
                <div class="layout-slider">
                  <span><input id="Slider1" type="text" name="price" value="200;800"  /></span>
                </div>
            </aside> --}}
      </div>
      <!-- End Secondary -->
      <div id="primary" class="col-xs-12 col-md-9">     
              <!-- End Banner Grid -->
              <div class="ordering">
                  <div class="ordering-left">
                      <span>Short by:</span>
                      <a href="{{route('pro_all')}}?order=pro_id,desc" title="NewestArrivals">NewestArrivals</a>
                      <a href="{{route('pro_all')}}?order=pro_price,desc" title="Price high to low">Price high to low</a>
                      <a href="{{route('pro_all')}}?order=pro_price,asc" title="Price low to high">Price low to high</a>
                  </div>
                  <!-- end left -->
                  <div class="ordering-right">
                      <span class="list"></span>
                      <span class="col active"></span>
                      {{-- <form action="#" method="get" class="order-by">
                          <select class="orderby" name="orderby">
                                  <option>40 per page</option>
                                  <option>30 per page</option>
                                  <option>20 per page</option>
                                  <option>10 per page</option>
                          </select>
                      </form> --}}
                  </div>
                  <!-- End right -->
              </div>
              <!-- End ordering -->
              <div class="products grid_full grid_sidebar">
                    @foreach ($products as $product)
                      <div class="item-inner">
                          <div class="product">
                              <p class="product-title">{{$product->pro_name}}</p>
                              <p class="product-price"><span>price: </span>฿ {{$product->pro_price}}</p>
                              <a class="product-images" href="{{route('get_one_product',['id'=>$product->pro_id])}}" title="">
                                  <img class="primary_image" src="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}" alt="images">
                                  <img class="secondary_image" src="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}" alt="images">
                              </a>
                              <p class="description">{{$product->pro_sub_detail}}</p>
                              <div class="action">
                                  <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                                  <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                                  @if (Session::has('user_id'))
                                  <a href="#" onclick="add_item_to_cart({{$product->pro_id}})" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                  @else
                                  <a href="#" onclick="set_secion({{$product->pro_id}})" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                  @endif
                              </div>
                          </div>
                      </div>
                      @endforeach
              </div>


              <!-- End product-content products  -->
              <div class="pagination-container">
                        {{ $products->links('layouts.pagination') }}
              </div>
              <!-- End pagination-container -->
      </div>
      <!-- End Primary -->
      </div>           
      <!-- End conainer -->
      </div>

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
            change: function(){
                alert('testtttt')
            }
            });

           

        // $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        // $('.dropdown').toggleClass("active");

        $( "#Slider1" ).on('change',function( event ) {
            alert('te');
            // location.href="{{route('pro_all')}}?order="+$('#order').val()+"&&filter_min="+ui.values[0]+'&filter_max='+ui.values[1];
        });

        });




    function add_item_to_cart(pro_id){
        let data = {
            pro_id:pro_id
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

    function showVal(test){
        alert(test);
    }

    function set_secion(pro_id){
        $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        $('.dropdown').toggleClass("active");
        $("html, body").animate({ scrollTop: 0 }, "slow");
        // }
        let data = {
            pro_id:pro_id
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
