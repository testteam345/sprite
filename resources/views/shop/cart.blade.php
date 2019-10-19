@extends('layouts.fontend')

@section('contents')
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li class="active">Shopping Cart</li>
        </ul>
    </div>
    <!-- End container -->
</div>

<div class="main-content shopping-cart"> 
    <div class="shopping-cart">
    <div class="container">    
          <div class="title-ver2">
              <h3>Shopping Cart</h3>
          </div>
          <!-- End title product -->
          <table class="table space-80">
              <thead>
                  <tr>
                      <th class="product-photo">Product</th>
                      <th class="produc-name"></th>
                      <th class="product-price">Price</th>
                      <th class="product-quantity">Quantity</th>
                      <th class="total-price">Total</th>
                      <th class="product-remove"></th>
                  </tr>
              </thead>
              <tbody id="cart_item_l">
                  <tr class="item_cart">
                      <td class="product-photo"><img src="assets/images/products/1.jpg" alt="Futurelife" height="100" width="100"></td>
                      <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                      <td class="product-price">$69.60</td>
                      <td class="product-quantity"><input type="number" size="4" class="input-text qty text" title="SL" value="1" min="0" step="1"></td>
                      <td class="total-price">$69.60</td>
                      <td class="product-remove"><a class="remove" href="#" title=""></a></td>
                  </tr>
                  <tr class="item_cart">
                      <td class="product-photo"><img src="assets/images/products/1.jpg" alt="Futurelife" height="100" width="100"></td>
                      <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                      <td class="product-price">$69.60</td>
                      <td class="product-quantity"><input type="number" size="4" class="input-text qty text" title="SL" value="1" min="0" step="1"></td>
                      <td class="total-price">$69.60</td>
                      <td class="product-remove"><a class="remove" href="#" title=""></a></td>
                  </tr>
              </tbody>
          </table>
      </div>
      <!-- End container -->
  </div>
  <!-- End shopping cart -->
      
  <div class="shipping-total">
      <div class="container">
          {{-- <div class="col-md-6 coupon">
              <div class="title-ver2">
                  <h3>Coupon code</h3>
              </div>
              <div class="contact-form">
                  <form class="form-horizontal">
                      <div class="form-group col-md-7">
                          <input type="text" class="form-control" id="inputfname" placeholder="Enter your first name...">       
                      </div> 
                      <div class="form-group col-md-5">
                          <button value="Submit" class="btn link-button link-border-raidus" type="submit">Appy coupon</button>
                      </div> 
                  </form> 
              </div>
              <a class="btn link-button link-border-raidus bg-gray" href="#" title="Continue shopping">Continue shopping</a>
              <a class="btn link-button link-border-raidus bg-gray" href="#" title="Update cart">Update cart</a>
          </div> --}}
          <!-- End col-md-6 -->
          <div class="col-md-6 cart-totals text-price">
              <div class="title-ver2">
                  <h3>Cart totals</h3>
              </div>
              <ul>
                  <li><span class="text">Subtotal</span><span class="number" id="sub_total">$ 1,990.00</span></li>
                  <li><span class="text">Vat 7%</span><span class="number" id="vat">$ 50.00</span></li>
                  <li><span class="text totals">Totals Cart</span><span class="number totals" id="total_net">$ 2,040.00</span></li>
              </ul>
              <a class="btn link-button link-border-raidus" href="{{route('update_cart_status')}}" title="Proceed to checkout">Proceed to checkout</a>
          </div>
          <!-- End col-md-6 -->
      </div>
      <!-- End shipping-total -->
      </div>           
      <!-- End conainer -->
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
                    str += '<tr class="item_cart">'
                    str += '<td class="product-photo">'
                    str += '<img src="' + path + 'images/product_img/' + data.cart_list[i].pro_img + '" alt="Futurelife" height="100" width="100">'
                    str += '</td>'
                    str += '<td class="produc-name"> <a href="#" title="">' + data.cart_list[i].pro_name + '</a></td>'
                    str += '<td class="product-price">'+data.cart_list[i].pro_price+'</td>'
                    str += '<td class="product-quantity">'
                    str += '<input type="number" size="4" id="pro1-qunt'+data.cart_list[i].cart_id+'" onchange="plus('+data.cart_list[i].cart_id+')" class="input-text qty text" title="SL" value="' + parseInt(data.cart_list[i].cart_qty)+'" min="0" step="1">'
                    str += '</td>'
                    str += '<td class="total-price">฿ ' + total.toFixed(2) + '</td>'
                    str += '<td class="product-remove"><a class="remove" onclick="delete_cart(' + data.cart_list[i].cart_id +')" href="#" title=""></a></td>'
                    str += '</tr>';
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
        // $('#pro1-qunt'+id).val(data+=1);
        update_qty($('#pro1-qunt'+id).val(),id);
    }

    function pluss(id){
        data = $('#pro1-qunt'+id).val();
        $('#pro1-qunt'+id).val(data-1);
        update_qty($('#pro1-qunt'+id).val(),id);
    }

</script>
@endsection
