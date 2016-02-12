<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" href="/apple-touch-icon-precomposed.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>{{ isset($title) ? $title . ' - ' : null }}SocietyCMS</title>

    <meta name="author" content="Ralph Huwiler">
    <meta name="description" content="SocietyCMS - The only CMS designed for your society.">
    <meta name="keywords" content="societycms, php, cms, web">

    <script src="/resources/bundle.js"></script>
</head>
<body class="@yield('body-class', 'docs') language-php">

@include('partials.navigation.mobile')

<div class="pusher">

    <div class="top-color-strip"></div>

    @include('partials.navigation.main')

    @yield('content')


    @include('partials.footer')
</div>

</body>

</html>
