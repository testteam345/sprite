<?php
namespace App\Http\Repositories;

use App\Account;
use Illuminate\Support\Facades\Session;
use App\Http\Repositories\ProductRepository;
use Cookie;
class UserRepository
{

    /**
    * Return the name of model that this repository used.
    *
    * @return string
    */
    public function __construct(Account $Accounts, ProductRepository $ProductRepository)
    {
        $this->Accounts = $Accounts;
        $this->ProductRepository = $ProductRepository;
    }

    public function get_login($username,$password,$re_me) {
        $result_user = $username;
        $result_pass = md5($password);

        $get_login = $this->Accounts
        ->where('username',$result_user)
        ->where('password',$result_pass)
        ->get();
        $minutes = (60*24)*7;

        if($re_me == 1){
            Cookie::queue('username', $result_user, $minutes);
            Cookie::queue('password', $password, $minutes);
        }else{
            Cookie::forget('username');
            Cookie::forget('password');
        }

        $count = count($get_login);
        if($count == 1) {
            Session::put('user_id',$get_login[0]->id);
            Session::put('re_me',$re_me);
            Session::put('name',$get_login[0]->name);
            Session::put('email',$get_login[0]->user_email);
            if(Session::has('pro_id')){
                $input = array(
                    'pro_id'=>Session::get('pro_id')
                );
                if(Session::has('qty')){
                    $input['qty']=Session::get('qty');
                }
                $this->ProductRepository->add_item_to_cart($input);
            }
            return true;
        }else{
            return false;
        }
    }

    public function get_register($name,$email,$username,$password) {
        $re_name = $name;
        $re_email = $email;
        $re_user = $username;
        $re_pass = md5($password);

        $check_username = $this->Accounts
        ->where('username',$re_user)
        ->get();

        $count = count($check_username);

        if($count > 0){
            return false;
        }else{
            $get_regis = $this->Accounts;
            $get_regis->name = $re_name;
            $get_regis->username = $re_user;
            $get_regis->password = $re_pass;
            $get_regis->user_email = $re_email;
            $get_regis->create_date = now();
            $get_regis->update_date = now();
            $get_regis->save();

            if($get_regis){
                Session::put('user_id',$get_regis->id);
                Session::put('name',$get_regis->name);
                if(Session::has('pro_id')){
                    $input = array(
                        'pro_id'=>Session::get('pro_id')
                    );
                    if(Session::has('qty')){
                        $input['qty']=Session::get('qty');
                    }
                    $this->ProductRepository->add_item_to_cart($input);
                }

            }

            return true;
        }
    }

    public function check_username($input=null){
        if($input==null){return false;}
        $data = $this->Accounts->where('username',$input['username'])
        ->get();
        if(count($data)>0){
            return false;
        }else{
            return true;
        }
    }

    public function check_email($input=null){
        if($input==null){return false;}
        $data = $this->Accounts->where('user_email',$input['email'])
        ->get();
        if(count($data)>0){
            return false;
        }else{
            return true;
        }
    }


}
