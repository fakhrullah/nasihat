<html>
    <head>
        <title>{{$title}} - Nasihat</title>
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        @yield('css')
        <meta name=viewport content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        @yield('body')
        <script src="{{ URL::asset('js/main.js') }}"> </script>
        @yield('js-foot')
    </body>
</html>

