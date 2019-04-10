@extends('layouts.app')

@section('content')

<div class="row">     
    <div class="col-md-8">
@foreach ($articals as $artical)
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
               
 
    <a href="{{route('articles.article.show' , ['slug' => $artical->slug ]  )}}"><button class="btn  btn-info" > Show<i style="font-size:20px; " class="fas  fa-book-reader "></i>  </button> </a>
    @if (Auth()->id() ==  $artical->user_id)
    <a href="{{route('articals.artical.edit' , ['slug' => $artical->slug ]  )}}"><button class="btn  btn-success" > Edit<i style="font-size:20px; " class="fas fa-edit "></i>
        </button> </a>             
    @endif

          
        </div>
      </div>
      @endforeach

    </div>
    <div class="class col-md-4">
        <div class="card" style="position: fixed;">
            <h5 class="card-header bg-info "><b>Number of Post</b></h5>
            <div class="card-body">
            
              <b class="card-text" style="font-size: 20px ; text-align: center; ">{{$articals->count()}}</b>
           
            </div>
          </div>
    </div>
  </div>
  @endsection