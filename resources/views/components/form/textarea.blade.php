<div class="form-input mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    @endisset
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control" cols="30" rows="3"
        placeholder="@if (isset($placeholder)) {{ $placeholder }} @elseif($label) {{ $label }} @endif">{{ $slot }}</textarea>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
