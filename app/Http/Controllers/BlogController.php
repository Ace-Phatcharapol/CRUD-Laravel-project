<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function showBlog(){
        $blogs = Blog::orderByDesc('id')->where('status',true)->paginate(6);
        return view('blog',compact('blogs'));
    }

    function detailBlog($id){
        $blog = Blog::find($id);
        return view('detail',compact('blog'));
    }
}
