@extends('main')
@section('title', '| View Post')

@section('content')
    <div class="row">
    	<div class="col-md-8">
    		<h1>{!! $post->title!!}</h1>
    		<p class="lead">{!!$post->body!!}</p>
    		<hr>
    		<div class="tags">
    			@foreach($post->tags as $tag)
    			<span class="label label-default">{{ $tag->name}}</span>
    			@endforeach
    		</div>
    	</div>
		
		<div class="col-md-4">
			<div class="well">
					<label>Category:</label>
					<p>{{$post->category->name}}</p>	

					<label>Url Slug:</label>
					<p><a href="{{ route('blog.single', ['slug'=>$post->slug])}}">{{ route('blog.single', ['slug'=>$post->slug]) }}</a></p>
				
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->created_at))}}</p>
								
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->updated_at))}}</p>

								<hr>
				<div class="row">
					<div class="col-sm-6">
						<a href="{{ route('posts.edit',['post'=>$post->id]) }}" class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-sm-6">
						{{ Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete' ])}}	
						{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])}}		
						{{ Form::close()}}	
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection