<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIO Consulta Online</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <link rel="icon" href="{{ asset('admin/assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Public+Sans:300,400,500,600,700" media="all">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/fonts.min.css') }}" media="all">
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["../assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>

<body>
    @yield('admin.layout.nav')
    @yield('content')
    @yield('admin.layout.footer')

    <script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/setting-demo2.js') }}"></script>
    <div
        style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border-width: medium; border-style: none; border-color: currentcolor; border-image: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
        <div
            style="border-width: medium; border-style: none; border-color: currentcolor; border-image: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;">
        </div>
    </div>
</body>

</html>
