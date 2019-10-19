<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ProductRepository;

class AboutController extends Controller
{

   
    public function __construct(Request $request, ProductRepository $ProductRepository)
    {
        $this->request = $request;
        $this->ProductRepository = $ProductRepository;
        $this->ProductRepository->set_cate_to_array();
    }

    

    public function about(){
        return view('about.index');
    }
}
