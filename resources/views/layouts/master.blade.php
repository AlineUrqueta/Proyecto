<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Alumno</title>
    
    <style>
        body {
      background: linear-gradient(to bottom, #72dde2, #1c6bb0); /* Cambia los colores según tu preferencia */
      background-repeat: no-repeat;
      background-attachment: fixed;
        }

        /* Resto de los estilos para tu página web */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
        }

        #navbarPrincipal{
            background-color: rgb(223, 234, 246);;
        }

        #icon-span {
          font-size: 3rem; 
        }

        #downdrop {
          font-size: 2rem; /* Ajusta el tamaño del texto del menú desplegable */
          min-width: 300px; /* Ajusta el ancho mínimo del menú desplegable */
        }
        #span-accept{
            background-color: rgb(250, 235, 215)
        }
        #span-not{
            background-color: rgb(244, 185, 107)
        }
        #span-denegado{
            background-color: rgb(233, 107, 23)
        }
        
      </style>
</head>

<body>
    

    <!-- navbar -->
    <div class="container-fluid px-3 mt-3">
        <nav class="navbar navbar-expand-lg" id="navbarPrincipal">
            <div class="container-fluid">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="navbar-brand d-flex align-items-center" href="#">
                        <span id="icon-span" class="material-symbols-outlined">emoji_people</span>
                        <span class="ms-2 h1 mb-0 nav-link active h2 " >Alumno</span>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
                
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navSuport" aria-controls="navSuport"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                  
                  <div class="col" id="navSupport">
                        <div class="card-header">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="downdrop" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cambiar de Usuario
                                </button>
                                    <ul class="dropdown-menu dropdown-menu-dark w-100" id="navbarPrincipal" aria-labelledby="downdrop">
                                        <li><a class="dropdown-item h3" href="#">Profesor</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a class="dropdown-item h3" href="#">Administrador</a></li>
                                    </ul>
                            </div>
                        </div>
                    
                  </div>
                
            </div>
        </nav>
    </div>

    <!-- datos -->

    @yield('contenido-principal')
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>