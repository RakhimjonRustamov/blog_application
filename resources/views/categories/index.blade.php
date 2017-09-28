@extends('main')

@section('title', '| All Categories')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
							</tr>
						</thead>
						
						@foreach($categories as $category)
							<tr>
								<td>{{ $category->id}}</td>
								<td>{{  $category->name}}</td>
							</tr>
						@endforeach	
			</table>		
		</div>
			
			<div class="col-md-4">
				<div class="well">
				<h2>New Category</h2>
				{{ Form::open(array('route' => 'categories.store', 'method'=>'POST'))}}
				{{ Form::label('name', 'Name:')}}	
				{{ Form::text('name', null, ['class'=>'form-control'])}}
				{{ Form::submit( 'Create New Category', array('class'=>'form-control btn btn-primary')) }}
				{{ Form::close()}}
				</div>
			</div>
	</div>
@endsection