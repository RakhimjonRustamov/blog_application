@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h1>Welcome To Our Blog</h1></div>
                <div class="panel-body">
                    <a href="{{ url('/')}}" class="btn btn-success btn-block" > Go Main Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
