@extends('master.app')
@section('content')
<h1>Edit Post</h1>
<hr>
<div>
	<form action="{{route('posts.update',$post->post_id)}}" method="post">
		{{csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<div>

			<label for="title_input">Title</label>
			<input type="text" name="title" value="{{$post->title}}">
		</div>
		<div>
			<label for="content_input">Content</label>
			<textarea name="body" rows="4" >{{$post->body}}</textarea>
		</div>
		<div>
			<button type="submit" >update</button> 
		</div>
	</form>
</div>
@endsection
