<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/lightbox.css"  />
        <link rel="stylesheet" type="text/css" href="/css/app.css"  />

        <title>melrose.</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container-fluid">
                @yield ('content')
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <script type = "text/javascript" src = "/js/lightbox.js"></script>
        <script>
          lightbox.option({
            'alwaysShowNavOnTouchDevices': true,
            'showImageNumberLabel': false,
            // 'disableScrolling': true,
            'fitImagesInViewport': true,
            'fadeDuration': 200,
            'imageFadeDuration': 200,
            'resizeDuration': 200,
            'wrapAround': true
          });
        </script>
        <script type = "text/javascript" src = "/js/scripts.js"></script>
    </body>
</html>
