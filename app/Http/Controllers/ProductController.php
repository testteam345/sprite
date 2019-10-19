<?php

namespace App\Http\Controllers;
use App\Http\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;

class ProductController extends Controller
{

    public function __construct(Request $request, ProductRepository $ProductRepository)
    {
        $this->request = $request;
        $this->ProductRepository = $ProductRepository;
        $this->ProductRepository->set_cate_to_array();
    }

    public function index_page(){
        $input = $this->request->all();
        $products = $this->ProductRepository->get_product_list(1,$input);
        $cate_info = $this->ProductRepository->get_cate_info();
        $recent_product = $this->ProductRepository->recent_product();
        return view('welcome',
        ['products'=>$products,
        'cate_info'=>$cate_info,
        'recent_product'=>$recent_product]);
    }

    public function shop_list(){
        $input = $this->request->all();
        $products = $this->ProductRepository->get_product_list(1,$input);
        $cate_info = $this->ProductRepository->get_cate_info();
        $recent_product = $this->ProductRepository->recent_product();
        return view('shop.catetalog',
        ['products'=>$products,
        'cate_info'=>$cate_info,
        'recent_product'=>$recent_product]);
    }

    public function get_cart_list(){
        $cart_lists = $this->ProductRepository->get_cart_list();
        if($this->request->ajax()) {
            return Response()->json([
                'cart_list' => $cart_lists
            ]);
        }
    }

    public function get_check_out(){
        $cart_lists = $this->ProductRepository->get_check_out();
        if($this->request->ajax()) {
            return Response()->json([
                'cart_list' => $cart_lists
            ]);
        }
    }

    public function get_one_product($id){
        $product =  $this->ProductRepository->get_one_product($id);
        return view('shop.single_shop',
        ['product'=>$product]);
    }

    public function delete_cart(){
        $input_data = $this->request;
        if($this->request->ajax() && $this->ProductRepository->delete_cart($input_data['id'])) {
            return Response()->json([
                'status' => true
            ]);
        }
    }

    public function set_session(){
        $input_data = $this->request;
            Session::put('pro_id',$input_data['pro_id']);
        if(isset($input_data['qty'])){
            Session::put('qty',$input_data['qty']);
        }
            return Response()->json([
                'status' => Session::get('pro_id')
            ]);
    }

    public function add_item_to_cart(){
        $input_data = $this->request;
        $this->ProductRepository->add_item_to_cart($input_data);

        if($this->request->ajax()) {
            return Response()->json([
                'status' => true
            ]);
        }
    }

    public function load_data_all(){
        $list = $this->ProductRepository->load_data_all();
        if($this->request->ajax()) {
            return Response()->json([
                'list' => $list
            ]);
        }
    }

    public function add_cate(){
        $input_data = $this->request;
        $list = $this->ProductRepository->add_cate($input_data['cate_name']);
        if($this->request->ajax()) {
            return Response()->json([
                'status' => $list
            ]);
        }
    }

    public function update_cate(){
        $input_data = $this->request;
        $list = $this->ProductRepository->update_cate($input_data);
        if($this->request->ajax()) {
            return Response()->json([
                'status' => $list
            ]);
        }
    }

    public function delete_cate(){
        $input_data = $this->request;
        $list = $this->ProductRepository->delete_cate($input_data);
        if($this->request->ajax()) {
            return Response()->json([
                'status' => $list
            ]);
        }
    }

    public function delete_product(){
        $input_data = $this->request;
        $list = $this->ProductRepository->delete_product($input_data);
        if($this->request->ajax()) {
            return Response()->json([
                'status' => $list
            ]);
        }
    }

    public function load_edit_pro(){
        $input_data = $this->request;
        $list = $this->ProductRepository->load_edit_pro($input_data['id']);
        if($this->request->ajax()) {
            return Response()->json([
                'pro_data' => $list
            ]);
        }
    }

    public function update_cart_status(){
        $data  = $this->ProductRepository->update_cart_status();
        // print_r($data);
        return view('shop.check_out');
    }

    public function edit_product(){
        $request = $this->request;
        $input_data=$request->all();
        $image = $request->file('image');
        if(isset($image) && $image != ''){
            if(isset($input_data['old_img'])&&$input_data['old_img'] != ''){
                File::delete(public_path('images/product_img').'/'.$input_data['old_img']);
            }
         $new_name = date('YmdHis').'_'.rand(0,9).rand(0,9).rand(0,9) . '.' . $image->getClientOriginalExtension();
         $image->move(public_path('images/product_img'), $new_name);
         $image = $new_name;
         $input_data['pro_img'] = $new_name;
        }else{
            $image = false;
            $input_data['pro_img'] = $input_data['old_img'];
        }
        $list = $this->ProductRepository->edit_product($input_data);
        return response()->json([
         'file'=>  $list
        ]);
    }

    public function add_product(){
        $request = $this->request;
        $input_data=$request->all();
        $image = $request->file('image');
        if(isset($image) && $image != ''){
         $new_name = date('YmdHis').'_'.rand(0,9).rand(0,9).rand(0,9) . '.' . $image->getClientOriginalExtension();
         $image->move(public_path('images/product_img'), $new_name);
         $image = $new_name;
         $input_data['pro_img'] = $new_name;
        }else{
            $image = false;
            $input_data['pro_img'] = 0;
        }
        $list = $this->ProductRepository->add_product($input_data);
        return response()->json([
         'file'=>  $list
        ]);
    }

    public function manage_product(){
        $cate_list = $this->ProductRepository->load_data_all();
        return view('manage.product',['list_cate'=>$cate_list]);
    }

    public function get_product(){
        $list = $this->ProductRepository->get_product_list();
        return response()->json([
            'products'=>  $list
           ]);
    }

    public function update_qty(){
        $request = $this->request->all();
        $list = $this->ProductRepository->update_qty($request);
        return response()->json([
            'status'=>  $list
           ]);
    }

    public function post_review(){
        $request = $this->request->all();
        $list = $this->ProductRepository->post_review($request);
        return response()->json([
            'status'=>  $list
           ]);
    }

    public function get_post_review(){
        $request = $this->request->all();
        $list = $this->ProductRepository->get_post_review($request['pro_id']);
        return response()->json([
            'data'=>  $list
           ]);
    }

}
