<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nowa - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <link rel="icon" href="{{ asset('admin') }}/images/brand-logos/favicon.ico" type="image/x-icon">
    <script src="{{ asset('admin') }}/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="{{ asset('admin') }}/js/main.js"></script>
    <link id="style" href="{{ asset('admin') }}/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/styles.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/icons.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/libs/node-waves/waves.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin') }}/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/libs/@simonwep/pickr/themes/nano.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/libs/iziToast/css/iziToast.css"></link>
</head>

<body>
    @include('admin.layouts.partials.offcanvas')
    @include('admin.layouts.partials.loader')
    <div class="page">
        @include('admin.layouts.includes.header')
        @include('admin.layouts.includes.sidebar')
        <div class="main-content app-content">
            <div class="main-container container-fluid">
                @include('admin.layouts.partials.breadcrumb')
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.layouts.includes.footer')
    </div>
    @include('admin.layouts.partials.scrollToTop')
    <script src="{{ asset('admin') }}/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="{{ asset('admin') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/js/defaultmenu.min.js"></script>
    <script src="{{ asset('admin') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin') }}/js/sticky.js"></script>
    <script src="{{ asset('admin') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/js/simplebar.js"></script>
    <script src="{{ asset('admin') }}/libs/@simonwep/pickr/pickr.es5.min.js"></script>
    <script src="{{ asset('admin') }}/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('admin') }}/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="{{ asset('admin') }}/libs/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/libs/chart.js/chart.min.js"></script>
    <script src="{{ asset('admin') }}/libs/iziToast/js/iziToast.js"></script>
    <script src="{{ asset('admin') }}/js/custom-switcher.min.js"></script>
    <script src="{{ asset('admin') }}/js/custom.js"></script>
    @include('admin.layouts.partials.color-picker')
    @include('vendor.lara-izitoast.toast')
</body>

</html>
