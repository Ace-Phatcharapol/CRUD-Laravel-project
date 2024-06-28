<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('blog', ['blogs' => $blogs]);
    }

    function about()
    {
        $name = "Ace Phatcharapol";
        $date = "27/6/2567";
        return view('aboutus', compact('name', 'date'));
    }

    function create()
    {
        $blogs = DB::table('blogs')->get();
        return view('form', ['blogs' => $blogs]);
    }

    function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('create');
    }

    function switch($id) {
        // ดึงข้อมูล blog ที่มี id ตรงกับ $id
        $blog = DB::table('blogs')
            ->where('id', $id)
            ->first(); // ดึงข้อมูลแถวเดียว
    
        // ถ้ามีข้อมูล blog
        if ($blog) {
            // เช็กสถานะ ถ้าเป็น true จะเปลี่ยนเป็น false, ถ้าเป็น false จะเปลี่ยนเป็น true
            $newStatus = !$blog->status;
    
            // ทำการอัพเดทสถานะในฐานข้อมูล
            DB::table('blogs')
                ->where('id', $id)
                ->update(['status' => $newStatus]);
        }
    
        // redirect กลับไปยังหน้า create (หรือหน้าอื่น ๆ ตามที่ต้องการ)
        return redirect('create');
    }
    

    function insert(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:50',
                'content' => 'required'
            ],
            [
                'title.required'=>'กรุณาป้อนชื่อบทความ',
                'title.max'=>'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาป้อนเนื้อหาบทความของคุณ'
            ]
        );
    }
}
