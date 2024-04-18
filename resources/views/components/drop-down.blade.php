<div class="form-group">
    <label for="ip_type" class="control-label">{{ 'Type of Intellectual Property' }}</label>
    <select class="form-control" name="ip_type" id="ip_type">
        @foreach (json_decode('{"1":"Patent","2":"Trademark","3":"Copyright","4":"Design"}') as $item => $value)
            <option value="{{ $item }}" {{ isset($user->role) && $user->role == $item ? 'selected' : '' }}>
                {{ $value }}</option>
        @endforeach
    </select>
</div>