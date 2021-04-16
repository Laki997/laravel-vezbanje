@extends('layouts.app')

@section('title','Doors')

@section('content')


<ul>

@foreach ($cars as $car)

<li><a href="{{route('car',$car->id)}}">{{$car->title}} {{$car->producer}}</a></li>


</ul>

@endforeach



@endsection