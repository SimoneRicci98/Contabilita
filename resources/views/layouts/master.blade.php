<html>
    <head>
        <title>App Name - @yield('title')</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../../../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">


        <style>
            html, body {
                background-color: #fff;
                color: #b24a47;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
                font-size: 20px;
            }

            content {
                text-align: center;
            }

            div.title {
                font-size: 60px;
                font-family:Arial;
                margin-bottom: 2%;
            }

            div.links{
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-left: 2%;
                margin-right: 2%;
            }


            m-b-md {
                margin-bottom: 30px;
            }

            text {
                font-size: 12px;
                color: #636b6f;
                padding: 0 25px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>


    </head>
    <body>

    @include('layouts.header')

    <div class="container" style="margin-top: 5%">

        <div class="col-md-9">

            @yield('content')
        </div>

        <div class="col-md-3">
            @include('layouts.sidebar')

        </div>


    </div>

    </body>
</html>







