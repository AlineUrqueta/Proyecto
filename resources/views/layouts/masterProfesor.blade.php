<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                        Bienvenido <span class="fw-bold">Nombre Apellido del Estudiante</span>
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

        {{-- <div class="container-fluid bg-body-tertiary mt-4 mb-4 border border-5 rounded" style = "height:30rem;">
            <nav class="navbar mt-2">
                <form class="container-fluid justify-content-start ">
                    <div class="row ">
                        <div class="col-3"><button class="btn btn-outline-secondary p-2 " type="button">Datos Estudiante</button></div>
                        <div class="col-3"><button class="btn btn-outline-secondary p-2 " type="button">Añadir Propuesta</button></div>
                        <div class="col-3"><button class="btn btn-outline-secondary p-2 " type="button">Estado Propuesta</button></div>
                        <div class="col-3"><button class="btn btn-outline-secondary p-2 " type="button">Retroalimentacion</button></div>
                    </div>

                </form>
            </nav>

            <div class="row m-2 mt-2">
                <div class="col-4">
                    <h5 class = "mt-2 mb-4">Datos del Estudiante</h5>
                    <div class="card">
                        <div class="card-header text-center">
                            Información Personal
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="m-2  d-flex flex-column">
                                        <label for="nombre" class="font-monospace">Nombre </label>
                                        <label for="nombre">Juanito </label>
                                    </div>
                                    <div class="m-2  d-flex flex-column">
                                        <label for="apellido" class="font-monospace">Apellido</label>
                                        <label for="apellido">Perez</label>
                                    </div>
                                    <div class="m-2  d-flex flex-column">
                                        <label for="rut" class="font-monospace">RUT</label>
                                        <label for="rut">20.358.265-K</label>
                                    </div>
                                    <div class="m-2  d-flex flex-column">
                                        <label for="email" class="font-monospace" >Email</label>
                                        <label for="email">juanitoP@gmail.com</label>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
  
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-8">
                    <h5 class = "mt-2 mb-4">Propuestas de {Nombre Estudiante}</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Documento</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02-06-2023</td>
                                <td>archivo.pdf</td>
                                <td>Aceptado</td>
                            </tr>
                            <tr>
                                <td>02-06-2023</td>
                                <td>archivo.pdf</td>
                                <td>Aceptado</td>
                            </tr>
                            <tr>
                                <td>02-06-2023</td>
                                <td>archivo.pdf</td>
                                <td>Aceptado</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> --}}

       
    </div>
</body>
</html>