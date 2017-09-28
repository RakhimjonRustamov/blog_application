@extends('main')
@section('title', "| $post->title")
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<img src="{{ asset('images/'. $post->image)}}" height="400" width="750"/>
		<h1>{{ strip_tags($post->title)}}</h1>
		<p class="lead">{{ strip_tags($post->body)}}</p>
		<p class="well">{{$post->category->name}}</p>
	@foreach($post->comments as $comment)
		<div class="comment">
	    <p><strong>Comment:</strong> {{ $comment->comment}}</p>
	    <p><small>Author:{{ $comment->name}} {{$comment->email}}</small></p><br><br>
		</div>
	@endforeach
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{{ Form::open(['route'=>['comments.store', $post->id], 'method'=>'POST'])}}
			<div class="row">	
				<div class="col-md-6">
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class'=>'form-control']) }}
				</div>
				<div class="col-md-6">
					{{ Form::label('email', 'Email:') }}
					{{ Form::text('email', null, ['class'=>'form-control']) }}
				</div>
				<div class="col-md-12">
					{{ Form::label('comment', 'Comment:') }}
					{{ Form::textarea('comment', null, ['class'=>'form-control', 'row'=>'5'])}}
					{{ Form::submit('Create Comment', ['class'=>'btn btn-success btn-block', 'style'=>'margin-top:10px']) }}
				</div>
			</div>
			{{ Form::close()}}
		</div>	
	</div>
</div>
@endsection