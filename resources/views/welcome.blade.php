{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<h1>Mingalarbar {{$name}}</h1>--}}

{{--<a href="{{route('contact')}}">To Contact</a>--}}
{{--<a href="{{route('about')}}">To About</a>--}}

{{--</body>--}}
{{--</html>--}}


@extends('master')
@section('title') Home @endsection
@section('content')
   <div class="container my-5">
       <div class="row">
           <div class="col-12">
              <div class="">
                  <h1>Product Filter</h1>
                  <form action="{{route('product.search')}}" method="post">

                      @csrf

                      <div class="row">
                          <div class="col">
                              <label for="" class="form-label">Price Minimum</label>
                              <input type="text" class="form-control" name="min">
                          </div>

                          <div class="col">
                              <label for="" class="form-label">Price Maximum</label>

                              <input type="text" class="form-control" name="max">
                          </div>


                          <div class="col align-self-end">
                              <button class="btn btn-primary w-100">Search</button>
                          </div>
                      </div>

                  </form>
              </div>
           </div>
       </div>
   </div>
@endsection
