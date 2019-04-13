@extends('layouts.app')
@section('content')

<form action="{{route('articles.create.store')}}" method="post">
@csrf

 Title : <input type="text" name="title"> <br>
 short_description : <input type="text" name="short_description"> <br>
 slug : <input type="text" name="slug"> <br>
 <b>body</b><br>
 <textarea name="body" id="" cols="30" rows="7" class="form-control"></textarea>
 
 <label for=""> Category:</label><br>

<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" name="category[]" id="materialInline1" value="1">
  <label class="form-check-label" for="materialInline1">Programming</label>
</div>


<div class="form-check form-check-inline">
  <input type="checkbox" class="form-check-input" name="category[]" id="materialInline3" value="2">
  <label class="form-check-label" for="materialInline3">Sport</label>
</div>


Tags :
<input type="text" name="tag">
<small>enter the tags seprete by ","</small>

 
<button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection