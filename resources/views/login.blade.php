<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inicia sesión!</title>
    <link rel="stylesheet" type="text/css" href="login-register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/post/logo-stereovilla.png" type="image/x-icon">
</head>
<body style="background-color: rgb(34, 30, 30);">
    <main class="container align-center p-5">
        <form method="POST" action="{{route('iniciar-sesion')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">correo</label>
                <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disabled">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">contraseña</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remembercheck" name="remember">
                <label for="rememberCheck" class="form-check-label">mantener sesión iniciada</label>
            </div>
            <div>
                <p>no tienes cuenta? <a href="{{route('registro')}}" style="text-decoration: none">registrate</a></p>
            </div>
            <button style="background-color: yellow; color: black; font-weight: bold; border: 2px solid; font-weight: bold; border-radius: 5px; " type="submit" class="btn btn-primary">acceder</button>
        </form>
    </main>    
</body>
</html>