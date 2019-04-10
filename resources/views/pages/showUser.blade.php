
@extends('layouts.app')

@section('content')

@foreach ($users as $user)
   <a href="{{route('account.show' , ['username' => $user->username])}}"> <h5>{{$user->first_name  }}  {{$user->third_name}}</h5> </a> <br>
@endforeach
@endsection