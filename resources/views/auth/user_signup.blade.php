@extends('layouts.app')
@section('content')

<h3>user sign up  @-@</h3>
<hr>
<form action="{{route('auth.sign-up.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">first name</label>
            <input type="text" class="form-control" name="first_name" id="inputEmail4" >
          </div>
          <div class="form-group col-md-4">
                <label for="inputEmail4">second_name</label>
                <input type="text" class="form-control" name="second_name" id="" >
              </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">third_name</label>
            <input type="text" name="third_name" class="form-control" id="inputPassword4" >
          </div>
        </div>
        <div class="form-group">
          <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
      </div>


        <div class="form-group">
          <label for="inputAddress">user name</label>
          <input type="text" class="form-control" id="" name="username">
        </div>
        <div class="form-group">
                <label for="inputAddress">password</label>
                <input type="password" class="form-control" id="" name="password" >
        </div>
        <div class="form-group">
          <label for="inputAddress2">email</label>
          <input type="text" class="form-control" name="email" id="" >
        </div>
        <div class="form-group">
                <label for="">website</label>
                <input type="text" class="form-control" name="website" id="" >
              </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">country</label>
            <input type="text" class="form-control"  name="country" id="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">type</label>
            <select id="inputState" class="form-control" name="type">
              <option value="user" >User</option>
              <option value="writer" >Write</option>
            </select>
          </div>
         
        </div>
        
        <button type="submit" class="btn btn-primary">Sign up</button>
      </form>


@endsection