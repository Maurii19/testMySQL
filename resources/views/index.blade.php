<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 30;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                    <a href="/select">Select</a>
                    <a href="/insert">Insert</a>
                    <a href="/delete">Delete</a>
                    <a href="/update">Update</a>

                    @if(isset($users))
                    <p style="font-size: 30px;">
                    <?php
                        foreach ($users as $user) {
                       
                       ?>
                    ID: <?php
                         echo $user->id;

                    ?>
                    Name: <?php
                         echo $user->name;

                    ?>
                      Age: <?php
                     
                            echo $user->age;
                    ?>

                   Salary: <?php
                            echo $user->salary;
                  
                    ?>
                      City: <?php
                            echo $user->city;
                            echo '<br>';
                    }

                    ?>
                    </p>
                    @endif

                   @if(isset($isInserted))
                   <p>Se ha insertado con exito</p>
                   @endif

                   @if(isset($isUpdated))
                   <p>Se ha actualizado con exito</p>
                   @endif

                    @if(isset($isDeleted))
                   <p>Se ha eliminado con exito</p>
                   @endif
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
