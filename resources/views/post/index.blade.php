@extends('layouts.layout')
@section('content')

<div>
  	@foreach($posts as $post => $value)
        <p>{{$value->name}}</p>
     @endforeach     	  
</div>

@stop
