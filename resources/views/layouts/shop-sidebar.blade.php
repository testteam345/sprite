    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
        <div class="widget widget-categories">
            <div class="widget-title">
                <h5>categories</h5>
            </div>
            <div class="widget-content">
                <ul class="list-unstyled">
                    @foreach ($cate_info as $row)
                    <li>
                    <a href="{{route('pro_all')}}?cate_id={{$row->cate_id}}"><i class="fa fa-angle-double-right"></i>{{$row->cate_name}}<span>({{$row->count_num}})</span></a>
                        </li>
                    @endforeach
                  
                </ul>
            </div>
        </div>
        <div class="widget widget-recent-products">
            <div class="widget-title">
                <h5>Recent Items</h5>
            </div>
            <div class="widget-content">
                <!-- Product #1 -->
                @foreach ($recent_product as $item)
                <div class="product">
                    <img width="25%" src="{{ env('APP_ASSET') }}images/product_img/{{$item->pro_img}}" alt="product"/>
                    <div class="product-desc">
                        <div class="product-title">
                        <a href="#">{{$item->pro_name}}</a>
                        </div>
                        <div class="product-meta">
                            <span class="color-theme">฿{{$item->pro_price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="widget widget-filter">
            <div class="widget-title">
                <h5>Filter By Price</h5>
            </div>
            <div class="widget-content">
                <div id="slider-range"></div>
                <p>
                    <label for="amount">Price: </label>
                    <input type="text" id="amount" readonly>
                </p>
                {{-- <a class="btn btn-secondary" href="#">filter</a> --}}
            </div>
        </div>
    </div>