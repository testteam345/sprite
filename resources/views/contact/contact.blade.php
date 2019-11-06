@extends('layouts.fontend')

@section('contents')

<div class="header-empty-space"></div>



<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

<div class="container">
    <div class="text-center">
       
        <div class="h2">CONTACT US</div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>

<div class="empty-space col-sm-b15 col-md-b50"></div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="img/icon-25.png" alt="">
                <div class="title h6">address</div>
                <div class="description simple-article size-2">บริษัท โอพี คาเมร่า จำกัด (มหาชน) 115/1 ถนนสวัสดิการ 1 แขวงหนองแขม เขตหนองแขม กรุงเทพฯ 10160</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="img/icon-23.png" alt="">
                <div class="title h6">phone</div>
                <div class="description simple-article size-2" style="line-height: 26px;">
                    <a href="tel:+35235551238745">095-949-9104</a>
                    <br/>
                    <a href="tel:+35235557585238">096-234-3119</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="img/icon-28.png" alt="">
                <div class="title h6">email</div>
                <div class="description simple-article size-2"><a href="mailto:offce@exzo.com"> OPCAMERA@GMAIL.COM</a></div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-description-shortcode style-1">
                <img class="icon" src="img/icon-26.png" alt="">
                <div class="title h6">Follow us</div>
                <div class="follow light">
                    <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="empty-space col-xs-b25 col-sm-b50"></div>

<div class="container">    
    <div class="map-wrapper">
        <div id="map-canvas" class="full-width" data-lat="13.568380" data-lng="100.810273" data-zoom="14"></div>
    </div>
    <div class="addresses-block hidden">
        <a class="marker" data-lat="13.568380" data-lng="100.810273" data-string="1. บริษัทเรา"></a>
    </div>
</div>

<div class="empty-space col-xs-b25 col-sm-b50"></div>



<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

@endsection

@section('javascript')
<script>
</script>
@endsection
