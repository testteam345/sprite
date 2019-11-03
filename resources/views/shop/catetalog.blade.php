@extends('layouts.fontend')
{{-- @extends('layouts.master') --}}
@section('contents')






<div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
        <a href="#">home</a>
        <a href="#">accessories</a>
        <a href="#">gadgets</a>
        <a href="#">sport gadgets</a>
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
                                style="background-image: url({{ env('APP_ASSET') }}img/thumbnail-14.jpg);"></div>
                            <div class="description valign-middle">
                                <div class="valign-middle-content">
                                    <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                    <div class="banner-title color">UP TO 70%</div>
                                    <div class="h4 light">best android tv box</div>
                                    <div class="empty-space col-xs-b25"></div>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                            <span class="text">learn more</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="empty-space col-xs-b60 col-sm-b0"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-shortcode style-1">
                            <div class="background"
                                style="background-image: url({{ env('APP_ASSET') }}img/thumbnail-10.jpg);"></div>
                            <div class="description valign-middle">
                                <div class="valign-middle-content">
                                    <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                    <div class="banner-title color">UP TO 70%</div>
                                    <div class="h4 light">best android tv box</div>
                                    <div class="empty-space col-xs-b25"></div>
                                    <a class="button size-1 style-3" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                            <span class="text">learn more</span>
                                        </span>
                                    </a>
                                </div>
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
                                    <img src="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}" alt="">
                                    <div class="preview-buttons valign-middle">
                                        <div class="valign-middle-content">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ env('APP_ASSET') }}img/icon-1.png"
                                                            alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
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
                                    <div class="color-selection">
                                        <div class="entry active" style="color: #a7f050;"></div>
                                        <div class="entry" style="color: #50e3f0;"></div>
                                        <div class="entry" style="color: #eee;"></div>
                                    </div>
                                    <div class="simple-article size-4"><span
                                            class="color">฿{{$product->pro_price}}</span></div>
                                </div>
                                <div class="description">
                                    <div class="simple-article text size-2">{{$product->pro_sub_detail}}</div>
                                    <div class="icons">
                                        <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a class="entry open-popup" data-rel="3"><i class="fa fa-eye"
                                                aria-hidden="true"></i></a>
                                        <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="empty-space col-xs-b35 col-sm-b0"></div>
            <div class="row">
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
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-md-b70"></div>
        </div>
        <div class="col-md-3 col-md-pull-9">
            <div class="h4 col-xs-b10">popular categories</div>
            <ul class="categories-menu transparent">
                <li>
                    <a href="#">laptops &amp; computers</a>
                    <div class="toggle"></div>
                    <ul>
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">video &amp; photo cameras</a>
                    <div class="toggle"></div>
                    <ul>
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">smartphones</a>
                    <div class="toggle"></div>
                    <ul>
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">tv &amp; audio</a>
                    <div class="toggle"></div>
                    <ul>
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">gadgets</a>
                    <div class="toggle"></div>
                    <ul>
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">car electronics</a>
                    <div class="toggle"></div>
                    <ul>
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">video games &amp; consoles</a>
                </li>
                <li>
                    <a href="#">software</a>
                </li>
                <li>
                    <a href="#">offeci accessories</a>
                </li>
                <li>
                    <a href="#">accessories</a>
                </li>
            </ul>

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

            <div class="h4 col-xs-b25">Choose Color</div>
            <div class="color-selection size-1">
                <div class="entry active" style="color: #a7f050;"></div>
                <div class="entry" style="color: #50e3f0;"></div>
                <div class="entry" style="color: #eee;"></div>
                <div class="entry" style="color: #4d900c;"></div>
                <div class="entry" style="color: #edb82c;"></div>
                <div class="entry" style="color: #7d3f99;"></div>
                <div class="entry" style="color: #3481c7;"></div>
                <div class="entry" style="color: #bf584b;"></div>
            </div>

            <div class="empty-space col-xs-b25 col-sm-b50"></div>

            <div class="h4 col-xs-b25">Operation System</div>
            <label class="checkbox-entry">
                <input type="checkbox"><span>Android</span>
            </label>
            <div class="empty-space col-xs-b10"></div>
            <label class="checkbox-entry">
                <input type="checkbox"><span>IOS</span>
            </label>
            <div class="empty-space col-xs-b10"></div>
            <label class="checkbox-entry">
                <input type="checkbox"><span>Windows Phone</span>
            </label>
            <div class="empty-space col-xs-b10"></div>
            <label class="checkbox-entry">
                <input type="checkbox"><span>Symbian</span>
            </label>
            <div class="empty-space col-xs-b10"></div>
            <label class="checkbox-entry">
                <input type="checkbox"><span>Blackberry OS</span>
            </label>

            <div class="empty-space col-xs-b25 col-sm-b50"></div>

            <div class="h4 col-xs-b25">Popular Tags</div>
            <div class="tags light clearfix">
                <a class="tag">headphoness</a>
                <a class="tag">accessories</a>
                <a class="tag">new</a>
                <a class="tag">wireless</a>
                <a class="tag">cables</a>
                <a class="tag">devices</a>
                <a class="tag">gadgets</a>
                <a class="tag">brands</a>
                <a class="tag">replacements</a>
                <a class="tag">cases</a>
                <a class="tag">cables</a>
                <a class="tag">professional</a>
            </div>

            <div class="empty-space col-xs-b25 col-sm-b50"></div>


        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Hot Sale</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-28.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-29.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-30.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article"><span class="color">$24.00</span>&nbsp;&nbsp;&nbsp;<span
                            class="line-through">$32.00</span></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Top Rated</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-31.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-32.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-33.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article dark">$4.00</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Popular</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-34.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-35.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-36.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article dark">$4.00</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-b25">
            <div class="h4 col-xs-b25">Best Choice</div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-37.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                    <div class="simple-article dark">$98.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-38.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                    <div class="simple-article dark">$12.00</div>
                </div>
            </div>
            <div class="col-xs-b10"></div>
            <div class="product-shortcode style-4 rounded clearfix">
                <a class="preview" href="#"><img src="img/product-39.jpg" alt="" /></a>
                <div class="description">
                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                    <div class="simple-article dark">$4.00</div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('pup-up')
<div class="popup-wrapper">
    <div class="bg-layer"></div>
    
    <div class="popup-content" data-rel="3">
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
                                            data-background="img/product-preview-4.jpg"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="img/product-preview-5.jpg"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="img/product-preview-6.jpg"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="img/product-preview-7.jpg"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="img/product-preview-8.jpg"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="img/product-preview-9.jpg"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy"
                                            data-background="img/product-preview-10.jpg"></div>
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
                                    <div class="swiper-slide">
                                        <div class="product-small-preview-entry">
                                            <img src="{{ env('APP_ASSET') }}assets/img/product-preview-4_.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                        <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                        <div class="row col-xs-b25">
                            <div class="col-sm-6">
                                <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="rate-wrapper align-inline">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="simple-article size-2 align-inline">128 Reviews</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span
                                        class="grey">127-#5238</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span>
                                </div>
                            </div>
                        </div>
                        <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc
                            sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus
                            id vulputate erat.</div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">size:</div>
                            </div>
                            <div class="col-sm-9">
                                <select class="SlectBox">
                                    <option disabled="disabled" selected="selected">Choose size</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title">color:</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="color-selection size-1">
                                    <div class="entry active" style="color: #a7f050;"></div>
                                    <div class="entry" style="color: #50e3f0;"></div>
                                    <div class="entry" style="color: #eee;"></div>
                                    <div class="entry" style="color: #4d900c;"></div>
                                    <div class="entry" style="color: #edb82c;"></div>
                                    <div class="entry" style="color: #7d3f99;"></div>
                                    <div class="entry" style="color: #3481c7;"></div>
                                    <div class="entry" style="color: #bf584b;"></div>
                                </div>
                            </div>
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
            </div>
            <div class="button-close"></div>
        </div>
    </div>
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
        $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        $('.dropdown').toggleClass("active");
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        // }
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
