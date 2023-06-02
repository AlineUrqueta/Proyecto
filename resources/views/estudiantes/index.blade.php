<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body background="images/fondo.jpg" style="background-size:auto; background-position:top;">>
    <div class="container bg-ternary">
        <div class="container-fluid bg-body-tertiary mt-4 mb-4 border border-5 rounded">
            <nav class="navbar navbar-expand-lg" id="navbarPrincipal">
                <div class="container-fluid">
                    
                    <div class="col-11">
                        Bienvenido <span class="fw-bold">Nombre,Apellido del Estudiante</span>
                    </div>
                    
                    <div class="col-1 text-end d-none d-lg-block">
                        <a href="/" class="text-dark">Cerrar Sesión</a>
                        
                    </div>

                </div>
            </nav>
        </div>
        <div class="container-fluid bg-body-tertiary  border border-5 rounded">
            <div class="row m-2 ">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Datos Estudiante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Añadir Propuesta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Estado Propuesta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Retroalimentacion</a>
                    </li>
                </ul>
            </div>
            

            <div class="row m-2 mt-2">
                <div class="col-4">
                    <h5 class = "mt-2">Datos del Estudiante</h5>
                    <div class="card">
                        

                    </div>
                </div>
                <div class="col-8">
                    <h5 class = "mt-2">Propuesta de {Nombre Estudiante}</h5>

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
        </div>

        <div class="container-fluid bg-body-tertiary mt-4 mb-4 border border-5 rounded">
            <nav class="navbar">
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
                    <h5 class = "mt-2">Datos del Estudiante</h5>
                    <div class="card">


                    </div>
                </div>
                <div class="col-8">
                    <h5 class = "mt-2">Propuesta de {Nombre Estudiante}</h5>
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
        </div>





        


        
        
        
       
    </div>
</body>
</html>