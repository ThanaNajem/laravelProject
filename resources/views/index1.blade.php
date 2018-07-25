@extends('master.app')

@section('content')
<h1>Cretae new post</h1>
<hr>
@if (session('success'))
<div class="alert alert-success">
	{{session('success')}}
</div>
@endif
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach	
	</ul>
</div>
@endif
<div class="row">
	<div class="col-lg-10">
		<!-- <form method="post" action="{{route('posts.store')}}"> -->
			<!-- {!!Form::date('name',\Carbon\Carbon::now())!!} -->
			{!!Form::open(['route' => 'posts.store','method'=>'POST'])!!}
			<!-- <input type="hidden" name="_method" value="PUT"> -->
			{{method_field('PUT')}}
		<div class="form-group">
			<!-- <label for="title_itm">Title</label> -->
			{!!Form::label('title_itm','Title: ')!!}
			<!-- <input type="text" name="title_itm" class="form-control"> -->
			{!!Form::text('title',null,['placeholder'=>'Enter title: ','class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			<label for="body_itm">body</label>
			<textarea rows="4" class="form-control" name="body"></textarea>
		</div>	
		<div class="form-group">
			<button type="submit" class="btn btn-primary">save</button>
		</div>
		<!-- </form> -->
		{!!Form::close()!!}
	</div>

</div>
@endsection