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

    <meta property="og:title" content="SocietyCMS" />
    <meta property="og:description" content="The only CMS designed for you and your society." />
    <meta property="og:image" content="/icon/apple-touch-icon-180x180.png" />


    <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/icon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/icon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/icon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/icon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/icon/manifest.json">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/icon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="SocietyCMS">
    <meta name="application-name" content="SocietyCMS">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/icon/mstile-144x144.png">
    <meta name="msapplication-config" content="/icon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <meta name="author" content="Ralph Huwiler">
    <meta name="description" content="SocietyCMS - The only CMS designed for your society.">
    <meta name="keywords" content="societycms, php, cms, web">

    <script src="/resources/bundle.js"></script>

    @include('partials.piwik')
    
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
