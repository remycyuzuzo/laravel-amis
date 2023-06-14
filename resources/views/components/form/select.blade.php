<div class="form-input mb-3">
    @isset($label)
        <label for="{{ $name }}">{{ $label }}</label>
        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    @endisset

    <select name="{{ $name }}" id="{{ $name }}" class="form-control" @required(isset($required))>
        @isset($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endisset
        @isset($options)
            @foreach ($options as $option)
                <option value="{{ $option['value'] }}"> {{ $option['text'] }} </option>
            @endforeach
        @endisset
    </select>
</div>
