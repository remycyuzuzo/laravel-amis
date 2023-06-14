<div class="form-input mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    @endisset
    <input type="{{ isset($type) ? $type : 'text' }}" name="{{ $name }}" id="{{ $name }}"
        class="form-control" @required(isset($required))
        placeholder="
        @if (isset($placeholder)) {{ $placeholder }}
@elseif($label)
{{ $label }} @endif
        " />
</div>
