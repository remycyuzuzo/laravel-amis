@include('layouts.head')

@include('layouts.top-nav')

@include('layouts.side-bar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('contents')
</div>
<!-- /.content-wrapper -->
@include('layouts.foot')
