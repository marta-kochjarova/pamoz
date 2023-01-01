<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="Pamoz">
    <meta name="keywords" content="@yield('meta_keywords')">

    <title>@yield('title') | Pamoz</title>


    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/vendors/fontawesome-pro-5/css/all.css">
    <link rel="stylesheet" href="/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="/vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/vendors/animate.css">
    <link rel="stylesheet" href="/vendors/mapbox-gl/mapbox-gl.min.css">
    <link rel="stylesheet" href="/vendors/fonts/font-phosphor/css/phosphor.min.css">
    <link rel="stylesheet" href="/vendors/fonts/tuesday-night/stylesheet.min.css">
    <link rel="stylesheet" href="/vendors/fonts/butler/stylesheet.min.css">
    <link rel="stylesheet" href="/vendors/fonts/a-antara-distance/stylesheet.min.css">
    <!-- Themes core CSS -->
    <link rel="stylesheet" href="/css/themes.css">
    <!-- Favicons -->
    <link rel="icon" href="/images/favicon.jpg">

    @yield('styles')

</head>

<body>

@yield('content')

<!-- Vendors scripts -->
<script src="/vendors/jquery.min.js"></script>
<script src="/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="/vendors/bootstrap/bootstrap.bundle.js"></script>
<script src="/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/vendors/slick/slick.min.js"></script>
<script src="/vendors/waypoints/jquery.waypoints.min.js"></script>
<script src="/vendors/counter/countUp.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/vendors/hc-sticky/hc-sticky.min.js"></script>
<script src="/vendors/jparallax/TweenMax.min.js"></script>
<script src="/vendors/mapbox-gl/mapbox-gl.js"></script>
<script src="/vendors/isotope/isotope.js"></script>
<!-- Theme scripts -->
<script src="/js/theme.js"></script>

@yield('scripts')
@stack('scripts')
</body>
</html>
