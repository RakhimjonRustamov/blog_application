@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h1>Admin Dashbord</h1></div>
                <div class="panel-body">
                    <a href="{{ url('/admin')}}" class="btn btn-success btn-block" > Admin Panel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

