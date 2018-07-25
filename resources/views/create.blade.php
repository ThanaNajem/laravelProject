@extends('master.app')
@section('content')
<h1>Create new post</h1>
<div >
	
<form action="{{route('posts.store')}}" method="post"> 
	{{ csrf_field() }}
	<label style="display: block;">
	Title
</label>
<input type="text" style="display: block;" name="title">
<label style="display: block;">
	body
</label>
<textarea rows="4" name="body" style="display: block;"></textarea>
<button type="submit" >save</button>   
</form>
</div>

 
@endsection
