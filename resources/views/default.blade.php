<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="/css/app.min.css"  />

        <title>melrose.</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container-fluid">
                @yield ('content')
            </div>
        </div>

        <script type="text/javascript" src="/js/plugins.min.js"></script>
        <script type="text/javascript" src="/js/scripts.min.js"></script>
    </body>
</html>
