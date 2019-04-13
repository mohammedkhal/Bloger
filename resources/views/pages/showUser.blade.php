
@extends('layouts.app')

@section('content')


@foreach ($users as $user)

<a href="{{route('user.find' , ['slug' => $user->username])}}"> <h5>{{$user->first_name  }}  {{$user->third_name}}</h5> </a> 
   @if ($user->id == auth('user')->id() )
     <a href="{{ route('account.show' , ['slug' => $user->username]) }}"> <button class="btn btn-primary"> edite ur Personal data</button> </a>       
   @endif 
@endforeach
@endsection