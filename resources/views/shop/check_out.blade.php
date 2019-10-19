@extends('layouts.fontend')

@section('contents')

<div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="active">Blog Details</li>
            </ul>
        </div>
        <!-- End container -->
    </div>

<section id="shopcart" class="shop shop-cart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="cart-product">
                                <th width="20%" class="cart-product">Blank</th>
                                <th class="cart-product-price">Bank account</th>
                                <th class="cart-product-quantity">Bank account name</th>
                            </tr>
                        </thead>
                        <tbody id="">
                           <tr>
                            <td><img src="{{ env('APP_ASSET') }}img/blank_1.jpg" style="width: 80%" alt=""></td>
                            <td class="cart-product-price" style="vertical-align: middle;"><h1>1234567890</h1></td>
                            <td  style="vertical-align: middle;"><h4>Codeing Complate</h4></td>
                           </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="shopcart-2" class="shop shop-cart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="cart-product">
                                <th class="cart-product-item">Product</th>
                                <th class="cart-product-item">Product name</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody id="cart_item_l">
                           
                        </tbody>
                        <tfoot>
                            <tr class="cart-product-action">
                                <td colspan="5">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div>
                                                sub total
                                            </div>
                                            <div>
                                                vat 7%
                                            </div>
                                            <div>
                                                   Net
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                           <div id="sub_total_ch"></div>
                                           <div id="vat_ch"></div>
                                           <div id="Net_ch" style="font-size: 24px;color:black;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        get_data_cart_list()
    });

    function get_data_cart_list() {
        $.ajax({
            type: "post",
            url: "{{route('get_check_out')}}",
            dataType: "json",
            success: (data) => {
                console.log(data)
                let path = "{{ env('APP_ASSET') }}"
                let len = data.cart_list.length
                let str = '',
                    total = 0;
                for (let i = 0; i < len; i++) {
                    total += parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i].qty)
                    total_tmp = parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i].qty)
                    str += '<tr class="cart-product">'
                    str += '<td class="cart-product-item">'
                    str += '<div class="cart-product-img" width="10%">'
                    str += '<img src="' + path + 'images/product_img/' + data.cart_list[i].pro_img +
                        '" alt="product" style="width: 80%">'
                    str += '</div>'
                    str += '<div class="cart-product-name">'
                    str += '</div></td>'
                    str += '<td><h4>' + data.cart_list[i].pro_name + '</h4></td>'
                    str += '<td class="cart-product-price">฿ ' + data.cart_list[i].pro_price + '</td>'
                    str += '<td class="cart-product-quantity">'+data.cart_list[i].qty+'</td>'
                    str += '<td class="cart-product-total">฿ ' + total_tmp.toFixed(2) + '</td>'
                    str += '</tr>';
                }
                $('#cart_item_l').html(str)
                // $('#in_cart_label').html(len)
                $('#sub_total_ch').html('฿' + total.toFixed(2))
                vat = (total*7)/100
                $('#vat_ch').html('฿' + vat.toFixed(2))
                $('#Net_ch').html('฿' + (vat+total).toFixed(2))
                
            },
            error: (error) => {
                console.log(error)
            }
        });
    }

    
    function update_qty(qty,id){
        let data = {
            qty:qty,
            id:id
        }
        $.post("{{route('update_qty')}}", data,
            function (data, textStatus, jqXHR) {
                get_data_cart_list()
                load_list_cart()
            },
            "json"
        );
    }
  

    function plus(id){
        data = parseInt($('#pro1-qunt'+id).val());
        $('#pro1-qunt'+id).val(data+=1);
        update_qty($('#pro1-qunt'+id).val(),id);
    }

    function pluss(id){
        data = $('#pro1-qunt'+id).val();
        $('#pro1-qunt'+id).val(data-1);
        update_qty($('#pro1-qunt'+id).val(),id);
    }

</script>
@endsection
