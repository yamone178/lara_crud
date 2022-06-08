@extends('master')

@section('title') Result @endsection

@section('content')

    <div class="container">
        <div class="row">
            @foreach($result as $r)

               <div class="col-4">
                   <div class="card">
                       <img src="{{$r->image}}" alt="" class="w-75 card-img">
                       <div class="card-body">
                           <div class="card-title">{{$r->title}}</div>
                           <p>{{$r->price}}</p>

                       </div>
                   </div>
               </div>




            @endforeach
        </div>
    </div>

@endsection
