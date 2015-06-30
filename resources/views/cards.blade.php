@extends('layouts.master')
@section('before-styles')
{{-- This will be loaded before all.css --}}
@endsection
@section('after-styles')
@endsection

@section('content')
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h2 class="header grey-text text-lighten-1">Cards</h2>
        </div>
      </div><!--  /.row  -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img  class="responsive-img" src="http://placehold.it/1000x400">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text text-darken-1">This is a link</a>
            </div>
          </div>
        </div><!-- /col -->
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" class="responsive-img" src="http://placehold.it/1000x400">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Card Titlemore_vert<i class="material-icons right grey-text text-lighten-1">more_vert</i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal red lighten-2 white-text">
              <span class="card-title">Card Title close <i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div><!--  /.col -->
      </div><!--  /.row  -->
      <div class="row">
        <div class="col s6 m3">
          <div class="card">
            <div class="card-image">
              <img  class="responsive-img" src="http://placehold.it/800x400">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text text-darken-1">This is a link</a>
            </div>
          </div>
        </div><!-- /col -->
        <div class="col s6 m3">
          <div class="card">
            <div class="card-image">
              <img  class="responsive-img" src="http://placehold.it/800x400">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text text-darken-1">This is a link</a>
            </div>
          </div>
        </div><!-- /col -->
        <div class="col s6 m3">
          <div class="card">
            <div class="card-image">
              <img  class="responsive-img" src="http://placehold.it/800x400">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text text-darken-1">This is a link</a>
            </div>
          </div>
        </div><!-- /col -->
        <div class="col s6 m3">
          <div class="card">
            <div class="card-image">
              <img  class="responsive-img" src="http://placehold.it/800x400">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#" class="grey-text text-darken-1">This is a link</a>
            </div>
          </div>
        </div><!-- /col -->
      </div><!--  /.row  -->
    </div><!--  /.container  -->
  </div><!-- /.section -->
  @endsection
@section('before-scripts')
@endsection

@section('after-scripts')
  <script>

  </script>
@endsection
