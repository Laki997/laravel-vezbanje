@extends('layouts.app')


@section('title','Cars Blog')

@section('content')


<h1>Types of Cars and its producers</h1>
    <ul>
      
     @foreach($cars as $car)
       <li><a href="{{route('car',$car->id)}}">{{$car->title}} {{$car->producer}}</a></li>
    

    @endforeach

    </ul>
   
    @endsection
