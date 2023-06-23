<div class="alert alert-{{ isset($type) ? $type : 'success' }}">
    @isset($head)
        <strong>{{ $head }}</strong>
    @endisset
    {{ isset($message) ? $message : $slot }}
</div>
