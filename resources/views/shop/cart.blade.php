@extends('layouts.fontend')

@section('contents')
<div class="header-empty-space"></div>

<div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
        <a href="#">home</a>
        <a href="#">shopping cart</a>
    </div>
    <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>
    <div class="text-center">
        <div class="simple-article size-3 grey uppercase col-xs-b5">shopping cart</div>
        <div class="h2">check your products</div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="container">
    <table class="cart-table">
        <thead>
            <tr>
                <th style="width: 95px;"></th>
                <th>product name</th>
                <th style="width: 150px;">price</th>
                <th style="width: 260px;">quantity</th>
                <th style="width: 70px;">color</th>
                <th style="width: 150px;">total</th>
                <th style="width: 70px;"></th>
            </tr>
        </thead>
        <tbody id="cart_item_l">
        </tbody>
    </table>
    <div class="empty-space col-xs-b35"></div>
    <div class="row">
        <div class="col-sm-6 col-md-5 col-xs-b10 col-sm-b0">
       
        </div>
        <div class="col-sm-6 col-md-7 col-sm-text-right">
            <div class="buttons-wrapper">
               
                <a class="button size-2 style-3" href="{{route('update_cart_status')}}">
                    <span class="button-wrapper">
                        <span class="icon"><img src="img/icon-4.png" alt=""></span>
                        <span class="text">proceed to checkout</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="row">
       
        <div class="col-md-6">
            <h4 class="h4">cart totals</h4>
            <div class="order-details-entry simple-article size-3 grey uppercase">
                <div class="row">
                    <div class="col-xs-6">
                        cart subtotal
                    </div>
                    <div class="col-xs-6 col-xs-text-right">
                        <div class="color" id="sub_total">00.00</div>
                    </div>
                </div>
            </div>
            <div class="order-details-entry simple-article size-3 grey uppercase">
                <div class="row">
                    <div class="col-xs-6">
                        vat 7%
                    </div>
                    <div class="col-xs-6 col-xs-text-right">
                        <div class="color" id="vat">free shipping</div>
                    </div>
                </div>
            </div>
            <div class="order-details-entry simple-article size-3 grey uppercase">
                <div class="row">
                    <div class="col-xs-6">
                        order total
                    </div>
                    <div class="col-xs-6 col-xs-text-right">
                        <div class="color" id="total_net">$00.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        get_data_cart_list()
    });

    function get_data_cart_list() {
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
                    total += parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i].cart_qty)
                    sub_total = parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i].cart_qty)
                   str += '     <tr>'
                   str += '     <td data-title=" ">'
                   str += '         <a class="cart-entry-thumbnail" href="#"><img width="85px" src="' + path + 'images/product_img/' + data.cart_list[i].pro_img + '" alt=""></a>'
                   str += '     </td>'
                   str += '     <td data-title=" "><h6 class="h6"><a href="#">' + data.cart_list[i].pro_name + '</a></h6></td>'
                   str += '     <td data-title="Price: ">฿'+data.cart_list[i].pro_price+'</td>'
                   str += '     <td data-title="Quantity: ">'
                   str += '         <div class="quantity-select">'
                   str += '             <span class="minus" data-id="' + data.cart_list[i].cart_id +'"></span>'
                   str += '             <span class="number">'+data.cart_list[i].cart_qty+'</span>'
                   str += '            <span class="plus" data-id="' + data.cart_list[i].cart_id +'"></span>'
                   str += '         </div>'
                   str += '     </td> <input type="hidden" name="test" value="'+data.cart_list[i].cart_qty+'" id="pro1-qunt'+data.cart_list[i].cart_id+'">'

                   str += '     <td data-title="Color: "><div class="cart-color" style="background: #eee;"></div></td>'
                   str += '     <td data-title="Total:">฿'+sub_total+'</td>'
                   str += '     <td data-title="">'
                   str += '         <div onclick="delete_cart(' + data.cart_list[i].cart_id +')" class="button-close"></div>'
                   str += '     </td>'
                   str += ' </tr>'
                    // str += '<tr class="item_cart">'
                    // str += '<td class="product-photo">'
                    // str += '<img src="' + path + 'images/product_img/' + data.cart_list[i].pro_img + '" alt="Futurelife" height="100" width="100">'
                    // str += '</td>'
                    // str += '<td class="produc-name"> <a href="#" title="">' + data.cart_list[i].pro_name + '</a></td>'
                    // str += '<td class="product-price">'+data.cart_list[i].pro_price+'</td>'
                    // str += '<td class="product-quantity">'
                    // str += '<input type="number" size="4" id="pro1-qunt'+data.cart_list[i].cart_id+'" onchange="plus('+data.cart_list[i].cart_id+')" class="input-text qty text" title="SL" value="' + parseInt(data.cart_list[i].cart_qty)+'" min="0" step="1">'
                    // str += '</td>'
                    // str += '<td class="total-price">฿ ' + total.toFixed(2) + '</td>'
                    // str += '<td class="product-remove"><a class="remove" onclick="delete_cart(' + data.cart_list[i].cart_id +')" href="#" title=""></a></td>'
                    // str += '</tr>';
                }
                $('#cart_item_l').html(str)
                // $('#in_cart_label').html(len)
                $('#sub_total').html('฿' + total.toFixed(2))
                vat = (total.toFixed(2)*7)/100
                $('#total_net').html('฿' + (total+vat).toFixed(2))
                $('#vat').html('฿' + (vat).toFixed(2))
                
            },
            error: (error) => {
                console.log(error)
            }
        });
    }

    $(document).on('click', '.quantity-select .minus', function(){
        var newValue = parseInt($(this).parent().find('.number').text(), 10);
        
        $(this).parent().find('.number').text(newValue>1?(newValue-1):newValue);
        
        let id = $(this).attr('data-id');
        update_qty(newValue-1,id);		
    });

    $(document).on('click', '.quantity-select .plus', function(){
    	var newValue = parseInt($(this).parent().find('.number').text(), 10);
        $(this).parent().find('.number').text(newValue+1);
        let id = $(this).attr('data-id');

        update_qty(newValue+1,id);
    });


function plus(id){
        alert('test');
        data = parseInt($('#pro1-qunt'+id).val());
         $('#pro1-qunt'+id).val(data+1);
        update_qty($('#pro1-qunt'+id).val(),id);
    }

    function pluss(id){
        data = $('#pro1-qunt'+id).val();
        $('#pro1-qunt'+id).val(data-1);
        update_qty($('#pro1-qunt'+id).val(),id);
    }
    
    function update_qty(qty,id){
        // alert('test');
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
  

    

</script>
@endsection
