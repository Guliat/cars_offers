<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- THEME COLOR -->
<meta name="theme-color" content="{{ config('app.theme_color') }}" />
<!-- WEB APP CAPABLE -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- OPEN GRAPH -->
<meta property="og:type" content="product" />
<meta property="og:locale" content="bg_BG" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:title" content="@yield('meta-title')" />
<meta property="og:description" content="@yield('meta-description')" />
<meta property="og:image" content="@yield('meta-image')" />
<meta property="og:url" content="@yield('meta-url')" />
<!-- TITLE -->
<title> {{ config('app.name') }} @yield('title') </title>
<!-- FAVICONS -->
<link rel="shortcut icon" href="{{ asset('/') }}{{ config('app.favicon') }}">
<link rel="shortcut icon" href="{{ asset('/') }}{{ config('app.favicon196') }}">
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
{{-- <link href="{{ asset('/') }}/css/fontawesome-all.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<!-- STYLES -->
<link href="{{ asset('css') }}/{{ config('app.theme') }}" rel="stylesheet">
@yield('stylesheets')
