@extends('main')
@section('title', '| Edit Blog Post')
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
 		{!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT'])!!}
    	<div class="col-md-8">
    			{{ Form::label('title', 'Title:')}}
    			{{ Form::text('title', null, ['class'=>'form-control'])}}
    			{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'100')) }}
				{{ Form::label('category_id', 'Category:') }}
				{{ Form::select('category_id', $categories, null, ['class'=>'form-control'] )}}
    			
				{{ Form::label('tags', 'Tags:')}}
				{{ Form::select('tags[]', $tags, null,  ['class'=> 'form-control js-multi-select2', 'multiple' => 'multiple'] )}}
				<label name="featured_image" style="margin-top:10px"> Upload New Image</label>
					<input type="file" name="featured_image">				 
    			{{ Form::label('body', 'Body:')}}
  				{{ Form::textarea('body', null, ['class'=>'form-control'])}}
  				
    	</div>
		
		<div class="col-md-4">
			<div class="well" id="bar">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block'))!!}
						</div>

					<div class="col-sm-6">
					{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}  
					</div>
				</div>
			</div>
		</div>
	{!! Form::close()!!}

    </div>

@endsection

@section('scripts')

{{ Html::script('js/select2.min.js')}}
<script type="text/javascript">
	$('.js-multi-select2').select2();
</script>
@endsection