@extends('layouts.app')
@section('content')

{{$user->first_name}} <br>
{{$user->second_name}} <br>
{{$user->third_name}} <br>
{{$user->email}} <br>
{{$user->website}} <br>
{{$user->type}} <br>
@endsection