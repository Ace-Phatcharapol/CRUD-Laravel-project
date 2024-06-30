@extends('layouts.app')
@section('title','แก้ไขบทความ')
@section('content')
<h2>แก้ไขบทความ</h2>
    <hr>
    <form method="POST" action="{{route('update',$blog->id)}}">
        @csrf
    <div class="form-group mb-3">
        <label for="title" class="form-label">ชื่อบทความ</label>
        <input type="text" name="title" class="form-control" id="formControlInput" value="{{$blog->title}}">
    </div>
    @error('title')
    <div class="my-2">
        <span class="text-danger">{{$message}}</span>
    </div>
    @enderror
    <div class="form-group mb-3">
        <label for="content" class="form-label">เนื้อหาบทความ</label>
        <textarea class="form-control" name="content" id="content" rows="3">{{$blog->content}}</textarea>
    </div>
    @error('content')
    <div class="my-2">
        <span class="text-danger">{{$message}}</span>
    </div>
    @enderror
    <input type="submit" value="อัปเดต" class="btn btn-primary" onclick="confirm('ยืนยันการบันทึกเนื้อหาใหม่หรือไม่ ?')">
    <a href="{{route('create')}}" class="btn btn-secondary">ย้อนกลับ</a>
    <a href="{{route('blog')}}" class="btn btn-success">บทความทั้งหมด</a>
</form>
@endsection