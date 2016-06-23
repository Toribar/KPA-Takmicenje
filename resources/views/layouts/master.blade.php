<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.3/holder.min.js"></script>


        <style type="text/css">
            body {
                padding-top: 70px;
                font-family: 'Lato';
            }

        </style>

        <title>KPA takmičenje</title>
    </head>
    <body>
        @include('partials.navbar')
        <div class="container">
            @yield('header')
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- JavaScripts -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    </body>
</html>
