
@extends('master.app')
@section('content')
<div>
<div>
<h1></h1>
 
@foreach ($posts as $post)
<div>
<div>{{$post->title}}
<div>{{$post->body}}
<div>
@foreach($post->comment as $comment)
<h4>{{$comment->name}}</h4>
@endforeach	
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection