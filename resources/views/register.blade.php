<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>regístrate!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="img/post/logo-stereovilla.png" type="image/x-icon">

</head>
<body>
    <main class="container align-center p-5">
        <form method="POST" action="{{route('validar-registro')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">correo</label>
                <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disabled">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">contraseña</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required>
            </div>
            <div class="mb-3">
                <label for="userInput" class="form-label">nombre de usuario</label>
                <input type="text" class="form-control" id="userInput" name="name" required autocomplete="disabled">
            </div>
            <button type="submit" class="btn btn-primary">registrarse</button>
        </form>
    </main>    
</body>
</html>