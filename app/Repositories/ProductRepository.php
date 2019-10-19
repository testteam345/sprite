<?php
namespace App\Http\Repositories;
use App\ProductModel;
use App\CartModel;
use App\ReviewModel;
use App\CategoriesModel;
use App\CheckoutModel;
use App\CheckoutlistModel;
use Illuminate\Support\Facades\Session;

class ProductRepository
{

    /**
     * Return the name of model that this repository used.
     *
     * @return string
     */
    public function __construct(ProductModel $Products, CartModel $Cart,CategoriesModel $cate,ReviewModel $ReviewModel,CheckoutModel $Checkout,CheckoutlistModel $Checkoutlist)
    {
        $this->Product_model = $Products;
        $this->Cart_model = $Cart;
        $this->Cate_model = $cate;
        $this->Review_Model = $ReviewModel;
        $this->Checkout_Model = $Checkout;
        $this->Checkout_list_Model = $Checkoutlist;
    }

    public function get_product_list($active = null,$input =array()){
        $pro = $this->Product_model;
        if($active != null){
            if(isset($input['order'])&&$input['order']!=''){
                $ww = explode(',',$input['order']);
                $pro = $pro->orderby($ww[0],$ww[1]);
            }
            if(isset($input['filter_min'])&&$input['filter_min']!=''&&isset($input['filter_max'])&&$input['filter_max']!=''){
                $pro = $pro->whereBetween('tbl_products.pro_price',[$input['filter_min'],$input['filter_max']]);
            }

            if(isset($input['cc'])&&$input['cc']!=''){
                foreach($input['cc'] as $row){
                    $pro = $pro->orwhere('tbl_products.cate_id',$row);
                }
            }

            $pro = $pro->where('active',$active)
            ->leftjoin('tbl_categories','tbl_categories.cate_id','tbl_products.cate_id')
            ->paginate(16);
            return $pro;
        }else{
            $pro = $pro->get();
            return $pro;
        }
    }

    public function set_cate_to_array(){
        $data = $this->Cate_model->get();
        Session::push('cate', $data);
    }

    public function post_review($input){
        return $this->Review_Model->insert($input);
    }

    public function get_post_review($id){
        $data = $this->Review_Model->where('pro_id',$id)
        ->leftjoin('user','tbl_review.user_id','user.id')
        ->get();
        return $data;
    }

    public function get_one_product($id){
        $data = $this->Product_model
            ->leftjoin('tbl_categories','tbl_categories.cate_id','tbl_products.cate_id')
            ->where('tbl_products.pro_id',$id)
        ->get();
        return $data;
    }

    public function recent_product(){
        $data = $this->Product_model->orderby('pro_id','desc')
        ->limit(3)->get();
        return $data;
    }

    public function get_cart_list(){
        $data = $this->Cart_model
        ->where('tbl_cart.type',1)
        ->where('tbl_cart.status',1)
        ->where('tbl_cart.user_id',Session::get('user_id'))
        ->leftjoin('tbl_products','tbl_products.pro_id','tbl_cart.pro_id')
        ->get();
        return $data;
    }

    public function get_check_out(){
        $data = $this->Checkout_Model
        ->where('user_id',Session::get('user_id'))
        ->orderby('ch_id','desc')
        ->limit(1)
        ->get();
        $data = $this->Checkout_list_Model->where('ch_id',$data[0]->ch_id)
        ->leftjoin('tbl_products','tbl_products.pro_id','tbl_checkout_list.pro_id')
        ->get();
        return $data;
    }

    public function delete_cart($cate_id){
        return $this->Cart_model->where('cart_id',$cate_id)->delete();
    }

    public function add_product($input_data){
        $data_insert = array(
            'pro_name' =>$input_data['pro_name'],
            'pro_price'=>$input_data['pro_price'],
            'pro_detail'=>$input_data['pro_detail'],
            'pro_sub_detail'=>$input_data['pro_sub_detail'],
            'pro_img'=>$input_data['pro_img'],
            'cate_id'=>$input_data['cate_id'],
        );
        return  $this->Product_model->insert($data_insert);
    }

    public function edit_product($input_data){
        $data_insert = array(
            'pro_name' =>$input_data['pro_name'],
            'pro_price'=>$input_data['pro_price'],
            'pro_detail'=>$input_data['pro_detail'],
            'pro_sub_detail'=>$input_data['pro_sub_detail'],
            'pro_img'=>$input_data['pro_img'],
            'cate_id'=>$input_data['cate_id'],
        );
        return  $this->Product_model->where('pro_id',$input_data['pro_id_id'])->update($data_insert);
    }

    public function add_item_to_cart($input_data){
        $pro_id = $input_data['pro_id'];
        $num = $this->Cart_model
        ->where('tbl_cart.type',1)
        ->where('tbl_cart.status',1)
        ->where('tbl_cart.user_id',Session::get('user_id'))
        ->where('tbl_cart.pro_id',$pro_id)
        ->get();
        $qty = isset($input_data['qty'])&&$input_data['qty']!=''?$input_data['qty']:1;
        if(count($num)>0){
            $obj_update = array(
                'cart_qty' => $num[0]->cart_qty+$qty,
            );
           return $this->Cart_model->where('cart_id',$num[0]->cart_id)->update($obj_update);
        }else{
            $obj_insert = array(
                'pro_id'=>$pro_id,
                'user_id'=>Session::get('user_id'),
                'status'=>1,
                'type'=>1,
                'cart_qty'=>$qty
            );
            return $this->Cart_model->insert($obj_insert);
        }
    }

    public function update_qty($input){
        $data_update = array(
            'cart_qty'=>$input['qty']
        );
        return $this->Cart_model->where('cart_id',$input['id'])->update($data_update);
    }

    public function load_data_all(){
        $data = $this->Cate_model->orderby('cate_id','desc')->get();
        return $data;
    }

    public function add_cate($cate_name){
        $data_insert = array(
            'cate_name' => $cate_name
        );
        return $this->Cate_model->insert($data_insert);
    }

    public function update_cate($input_data){
        $data_update = array(
            'cate_name' => $input_data['cate_name']
        );
        return $this->Cate_model->where('cate_id',$input_data['cate_id'])->update($data_update);
    }

    public function delete_cate($input_data){
        return $this->Cate_model->where('cate_id',$input_data['cate_id'])->delete();
    }

    public function delete_product($input_data){
        return $this->Product_model->where('pro_id',$input_data['cate_id'])->delete();
    }

    public function load_edit_pro($pro_id){
        $data = $this->Product_model->where('pro_id',$pro_id)
        ->get();
        return $data;
    }

    public function get_cate_info(){
       $cate = $this->Cate_model->get();
       foreach($cate as $index => $row){
         $pro_data = $this->Product_model->select('cate_id')->where('cate_id',$row->cate_id)->get();
         $cate[$index]->count_num = count($pro_data);
       }
        return $cate;
    }

    public function update_cart_status(){
        $data = $this->get_cart_list();
        $ch_data = array();
        $ch_data1['user_id'] = Session::get('user_id');
        $ch_data1['status'] = 0;
        $id = $this->Checkout_Model->insertGetId($ch_data1);
        foreach($data as $index => $row){
            $ch_data[$index]['pro_id'] = $row->pro_id;
            $ch_data[$index]['ch_id'] = $id;
            $ch_data[$index]['qty'] = $row->cart_qty;
        }
        $this->Cart_model->where('user_id',Session::get('user_id'))->delete();
        return $this->Checkout_list_Model->insert($ch_data);
     }
}
