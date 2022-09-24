<!-- ********************************
     *******CARLOS BOTERO************
     ******************************** -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>login</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="registro.css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form class="needs-validation" action="validar.php" method="POST">
            <div class="form-group was-validated">
                <label class="form-label" for="usuario">Usuario:</label>
                <input class="form-control" type="text" placeholder="ingrese su nombre" name="usuario" required>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="contraseña">Contraseña:</label>
                <input class="form-control" type="password" placeholder="ingrese su contraseña" name="contraseña" required>
            </div>
            <br>
            <br>
            
            <input class="btn btn-success w-100" type="submit" value="Ingresar">
            
        </form>
    </div>
</body>

</html>