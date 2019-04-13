
@extends('layouts.app')

@section('content')
<img class="rounded-circle" src="storage/app/public/avatars/{{$user->profile_pic}}" alt=" noImage" style="width: 3cm; height:  3cm ; ">
{{$user->profile_pic}} <br>
 {{$user->first_name}} 
{{$user->second_name}} 
{{$user->third_name}} <br> 
{{$user->email}} <br>
{{$user->country}} <br>
{{$user->website}} <br>
{{$user->type}} <br>

@endsection