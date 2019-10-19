@extends('layouts.bend')
@section('contents')
<section id="page-title" class="page-title">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('manage_cate')}}">Cate</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{route('manage_product')}}">Product</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>Add Product</h1>
                    </div>
                    <div class="col-sm-4"><button class="btn btn-success" onclick="modal_too()"> add </button></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="shopgrid" class="shop shop-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-hover" id="table_product">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">img</th>
                                    <th scope="col">name</th>
                                    <th scope="col">sub detail</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody id="row_cate">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product manage</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="pro_form" method="POST" action="#" enctype="multipart/form-data">
                    <div class="form-group" id="file_test">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>

                    <div class="form-group">
                        <label for="cate_id">catetagories name</label>
                        <select name="cate_id" id="cate_id" class="form-control">
                            <option value="">Please select catetagories</option>
                            @foreach ($list_cate as $row)
                            <option value="{{$row->cate_id}}">{{$row->cate_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pro_name">Product name</label>
                        <input type="text" class="form-control" name="pro_name" id="pro_name"
                            placeholder="product name">
                    </div>

                    <div class="form-group">
                        <label for="pro_sub_detail">sub detail</label>
                        <input type="text" class="form-control" name="pro_sub_detail" id="pro_sub_detail"
                            placeholder="sub detail">
                    </div>

                    <div class="form-group">
                        <label for="pro_detail">detail</label>
                        <textarea name="pro_detail" id="pro_detail" class="form-control"></textarea>
                        {{-- <input type="text" class="form-control" name="pro_detail" id="pro_detail"
                            placeholder="cate name"> --}}
                    </div>

                    <div class="form-group">
                        <label for="pro_price">Price</label>
                        <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="Price">
                    </div>
                    <input type="hidden" name="pro_id_id" id="pro_id_id">
                    <input type="hidden" name="old_img" id="old_img">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="form_sub()">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        load_data_all();
        $('#pro_form').on('submit', function (event) {
            event.preventDefault();
            let p_url = "{{ route('add_product') }}";
            if($('#pro_id_id').val()!=''){
                p_url = "{{ route('edit_product') }}";
            }
            $.ajax({
                url: p_url,
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data)
                    modal_too()
                    load_data_all()
                }
            })
        });
        load_data_table()
    });

    function form_sub() {
        $('#pro_form').submit();
    }

    function load_data_table(){
        //$('#table_product').DataTable();
    }

    function load_data_all() {
        $.ajax({
            type: "post",
            url: "{{route('get_product')}}",
            dataType: "json",
            success: function (data) {
                // console.log(data);
                let str = '',
                    x = 0;
                for (let i = 0; i < data.products.length; i++) {
                    let btn_e = '<button class="btn btn-warning" onclick="load_edit(' + data.products[i].pro_id + ')">edit</button>';
                    let btn_d = '<button class="btn btn-danger" onclick="delete_product(' +
                        data.products[i]
                        .pro_id + ')">delete</button>';
                    x += 1
                    if(data.products[i].pro_sub_detail.length > 50){
                        data.products[i].pro_sub_detail = data.products[i].pro_sub_detail.substring(0, 50)+'...'
                    }
                    str += '<tr>';
                    str += '    <th scope="row">' + x + '</th>';
                    str += '    <td> <img src="{{ env("APP_ASSET") }}images/product_img/' + data.products[i].pro_img + '" width="200px"></td>';
                    str += '    <td> ' + data.products[i].pro_name + '</td>';
                    str += '    <td> ' + data.products[i].pro_sub_detail + '</td>';
                    str += '    <td>' + btn_e + '&nbsp;' + btn_d + '</td>';
                    str += '</tr>';
                }
                 $('#row_cate').html(str);
                load_data_table()
            }
        });
    }

    function modal_too() {
        $('#btn_save').removeAttr('onclick');
        $('#btn_save').attr('onclick', 'add_cate()');
        $('#add_product_modal').modal('toggle')
        $("#pro_form").trigger("reset");
        $('#pro_id_id').val('')
    }

    function load_edit(id){
        let data = {
            id:id
        }
        $.post("{{route('load_edit_pro')}}", data,
            function (data, textStatus, jqXHR) {
                // console.log(data.pro_data)
                let list = data.pro_data[0]
                $('#cate_id').val(list.cate_id)
                $('#pro_name').val(list.pro_name)
                $('#pro_sub_detail').val(list.pro_sub_detail)
                $('#pro_detail').val(list.pro_detail)
                $('#pro_price').val(list.pro_price)
                $('#pro_id_id').val(list.pro_id)
                $('#old_img').val(list.pro_img)
            },
            "json"
        );
        modal_too()
    }

    function delete_product(cate_id){
        let data ={
            cate_id:cate_id
        }
        $.post("{{route('delete_product')}}", data,
            function (data, textStatus, jqXHR) {
            //    modal_too()
            load_data_all()
            },
            "json"
        );
    }


    $("#pro_price").on("keypress keyup blur", function (event) {
        //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 ||
                event.which > 57)) {
            event.preventDefault();
        }
    });

</script>
@endsection
