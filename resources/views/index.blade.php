@extends('layouts.master')
@section('before-styles')
{{-- This will be loaded before all.css --}}
@endsection
@section('after-styles')
@endsection

@section('content')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row">
        <br><br>
        <h1 class="header center">Laravel - Materialize</h1>
        <div class="row center">
          <h5 class="header col s12">The power of Laravel presented with the Materialize front-end</h5>
        </div>
        <div class="row center">
          <a href="https://github.com/blomdahldaniel/laravel-materialize" class="waves-effect waves-light grey darken-1 btn-large ">Github <i class="fa fa-github"></i></a>
        </div>
        <div class="row center">
          <a href="http://laravel.com/" class="waves-effect waves-light btn red lighten-2">Laravel</a>
          <a href="http://materializecss.com/" class="waves-effect waves-light btn red lighten-2">Materialize</a>
        </div>
        <br>
      </div><!--  /.row  -->
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>1. Includes Materialize SASS</div>
                <div class="collapsible-body"><p>Grunt fixes the rest. I have variables-override where i put all my overriding settings</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">place</i>2. Font-Awesome</div>
                <div class="collapsible-body"><p>I also include Fomt-Awesome since the <code>material-design-icons</code> dont quite fix it enough. I have done some css to fix the integration of <code>.fa</code> items</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>3. Issues</div>
                <div class="collapsible-body"><p>No matter how I try, I dont get the local <code>material-design-icons</code> fonts to work. I therefore use font.google</p></div>
              </li>
            </ul>
        </div>
      </div>
    </div><!--  /.container  -->
  </div><!-- /.section -->
  @endsection
@section('before-scripts')
@endsection

@section('after-scripts')
  <script>
  $(document).ready(function(){
      $('.collapsible').collapsible({
        accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
      });
    });
  </script>
@endsection
