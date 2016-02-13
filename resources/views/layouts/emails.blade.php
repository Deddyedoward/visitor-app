<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            .top-bar{
              background: #ffa900;
              height:100px;
              width: 100%;
              font-family: "Lato" sans-serif;
            }
        </style>
    </head>
    <body>
        <header class="top-bar">
            <h1>Email notification</h1>
        </header>
        @yield('content')
    </body>
</html>
