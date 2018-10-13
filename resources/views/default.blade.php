<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/css/app.min.css"  />

        <title>melrose.</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container-fluid">
                @include('partials.nav')
                @yield ('content')
                @include('partials.footer')
            </div>
        </div>

        <script type="text/javascript" src="/js/plugins.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="/js/scripts.min.js"></script>
    </body>
</html>
