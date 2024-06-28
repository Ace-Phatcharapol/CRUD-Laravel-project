@extends('layout')
@section('title', 'หน้าบทความทั้งหมด')
@section('content')
    <h1>
        บทความทั้งหมด</h1>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($blogs as $blog)
        @if ($blog->status == true)
            <div class="col">
                <div class="card h-100">
                    <img src="/images/placeholder.webp" class="card-img-top" alt="{{ $blog->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ Str::limit($blog->content,100) }}</p>
                        <p class="text-success">เผยแพร่</p>
                        <a href="{{route('blogid', $blog->id)}}" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            @else
            <div class="col">
                <div class="card h-100">
                    <img src="/images/placeholder.webp" class="card-img-top" alt="{{ $blog->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ Str::limit($blog->content,100) }}</p>
                        <p class="text-danger">ฉบับร่าง</p>
                        <a href="{{route('blogid', $blog->id)}}" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
@endsection
