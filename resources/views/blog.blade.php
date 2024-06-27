@extends('layout')
@section('title', 'หน้าบทความทั้งหมด')
@section('content')
    <h1>
        บทความทั้งหมด</h1>
    <hr>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
            </tr>
        </thead>
        @foreach ($blogs as $blog)
            <tbody>
                <tr>
                    <th scope="row">{{ $blog['id'] }}</th>
                    <td>{{ $blog['title'] }}</td>
                    <td>{{ $blog['content'] }}</td>
                    <td>
                        @if ($blog['status'] === true)
                            <a href="#" class="btn btn-success">เผยแพร่</a>
                        @elseif($blog['status'] === false)
                            <a href="#" class="btn btn-warning">ฉบับร่าง</a>
                        @else
                            {{ $blog['status'] }}
                        @endif
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($blogs as $blog)
        @if ($blog['status'] == true)
            <div class="col">
                <div class="card h-100">
                    <img src="/images/placeholder.webp" class="card-img-top" alt="{{ $blog['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog['title'] }}</h5>
                        <p class="card-text">{{ $blog['content'] }}</p>
                        <p class="text-success">เผยแพร่</p>
                        <a href="{{route('blogid', $blog['id'])}}" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            @else
            <div class="col">
                <div class="card h-100">
                    <img src="/images/placeholder.webp" class="card-img-top" alt="{{ $blog['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog['title'] }}</h5>
                        <p class="card-text">{{ $blog['content'] }}</p>
                        <p class="text-danger">ฉบับร่าง</p>
                        <a href="{{route('blogid', $blog['id'])}}" class="btn btn-primary">ดูเพิ่มเติม</a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
@endsection
