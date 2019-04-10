
@extends('layouts.app')

@section('content')
<div class="card mt-3 ">
        <div class="card-header bg-primary">
          {{$artical->title}}
        </div>
        <div class="card-body">
        
       
          <blockquote class="blockquote mb-0">
            <p>{{$artical->body}}</p>
            <hr>
            <p>{{$artical->short_description}}</p>
            
          </blockquote>
        <footer class="blockquote-footer">Created By : <cite title="Source Title">{{ $artical->user->name }}</cite></footer>
        <footer class="blockquote-footer">Created at : <cite title="Source Title">{{$artical->created_at->ago()}}</cite></footer>
      </div>
       
          
        <div class="card-footer">
               
      
        </div>
      </div>
@endsection