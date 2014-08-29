@extends('layouts.master')

@section('content')
<div id="headerwrap" name="home">
    <header class="clearfix">
        <h1 style="font-size: 15em; margin: 0;"><span class="icon icon-mug"></span></h1>
        <h1 style="margin: 0;"><span style="font-size: 0.3em; display: block;">Welcome To</span> Coffee Run</h1>
        <br/><br/>
        @if( Auth::guest() )
        <a class="btn btn-lg btn-primary" href="/sign-in-with-facebook" style="font-size: 1.5em; padding: 10px;"><span class="icon icon-facebook"></span> Sign In with Facebook</a>
        @else
        <a class="btn btn-lg btn-success" href="/make-a-run" style="font-size: 1.5em; padding: 10px;"><span class="icon icon-play"></span> Make a Run</a>
        @endif
        <br/><br/><br/><br/>
    </header>
</div>
@include('partials/home-banner')
@stop