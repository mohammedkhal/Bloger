
@extends('layouts.app')

@section('content')

 {{$user->first_name}} 
{{$user->second_name}} 
{{$user->third_name}} <br> 
{{$user->email}} <br>
{{$user->country}} <br>
{{$user->website}} <br>
{{$user->type}} <br>

@endsection