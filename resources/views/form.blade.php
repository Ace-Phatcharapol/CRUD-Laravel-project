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
@endsection
