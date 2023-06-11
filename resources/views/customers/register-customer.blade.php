@php
    $breadcrumbMenuItems = [['text' => 'Dashboard', 'link' => '/'], ['text' => 'Something', 'link' => '/testLink']];
@endphp
<x-app title="Register a client">
    <x-page-title-bar title="Client Registration" :breadcrumbMenuItems="$breadcrumbMenuItems" />

</x-app>
