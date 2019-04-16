
@extends('layouts.app')

@section('content')
<div class="card mt-3 ">
        <div class="card-header bg-primary">
          {{$post->title}}
        </div>
        <div class="card-body">        
          <blockquote class="blockquote mb-0">
             <p>{{$post->body}}</p>
              <hr>
              <p>{{$post->short_description}}</p>           
           </blockquote>
        <footer class="blockquote-footer">Created By : <cite title="Source Title">{{ $post->user->name }}</cite></footer>
        <footer class="blockquote-footer">Created at : <cite title="Source Title">{{$post->created_at->ago()}}</cite></footer>
      </div>
</div>
@endsection