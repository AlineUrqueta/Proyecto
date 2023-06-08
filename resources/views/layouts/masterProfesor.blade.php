<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <style>
        body {
            background: linear-gradient(to bottom, #72dde2, #1c6bb0);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <div class="container bg-ternary">
        <div class="container-fluid bg-body-tertiary mt-4 mb-4 border border-5 rounded">
            <nav class="navbar navbar-expand-lg" id="navbarPrincipal">
                <div class="container-fluid">
                    
                    <div class="col-xl-11 col-m-12">
                        <h5><span class="material-symbols-outlined">interactive_space</span> Bienvenido</h5>
                    </div>
                    
                    <div class="col-xl-1 col-m-12 text-end d-lg-block">
                        <a href="/" class="text-dark">Cerrar Sesión</a>
                    </div>

                </div>
            </nav>
        </div>

        <div class="container-fluid bg-body-tertiary  border border-5 rounded" style = "height:auto;">
            
            <!-- datos -->
            @yield('contenido-principal')
              
        </div>
    </div>
</body>
</html>