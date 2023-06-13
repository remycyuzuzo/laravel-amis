@extends('layouts.base')

@section('page-title', $pageTitle)


@section('contents')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            {{ $slot }}
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
