@extends('main')
@section('title', "| $tag->name")

@section('content')
<div class="row">		
	<div class="col-md-8 col-md-offset-2">
		<h1>{{$tag->name}}</h1>
		{{ Form::model($tag, ['route'=>['tags.update', $tag->id], 'method'=>'PUT'] )}}
		{{ Form::label('name', 'Tag Name:')}}
		{{ Form::text('name', null, ['class'=>'form-control']) }}	
		{{ Form::submit('Save Changes', ['class'=> 'btn btn-success', 'style'=>'margin-top:20px'])}}
		{{ Form::close()}}
	</div>	
</div>	
@endsection