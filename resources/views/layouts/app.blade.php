<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="google-site-verification" content="QMYalbMERpysCPLNASiQrKU0nrVzvD4uhKrIRADWipA"/>
    <meta http-equiv="content-language" content="en">
    <meta name="author" content="Foremost">
    <meta name="generator" content="Foremost">
    <meta name="description" content="@yield('description')">
    <meta property="article:published_time" content="@yield('published_time')">
    <meta property="article:section" content="@yield('article:section')">
    <link rel="icon" href="/customImages/Logo.png" type="image/x-icon">
    <meta property="article:tag" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:url" content="@yield('url')"/>
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:image:alt" content="@yield('title')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_GB"/>
    {{-- <meta property="og:image" content="@yield('image')"/> --}}
    <meta property="og:image" content="/customImages/logo.png"/>
    <meta property="og:site_name" content="Foremost"/>


    <title>@yield('title', 'Foremost - Africa\'s Most Innovative Eye Clinic')</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/customCSS/foremost_style.css">
    <link rel="stylesheet" href="/customCSS/foremoststyles_jo.css">
    <link rel="stylesheet" href="/customCSS/navbar_styles.css">
    <link rel="stylesheet" href="/customCSS/about_styles.css">
    <link rel="stylesheet" href="/customCSS/footer_styles.css">
    <link rel="stylesheet" href="/customCSS/login_ik.css">
    <link rel="stylesheet" href="/customCSS/kellystyle.css">
    <link rel="stylesheet" href="/customCSS/gallerystyle.css">



    <!-- Material icon -->
    <link href="/css/material-icons.min.css" rel="stylesheet">

      <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="styles/index/index.css">

    <script src="/js/app.js"></script>
    <script src="/customJS/jquery.js"></script>
    <script src="/customJS/velocity.min.js"></script>
    <script src="/customJS/galleryscript.js"></script>

</head>
<body>
  <div id="app">
    @include('inc.navbar')

    <main class="py-5">
      <div class="">
        @yield('content')
      </div>
    </main>

    @include('inc.footer')
  </div>

  @yield('scripts')

<script src="//code.tidio.co/0upkplnmbr89fgyuhfhnzra7ntt9xfya.js" async></script>

<!-- Aos animate library -->
<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

</body>
</html>

