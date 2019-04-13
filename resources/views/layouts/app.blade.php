<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <ul class="nav">
       
        
    
          <li class="nav-item">
              <a class="nav-link active" href="{{route('auth.sign-in')}}">User SignIn</a>
          </li>
           
          <li class="nav-item">
              <a class="nav-link" href="{{route('signin')}}">Admins SignIn</a>
            </li>
         
         
         
               
                <li class="nav-item">
                  <a class="nav-link" href="{{route('posts.index')}}">All Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.all')}}">All Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.sign-out.auth')}}">Sign Out</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>

              <li class="nav-item">
<a href="{{route('posts.create')}}"><button class=" btn btn-primary" >create New POst</button></a>              </li>
    
        <div class="class container mt-5">
                @include('inc.messeges')
                @yield('content')
                            
        </div>
       
    </body>
    </html>
    