<p class="h1">Register your Intellectual Property</p>
<div class="form-group my-5">
    <label for="ip_type" class="control-label">{{ 'Type of Intellectual Property' }}</label>
    <select class="form-control" name="ip_type" id="ip_type">
        @foreach (json_decode('{"1":"Patent","2":"Trademark","3":"Copyright","4":"Design"}') as $item => $value)
            <option value="{{ $item }}" {{ isset($user->role) && $user->role == $item ? 'selected' : '' }}>
                {{ $value }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-5">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select class="form-control" name="category" id="category">
        @foreach (json_decode('{"1":"Technology","2":"Pharmaceuticals","3":"Agriculture"}') as $item => $value)
            <option value="{{ $item }}" {{ isset($user->role) && $user->role == $item ? 'selected' : '' }}>
                {{ $value }}</option>
        @endforeach
    </select>
</div>

{{-- description --}}
<div class="form-floating mb-5 form-group">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
    <label for="floatingTextarea2">Add description for your intellectual property</label>
  </div>

<div class="form-group mb-5">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select class="form-control" name="status" id="status">
        @foreach (json_decode('{"1":"Pending","2":"Registered","3":"Expired"}') as $item => $value)
            <option value="{{ $item }}" {{ isset($user->role) && $user->role == $item ? 'selected' : '' }}>
                {{ $value }}</option>
        @endforeach
    </select>
</div>


<div class="form-group mb-5">
    {{-- fieldset with file name and upload button --}}
    <fieldset class="form-group border p-2">
        <legend class="control-label">{{ 'Relevenat documents' }}</legend>
        <div class="form-group">
            <label for="file_name" class="control-label">{{ 'Document Name' }}</label>
            <input class="form-control" name="file_name" type="text" id="file_name"
                value="{{ isset($assignment->file_name) ? $assignment->file_name : '' }}">

        </div>
        {{-- upload document --}}
        <div class="form-group">
            <label for="file_path" class="control-label">{{ 'Document' }}</label>
            <input class="form-control" name="file_path" type="file" id="file_path">
        </div>
    </fieldset>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-success btn-lg btn-block"
        value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
