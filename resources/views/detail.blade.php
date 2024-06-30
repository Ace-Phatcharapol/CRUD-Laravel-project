@extends('layouts.app')
@section('title')
    {{$blog->title}}
@endsection
@section('content')
    <h1>
        บทความทั้งหมด</h1>
    <hr>
    <div>
        <h2>{{ $blog->title }}</h2>
        {!! $blog->content !!}
    </div>
@endsection