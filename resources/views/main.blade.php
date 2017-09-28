<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/parsley.css')}}">
{{Html::style('css/styles.css')}}

@yield('stylesheets')

  </head>
  <body>    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/')}}">Laravel Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('blog')?"active":""}}" ><a href="{{ url('blog')}}">Blog</a></li>
        <li class="{{ Request::is('about')?"active":""}}" ><a href="{{ url('about')}}">About</a></li>
        <li class="{{ Request::is('contact')?"active":""}}" ><a href="{{ url('contact')}}">Contact</a></li>
        <li><a href="{{ route('posts.index')}}">Posts</a></li>
        <li><a href="{{ route('categories.index')}}">Categories</a></li>
        <li><a href="{{ route('tags.index')}}">Tags</a></li>
        <li><a href="{{ route('posts.create') }}">Create New Category</a></li>

        <li role="separator" class="divider"></li>
        <li><a href="{{ route('user.logout')}}">Logout</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index')}}">Posts</a></li>
            <li><a href="{{ route('categories.index')}}">Categories</a></li>
            <li><a href="{{ route('tags.index')}}">Tags</a></li>
            <li><a href="{{ route('posts.create') }}">Create New Category</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('user.logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
@include('partials._messages')

@yield('content')

  <div class="footer">
    <h4 align="center">IUTLAB © All Rights Reserved</h4>
  </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript" src="{{ asset('js/parsley.min.js')}}"></script>
  
  @yield('scripts')
  </body>

</html>