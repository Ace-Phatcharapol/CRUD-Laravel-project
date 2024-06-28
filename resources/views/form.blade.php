@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
    <h2>เขียนบทความใหม่</h2>
    <hr>
    <form action="/insert">
        @csrf
    <div class="form-group mb-3">
        <label for="title" class="form-label">ชื่อบทความ</label>
        <input type="text" name="title" class="form-control" id="formControlInput">
    </div>
    @error('title')
    <div class="my-2">
        <span class="text-danger">{{$message}}</span>
    </div>
    @enderror
    <div class="form-group mb-3">
        <label for="content" class="form-label">เนื้อหาบทความ</label>
        <textarea class="form-control" name="content" id="content" rows="3"></textarea>
    </div>
    @error('content')
    <div class="my-2">
        <span class="text-danger">{{$message}}</span>
    </div>
    @enderror
    <input type="submit" value="บันทึก" class="btn btn-primary">
    <a href="{{route('blog')}}" class="btn btn-success">บทความทั้งหมด</a>
</form>
<br>
<table class="table table-bordered text-center align-middle">
    <thead>
      <tr>
        <th scope="col" class="col-1">id</th>
        <th scope="col" class="col-2">ชื่อบทความ</th>
        <th scope="col" class="col-4">เนื้อหาบทความ</th>
        <th scope="col" class="col-2">สถานะ</th>
        <th scope="col" class="col-3">จัดการบทความ</th>
      </tr>
    </thead>
@foreach ($blogs as $blog)
    <tbody>
      <tr>
        <th scope="row">{{$blog->id}}</th>
        <td>{{$blog->title}}</td>
        <td>{{$blog->content}}</td>
        <td>@if ($blog->status == true)
            <a href="#" class="btn btn-success">เผยแพร่</a>
            @else
            <a href="#" class="btn btn-warning">ฉบับร่าง</a>
        @endif
        <td><a href="{{route('delete',$blog->id)}}" onclick="return confirm('คุณต้องการลบบทความหรือไม่ ?')" class="btn btn-danger">ลบ</a></td>
      </tr>
    </tbody>
@endforeach
</table>
@endsection
