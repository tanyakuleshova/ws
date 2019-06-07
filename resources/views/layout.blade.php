<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico">
    <title>White Sound</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="Concept accomodation and art gallery. Kostiantynivska St, 11, Kyiv, Ukraine, 04071">

    <link href = {{ asset('css/main.css') }} rel="stylesheet">
    <link href = {{ asset('css/style.css') }} rel="stylesheet">
    <link href = {{ asset('slider/slider.css') }} rel="stylesheet">
    <link href = {{ asset('css/animate.min.css') }} rel="stylesheet">
    <link href = {{ asset('css/custom.css') }} rel="stylesheet">
    <link href = {{ asset('css/equipment.css') }} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

@yield('content')

<script src = {{ asset("js/jquery.js") }}></script>
<script src = {{ asset("js/wow.min.js") }}></script>
<script src = {{ asset("js/main.js") }}></script>
<script src = {{ asset("slider/slider.js") }}></script>
<script src = {{ asset("slider/lslider.min.js") }}></script>
</body>

</html>