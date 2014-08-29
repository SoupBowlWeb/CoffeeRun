{{ Form::open( [ 'url' => '' , 'method' => 'POST' , 'class' => 'form form-horizontal' ] ) }}

<div class="form-group">
    <label for="title" class="control-label required">Coffee Run Title</label>
    <input type="text" name="title" id="title" class="form-control" required />
</div>
<div class="form-group">
    <label for="driver_name" class="control-label required">Driver's Name</label>
    <input type="text" name="driver_name" id="driver_name" value="{{ Auth::user()->fullName() }}" class="form-control" disabled required />
</div>
<div class="form-group">
    <label for="driver_email" class="control-label required">Driver's Email Address</label>
    <input type="email" name="driver_email" id="driver_email" value="{{ Auth::user()->email }}" disabled class="form-control" required />
</div>
<div class="form-group">
    <label for="departs_at" class="control-label required">Coffee Run Departs At</label>
    <input type="text" name="departs_at" id="departs_at" class="form-control" required placeholder="1:00pm" />
</div>
<div class="form-group">
    <label for="notes" class="control-label required">Notes</label>
    <textarea name="notes" id="notes" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
</div>

{{ Form::close() }}