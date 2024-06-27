<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $blogs = [
            [
                'id' => 1,
                'title' => "บทความที่ 1",
                'content' => "เนื้อหาบทความที่ 1",
                'status' => true,
            ],
            [
                'id' => 2,
                'title' => "บทความที่ 2",
                'content' => "เนื้อหาบทความที่ 2",
                'status' => true,
            ],
            [
                'id' => 3,
                'title' => "บทความที่ 3",
                'content' => "เนื้อหาบทความที่ 3",
                'status' => true,
            ],
            [
                'id' => 4,
                'title' => "บทความที่ 4",
                'content' => "เนื้อหาบทความที่ 4",
                'status' => true,
            ],
            [
                'id' => 5,
                'title' => "บทความที่ 5",
                'content' => "เนื้อหาบทความที่ 5",
                'status' => true,
            ],
            [
                'id' => 6,
                'title' => "บทความที่ 6",
                'content' => "เนื้อหาบทความที่ 6",
                'status' => false,
            ],
        ];
        return view('blog',compact('blogs'));
    }

    function about(){
        $name = "Ace Phatcharapol";
        $date = "27/6/2567";
        return view('aboutus', compact('name', 'date'));
    }

    function create(){
        return view('form');
    }

    function insert(Request $request){
        $request->validate([
            'title'=>'required|max:50',
            'content'=>'required'
        ]);
    }
}
