@extends('layouts.master')
@section('before-styles')
{{-- This will be loaded before all.css --}}
@endsection
@section('after-styles')
@endsection

@section('content')
  <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Laravel - Materialize</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
@endsection

@section('before-scripts')
@endsection

@section('after-scripts')
  {{--
   * This will be loaded after all.js
   * Add your page unique styling here
   * This is mostly for easy dev
   * ex.
   * <script>
   *    $(function(){
   *      alert('loaded after all.js')
   *    });
   *  </script>
   *
   --}}
@endsection
