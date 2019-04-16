@extends('layouts.app')
@section('content')

<h3>up user information @-@</h3>
<hr>
<form action="{{route('account.update' , ['username' => $user->username ])}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">first name</label>
            <input type="text" class="form-control" name="first_name" id="inputEmail4" value="{{$user->first_name}}">
          </div>
          <div class="form-group col-md-4">
                <label for="inputEmail4">second_name</label>
                <input type="text" class="form-control" name="second_name" value="{{$user->second_name}} ">
              </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">third_name</label>
            <input type="text" name="third_name" class="form-control" value="{{$user->third_name}} ">
          </div>
        </div>
        <div class="form-group">
          <input type="file" class="form-control-file" name="avatar"  aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
      </div>
        <div class="form-group">
          <label for="inputAddress">user name</label>
          <input type="text" class="form-control" id="" name="username" value="{{$user->username}}">
        </div>
        <div class="form-group">
                <label for="inputAddress">password</label>
                <input type="password" class="form-control" id="" name="password"  >
        </div>
        <div class="form-group">
          <label for="inputAddress2">email</label>
          <input type="text" class="form-control" name="email" value="{{$user->email}} ">
        </div>
        <div class="form-group">
                <label for="">website</label>
                <input type="text" class="form-control" name="website" value="{{$user->website}} ">
              </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">country</label>
            <input type="text" class="form-control"  name="country" value="{{$user->country}} ">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">type</label>
            <select  value="{{$user->type}} " id="inputState" class="form-control" name="type">
              <option value="user" >User</option>
              <option value="writer" >Write</option>
            </select>
          </div>
         
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


@endsection