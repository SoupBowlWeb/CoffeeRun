@extends('layouts.master')

@section('pageTitle', 'Make a Run')

@section('content')

<div class="container">
    <br/><br/><br/>
    <h1>Make A Run</h1>
    <div class="well">
        <h3>Past Emails</h3>
        <ul>
            @foreach( $pastEmails as $pastEmail )
                <li>{{ $pastEmail->name }} - <em>{{ $pastEmail->email }}</em> <button class="btn btn-primary btn-sm"><span class="icon icon-plus-circle"></span> Add To Run</button></li>
            @endforeach
        </ul>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
            <h3>1. Fill Out Some Details About the Coffee Run</h3>
            @include('partials/make-a-run-form')
        </div>
        <div class="col-sm-4 col-sm-offset-2">
            <h3>2. Invite Some People to the Coffee Run</h3>

            <div class="form-group">
                <label for="invite-name" class="control-label required">Name</label>
                <input type="text" name="invite-name" id="invite-name" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="invite-email" class="control-label required">Email</label>
                <input type="text" name="invite-email" id="invite-email" class="form-control" required />
            </div>
            <div class="form-group">
                <button class="btn btn-success" id="btn-add-to-run"><span class="icon icon-plus"></span> Add to Run</button>
            </div>
            <div class="form-group">
                <br/><br/>
                <div class="well">
                    <h4>On The Run:</h4>
                    <ul id="run-list"></ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


@section('scripts')
{{ HTML::script('/js/makearun.js') }}
@stop