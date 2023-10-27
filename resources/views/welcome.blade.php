<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Stereo Villa</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            body {
                background-color: rgb(34, 30, 30);
            }

            .container {
                display: block;
                text-align: center;
                padding: 70px;
            }

            a {
                margin-left: 20px;
                text-decoration: none;
                background-color: yellow;
                border: 5px;
                border-style: solid;
                font-size: 35px;
                width: 80px;
                height: 40px;
                line-height: 140px;
                color: black;
                border-radius: 10px;
                padding: 8px;
                font-weight: bold;

            }

            a:hover {
                border-color: white;
                color: white;
            }
        </style>
    </head>
    <body>
        <section>
            <div class="container">
                <img src="img/post/logo-stereovilla.png" alt="" class="col-sm-6">
                <br><br>
                <a href="{{ route('login') }}" class="col-sm-1">iniciar sesion</a>
                <a href="{{ route('registro') }}" class="col-sm-1">Registrarse</a>
            </div>
        </section>
        
    </body>
</html>
