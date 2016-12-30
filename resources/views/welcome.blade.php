<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            html,body, h1,h3{
                margin:0;
                padding:0;
            }
            .Alert{
                background: #e3e3e3;
                padding:10px;
            }
            .Alert--Success{
                background-color:hsla(120, 86%, 31%, 0.48);
                color: white;
            }
            .Alert--Error{
                background: #ff5722;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if(Session::has('flash_message'))
                <div class="Alert Alert--{{ucwords(Session::get('flash_level'))}}">
                    <h3> {{ Session::get('flash_message') }}</h3>
                </div>
            @endif
            <h1> Laravel </h1>
        </div>
    </body>
</html>
