<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Estilos</title>
</head>
<body>
    <style>
        body {
            background: linear-gradient(to bottom, #72dde2, #1c6bb0);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

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
</body>
@yield('estilo-aqui')
</html>