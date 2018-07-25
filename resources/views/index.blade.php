@extends('master.app')
@section('content')
<h1>All Posts
<a href="{{route('posts.create')}}" class="btn btn-sm btn-primary">create new post</a>
</h1>
<div class="row">
	<div class="col-lg-10">
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>title</th>
				<th>content</th>
				<th>Edit</th>
				<th>Delete</th>

			</tr>
			@foreach ($posts as $rs)
			<tr>
				<td>{{ $rs->post_id}}</td>
				<td>{{ $rs->title}}</td>
				<td>{{ $rs->body}}</td>
				<td><a href="{{route('posts.edit',$rs->post_id)}}">Edit</a></td>
				<td>
					<form method="post" action="{{route('posts.destroy',$rs->post_id)}}">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<input type="submit" value="delete">
					</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection