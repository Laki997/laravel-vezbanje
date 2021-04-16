@extends('layouts.app')

@section('title','Doors')

@section('content')


<h1>Cars with 4 Doors</h1>

<ul>

@foreach ($cars as $car)

<li><a href="{{route('car',$car->id)}}">{{$car->title}} {{$car->producer}}</a></li>

@endforeach
</ul>





@endsection