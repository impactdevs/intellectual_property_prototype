<p class="h1">Request Intellectual Property Rights Usage</p>

<div class="form-floating mb-5 form-group">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 60%"
        name="reason_for_use">{{ isset($intellectual_property->description) ? $intellectual_property->description : '' }}</textarea>
    <label for="floatingTextarea2">Why do you want the rights for this IP...?</label>
</div>

<input type="hidden" name="intellectual_property_id" value="{{ $id }}">

<div class="form-group">
    <input type="submit" class="btn btn-success btn-lg btn-block"
        value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
