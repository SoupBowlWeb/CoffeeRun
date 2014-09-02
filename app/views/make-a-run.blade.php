@extends('layouts.master')

@section('pageTitle', 'Make a Run')

@section('content')

<div class="container">

    <h1>Make a Run</h1>

    <br/><br/>
    <div class="row well well-lg">
        <h2 style="font-weight: bold; font-size: 2.6em; padding: 0 0 25px 0; margin: 0;" class="text-center">1. Fill Out Some Details About the Coffee Run</h2>

        <div class="col-sm-4 col-sm-offset-2">
            <div class="form-group">
                <label for="title" class="control-label required">Coffee Run Title</label>
                <input type="text" name="title" id="title" class="form-control" required />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="departs_at" class="control-label required">Coffee Run Departs At</label>
                <input type="text" name="departs_at" id="departs_at" class="form-control" required placeholder="1:00pm" />
            </div>
        </div>
        <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
                <label for="notes" class="control-label required">Notes</label>
                <textarea name="notes" id="notes" cols="30" rows="5" class="form-control" style="resize: none;"></textarea>
            </div>
        </div>
    </div>

    <br/><br/>
    <div class="row well well-lg">
        <h2 style="font-weight: bold; font-size: 2.6em; padding: 0 0 25px 0; margin: 0;" class="text-center">2. Invite Some People to Participate in the Coffee Run</h2>

       <div class="col-sm-5">
           <div class="form-group">
               <label for="invite-name" class="control-label required">Name</label>
               <input type="text" name="invite-name" id="invite-name" class="form-control" required />
           </div>
       </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label for="invite-email" class="control-label required">Email</label>
                <input type="text" name="invite-email" id="invite-email" class="form-control" required />
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <br/>
                <button class="btn btn-success" id="btn-add-to-run"><span class="icon icon-plus"></span> Add to Run</button>
            </div>
        </div>
    </div>

</div>

<div id="past-sent-addresses">
    <button class="btn btn-primary pull-right"><span class="icon icon-arrow-right"></span></button>
    <br/><br/>
</div>

@stop


@section('scripts')
{{ HTML::script('/js/makearun.js') }}

<script>
</script>

@stop