@extends('main')
@section('title', '| Tag' )
@section('stylesheets')
{{ Html::style('css/select2.min.css')}}
@endsection
@section('content')
<div class="row">	
	<div class="col-md-12">
	<h1 align="center">{{ $tag->name}} <small>{{ $tag->posts()->count()}} Post</small> </h1>
	 <a href="{{ route('tags.edit',['tag'=>$tag->id]) }}" class="btn btn-primary btn-block">Edit Tag</a>
			{{ Form::open(['route'=>['tags.destroy', $tag->id], 'method'=>'DELETE'])}}
			{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block', 'style'=>'margin-top:20px'])}}
			{{ Form::close() }}	
	<table class="table">
	<thead>
		<th>#</th>
		<th>Name</th>
	</thead>
	<tbody>
		@foreach($tag->posts as $post)
			<tr>
				<td>{{ $post->id}}</td>
				<td>{{ $post->title}}</td>
				<td>
					@foreach($post->tags as $tag)
							<span class="label label-primary">{{ $tag->name }}</span>					
					@endforeach
				</td>
				<td><a href="{{ route('posts.show', ['post'=>$post->id]) }}" class="btn btn-success">View</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>
	</div>
	
</div>

@stop 
