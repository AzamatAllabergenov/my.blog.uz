@extends('main')

@section('title', '| Contact Me')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h3>Contact Me</h3>
          <hr>
      <form>

        <div class="form-group">
          <label name="email">E-mail: </label>
          <input id="email" name="email" class="form-control" >
        </div>

        <div class="form-group">
          <label name="subject">Subject: </label>
          <input id="subject" name="subject" class="form-control" >
        </div>

        <div class="form-group">
          <label name="email">Message: </label>
          <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
        </div>

        <input type="submit" value="Send Message" class="btn btn-success"> 

      </form> 

    </div>
  </div>

@endsection

    