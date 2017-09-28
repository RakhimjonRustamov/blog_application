@extends('main')
@section('title','Conact Us')

@section('content')
    <div class="row">
        <div class="col-md-12">
          <h1>Contact Me</h1>
          <hr>
          <form action"{{ url('contact')}}" method="POST">
            {{ csrf_field()}}  
                <div class="form-group">
                  <label name="email">Email:</label>
                  <input name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                  <label name="subject">Subject:</label>
                  <input name="subject" id="subject" class="form-control">
                </div>
                
                <div class="form-group">
                  <label name="message">Message:</label>
                  <textarea name="message" id="message" class="form-control"> Type your message </textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Send Message">
          </form>
        </div>
    </div>
@endsection