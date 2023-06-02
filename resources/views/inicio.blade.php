<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="body">

    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card text-center m-2">
                    <div class="card-header">
                        <h4 class="card-title">Administrador</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione perfil:</h5>
                        <select class="form-select" style="margin-top: 20px; border-color: #5e9ace;" name="admin" id="admin">
                            <option selected>Seleccione administrador</option>
                            <option value="1">Juan Carlos Bodoque</option>
                            <option value="2">Pepe Grillo</option>
                        </select>
                        <div class="d-grid gap-2">
                        <a style="margin-top:100px;" href="#" class="btn">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-center m-2">
                    <div class="card-header">
                        <h4 class="card-title">Profesor</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione perfil:</h5>
                        <select class="form-select" style="margin-top: 20px; border-color: #5e9ace;" name="admin" id="admin">
                        <option selected>Seleccione profesor</option>
                        <option value="1">Juan Carlos Bodoque</option>
                        <option value="2">Pepe Grillo</option>
                        </select>
                        <div class="d-grid gap-2">
                        <a style="margin-top: 100px;" href="#" class="btn">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-center m-2">
                    <div class="card-header">
                        <h4 class="card-title">Estudiante</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Seleccione perfil:</h5>
                        <select class="form-select" style="margin-top: 20px; border-color: #5e9ace;" name="admin" id="admin">
                        <option selected>Seleccione estudiante</option>
                        <option value="1">Juan Carlos Bodoque</option>
                        <option value="2">Pepe Grillo</option>
                        </select>
                        <div class="d-grid gap-2">
                        <a style="margin-top: 100px;" href="#" class="btn">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>