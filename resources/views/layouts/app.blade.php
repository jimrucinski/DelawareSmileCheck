<!DOCTYPE HTML>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!--<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/cerulean/bootstrap.min.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/SmileCheck.css') }}" />
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

        
    </head>
    <body>
        <div id="header">
            <h1>Smile Check Delaware</h1>
            <div id="menu">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/schools/create">add school</a></li>
                    <li><a href="/students/create">create student</a></li>
                </ul>
            </div>
            @yield('subHeader')                
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>