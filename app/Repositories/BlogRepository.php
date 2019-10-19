<?php
namespace App\Http\Repositories;

use App\Blog;
use Illuminate\Support\Facades\Session;
class BlogRepository
{

    /**
    * Return the name of model that this repository used.
    *
    * @return string
    */
    public function __construct(Blog $Blogs)
    {
        $this->Blogs = $Blogs;
    }

    public function lists_blog() {
        $list = $this->Blogs->all();

        return $list;
    }



}
