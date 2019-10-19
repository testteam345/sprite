<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Repositories\ProductRepository;
use Cookie;


class UserController extends Controller
{
    public function __construct(UserRepository $UserRepository, ProductRepository $ProductRepository)
    {
        $this->UserRepository = $UserRepository;
        $this->ProductRepository = $ProductRepository;
        $this->ProductRepository->set_cate_to_array();
    }

    public function login(Request $request){
        $Users = $this->UserRepository->get_login($request->username,$request->password,$request->re_me);

        return Response()->json([
            'status' =>  $Users
        ]);
        // if($Users == "True"){
        //     return redirect('/');
        // }else{
        //     return redirect('/login');
        // }
    }
    public function logout(){
        Session::forget('user_id');
        Session::forget('name');
        // Cookie::forget('username');
        // Cookie::forget('password');
        if(Session::get('re_me')!=1){
            return redirect('/')->withCookie(Cookie::forget('username'))->withCookie(Cookie::forget('password'));
        }else{
            return redirect('/');
        }
    }

    public function register(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;

        $status = $this->UserRepository->get_register($name,$email,$username,$password);

        // if($Register != "False"){
        //     return redirect('/');
        // }else{
        //     return redirect('/register');
        // }

        return Response()->json([
            'status' =>  $status
        ]);
    }

    public function check_username(Request $request){
        $input_data = $request->all();
        $status = $this->UserRepository->check_username($input_data);
        return Response()->json([
            'status' =>  $status
        ]);
    }

    public function check_email(Request $request){
        $input_data = $request->all();
        $status = $this->UserRepository->check_email($input_data);
        return Response()->json([
            'status' =>  $status
        ]);
    }

}
