@extends('main')
@section('title')
Home Page
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my Blog</h1>
      <p class="lead">The latest News</p>
      <p><a class="btn btn-primary btn-lg" href="{{ route('posts.create')}}" role="button">Add News</a></p>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
           
           @foreach($post as $post)
            <div class="post">
                <h3>{{ strip_tags($post->title)}}</h3>
                <p>{{ strip_tags($post->body)}}</p>
              <a href="{{ route('blog.single', ['slug'=>$post->slug])}}" class="btn btn-primary">Read More</a> 
            </div>
         @endforeach

      </div>  
             <div class="col-md-3 col-md-offset-1">
               <h2>Side Bar</h2> 
             </div>
      </div>
</div>
@endsection

