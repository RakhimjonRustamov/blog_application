@extends('main')
@section('title', 'Creata New Post')

@section('stylesheets')
{{ Html::style('css/select2.min.css')}}
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5djyrupuqur8cg25c8vpgsqa92ur1l4hrqd8m4hxgbf08h2r"></script>
	<script>
	tinymce.init({
		selector:'textarea', 
		plugins: 'image imagetools link'
	});
	</script>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 align="center">Create New Post</h1>
			<hr>
			{!! Form::open(array('route' =>'posts.store', 'files'=>true))!!}
				
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class'=>'form-control'))}}	
				{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'100')) }}
				{{ Form::label('category_id', 'Categories:')}}
				<select class="form-control" name="category_id">
					@foreach($categories as $category)
					<option value="{{ $category->id}}">{{ $category->name}}</option>
					@endforeach
				</select>
				{{ Form::label('tags', 'Tags:')}}
					<select class="form-control js-multi-select2" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
					<option value="{{ $tag->id}}">{{ $tag->name}}</option>
					@endforeach
				</select>
				{{ Form::label('featured_image', "Upload Featured Image")}}
				{{ Form::file('featured_image')}}
				{{ Form::label('body', 'Body Post')}}	
				{{ Form::textarea('body', null, array('class'=>'form-control'))}}
							{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block'))}}	

		    {!! Form::close() !!}

	</div>
</div>
@endsection

@section('scripts')
{{ Html::script('js/select2.min.js')}}
<script type="text/javascript">
	$('.js-multi-select2').select2();
</script>
@endsection