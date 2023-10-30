<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/post/logo-stereovilla.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="inicio.css">

</head>
<body>
    <div id="sidebar">
      <ul>
        <li>
          <img src="img/post/logo-stereovilla.png" style="width: 140px; height: 140px;" alt="Logo Fazt" class="logo">
        </li>
        <a href="/inicio"><li>Home</li></a>
        <a href="#"><li>about</li></a>
        <a href="#"><li>contact</li></a>

      </ul>
    </div>
    <div class="container">
        <header class="d-flex flex-warp align-items-center justify-content-center justify-content-md-between py-3 mb-4 border bottom">
            <p style="color: black; margin-left: 10px; font-size: 28px;">sesion iniciada exitosamente, bienvenido administrador!</p>
            <div class="col-md-2 text-end">
                <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2" style="text-decoration: none; color: white; background-color: black;">salir</button></a>
            </div>
        </header>
    </div>
</body>
</html>