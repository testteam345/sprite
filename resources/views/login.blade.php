@extends('layouts.fontend')
@section('contents')


<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>
                login model</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">login</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<div class="clearfix mb-150"></div>

<!-- Signin#1 Section
============================================= -->
<section id="signIn" class="sign">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <div class="text-center">
                    <button type="button" class="btn btn-primary text-center" data-toggle="modal" data-target=".login-modal-lg">sign in button</button>
                </div>
                <div class="modal model-sign fade login-modal-lg" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Welcome Back</p>
                                <h6>Login Area</h6>
                                <div class="sign-form">
                                    <form class="mb-0" action="{{ url('/getuser') }}" method="POST" validation>
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="User Name" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="pwd" placeholder="Password" name="password" required>
                                        </div>
                                        {{-- <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox">
                                                Remember me</label>
                                        </div>
                                        <div class="pull-right lost-pass">
                                            <a href="#">Forget Password?</a>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </form>
                                    <div class="form-links text-center">
                                        <a href="{{ url('/register') }}">Create New Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #signIn end -->

<div class="clearfix mb-150"></div>


@endsection

@section('javascript')
    <script>
    $(() =>{
        $('#signIn').modal('show')
    });
    </script>
@endsection