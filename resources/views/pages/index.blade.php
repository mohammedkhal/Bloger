@extends('layouts.app')

@section('content')

<div class="row">     
    <div class="col-md-8">
@foreach ($posts as $post)
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
            
             <h3>tags : </h3>
             @foreach ($post->tagJoin as $tag)
          {{$tag->tag->tag_name}}
          @endforeach
             <h3>categories : </h3>
          @foreach ($post->categoryJoin as $category)
          {{$category->category->category_name}}
          @endforeach
        <footer class="blockquote-footer">Created By : <cite title="Source Title">{{ $post->user->first_name }}</cite></footer>
        <footer class="blockquote-footer">Created at : <cite title="Source Title">{{$post->created_at->ago()}}</cite></footer>
      </div>
       
          
        <div class="card-footer">
               
 
    <a href="{{route('posts.post.show' , ['slug' => $post->slug ]  )}}"><button class="btn  btn-info" > Show<i style="font-size:20px; " class="fas  fa-book-reader "></i>  </button> </a>
    @if (Auth()->id() ==  $post->user_id)
    <a href="{{route('posts.post.edit' , ['slug' => $post->slug ]  )}}"><button class="btn  btn-success" > Edit<i style="font-size:20px; " class="fas fa-edit "></i>
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
            
              <b class="card-text" style="font-size: 20px ; text-align: center; ">{{$posts->count()}}</b>
           
            </div>
          </div>
    </div>
  </div>
  @endsection