<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('admin.partials._head')
</head>

<body>
    <!-- Left Panel -->
    @include('admin.partials._sidebar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('admin.partials._header')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        @include('admin.partials._footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @include('admin.partials._script')
    @yield('block-script')
</body>
</html>
