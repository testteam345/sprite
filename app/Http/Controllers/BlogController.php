<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\BlogRepository;
use App\Http\Repositories\ProductRepository;

class BlogController extends Controller
{

    public function __construct(BlogRepository $BlogRepository, ProductRepository $ProductRepository)
    {
        $this->BlogRepository = $BlogRepository;
        $this->ProductRepository = $ProductRepository;
        $this->ProductRepository->set_cate_to_array();
    }

    public function blog_list(){

        $blog_lists = $this->BlogRepository->lists_blog();

        $result = [
            'blog' => $blog_lists
        ];

        return view('blog.index',$result);
        // return $blog_lists;
    }
}
