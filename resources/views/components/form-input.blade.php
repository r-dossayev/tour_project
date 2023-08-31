<div>
    <label for="{{ $name }}">{{ $slot }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value ?? old($name) }}" class="form-control">
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
