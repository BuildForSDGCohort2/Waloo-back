<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
        <div class="container">
            <h5>Hello from Yaya</h5>
            <form action="{{ route('user_push') }}" method="POST">
                @csrf
                <label for="email">Email:</label>
                <div class="input-group mb-3">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" aria-label="Email" required>
                </div>
                <label for="name">Name:</label>
                <div class="input-group mb-3">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Username" aria-label="Username" required>
                </div>
                <button type="submit" class="btn btn-primary">Add user</button>
            </form>
        </div>
    </body>
</html>
