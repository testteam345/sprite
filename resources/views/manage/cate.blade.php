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
                            <a class="nav-link active" href="{{route('manage_cate')}}">Cate</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('manage_product')}}">Product</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1>Add catetagories</h1>
                        </div>
                        <div class="col-sm-4"><button class="btn btn-success" onclick="modal_too()"> add </button></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
             
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <section id="shopgrid" class="shop shop-grid">
            <div class="container">
                    
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               
                               <table class="table table-hover" id="table_cate">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
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

            <div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">catetagories manage</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="cate_form">
                                <div class="form-group">
                                        <label for="formGroupExampleInput">cate name</label>
                                        <input type="text" class="form-control" name="name" id="cate_name" placeholder="cate name">
                                      </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btn_save" onclick="add_cate()">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection


@section('javascript')

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
    $(function () {
        load_data_all()
        load_data_table()
    });

    function load_data_table(){
        $('#table_cate').DataTable();
    }

    function load_data_all(){
        $.ajax({
            type: "post",
            url: "{{route('load_data_all')}}",
            dataType: "json",
            success: function (data) {
                console.log(data);
                let str='',x=0;
                for(let i = 0; i<data.list.length; i++){
                    let btn_e = '<button class="btn btn-warning" onclick="edit('+data.list[i].cate_id+',`'+data.list[i].cate_name+'`)">edit</button>';
                    let btn_d = '<button class="btn btn-danger" onclick="delete_cate('+data.list[i].cate_id+')">delete</button>';
                    x+=1
                   str += '<tr>';
                   str += '    <th scope="row">'+x+'</th>';
                   str += '    <td>'+data.list[i].cate_name+'</td>';
                   str += '    <td>'+btn_e+'&nbsp;'+btn_d+'</td>';
                   str += '</tr>';
                }
                    $('#row_cate').html(str);
                    load_data_table();
            }
        });
    }

    function modal_too(){
        $('#btn_save').removeAttr('onclick');
        $('#btn_save').attr('onclick', 'add_cate()');
        $('#add_product_modal').modal('toggle')
        $("#cate_form").trigger("reset");
    }

    function add_cate(){
        let data ={
            cate_name:$('#cate_name').val()
        }
        $.post("{{route('add_cate')}}", data,
            function (data, textStatus, jqXHR) {
                if(data.status === true){
                load_data_all()
                modal_too();
                }
            },
            "json"
        );
    }

    function edit(cate_id,cate_name){
        modal_too()
        $('#cate_name').val(cate_name)
        $('#btn_save').removeAttr('onclick');
        $('#btn_save').attr('onclick', 'update_cate('+cate_id+')');
    }

    function update_cate(cate_id){
        let data ={
            cate_name:$('#cate_name').val(),
            cate_id:cate_id
        }
        $.post("{{route('update_cate')}}", data,
            function (data, textStatus, jqXHR) {
               modal_too()
               load_data_all()
            },
            "json"
        );
    }

    function delete_cate(cate_id){
        let data ={
            cate_id:cate_id
        }
        $.post("{{route('delete_cate')}}", data,
            function (data, textStatus, jqXHR) {
            //    modal_too()
               load_data_all()
            },
            "json"
        );
    }
    </script>
@endsection