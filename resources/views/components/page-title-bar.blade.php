<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @isset($breadcrumbMenuItems)
                        @foreach ($breadcrumbMenuItems as $menu_item)
                            <li class="breadcrumb-item active">
                                <a href="{{ $menu_item['link'] }}">{{ $menu_item['text'] }}</a>
                            </li>
                        @endforeach
                    @endisset
                    <li class="breadcrumb-item active">
                        {{ $title }}
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
