<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/post/logo-stereovilla.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-warp align-items-center justify-content-center justify-content-md-between py-3 mb-4 border bottom">
            <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" href="">
                sesion iniciada <br> bienvenido administrador!
            </a>
            <div class="col-md-3 text-end">
                <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">salir</button></a>
            </div>
        </header>
    </div>
    <article class="container">
        <h2>contenido futuro del area de administrador</h2>
    </article>
</body>
</html>