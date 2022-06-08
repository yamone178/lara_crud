{{--<h1>About </h1>--}}

{{--<a href="{{route('contact')}}">To Contact</a>--}}
{{--<a href="{{route('home')}}">To Home</a>--}}

{{--{{ '<script>alert("hello")</script>' }}--}}

{{--{!! '<script>alert("hello")</script>' !!}--}}

{{--{!! $name !!}--}}

@extends('master')
@section('title') About @endsection
@section('content')
    <h1>This is about</h1>
@endsection

@push('foot')
    <h2>This is push</h2>
@endpush
