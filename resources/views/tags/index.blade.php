@extends('main')

@section('title', '| All Tags ')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
							</tr>
						</thead>
						
						@foreach($tags as $tag)
							<tr>
							    <td>{{ $tag->id}}</td>
								<td> <a href="{{ route('tags.show', ['tag'=>$tag->id])}}">{{ $tag->name}}</a></td>
								
							</tr>
						@endforeach	
			</table>		
		</div>
			
			<div class="col-md-4">
				<div class="well">
				<h2>New Tag</h2>
				{{ Form::open(array('route' => 'tags.store', 'method'=>'POST'))}}
				{{ Form::label('name', 'Name:')}}	
				{{ Form::text('name', null, ['class'=>'form-control'])}}
				{{ Form::submit( 'Create New Tag', array('class'=>'form-control btn btn-primary')) }}
				{{ Form::close()}}
				</div>
			</div>
	</div>
@endsection