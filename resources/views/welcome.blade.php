<!DOCTYPE html>
<html lang="en">
    @extends('layouts.master')

    @section('contenido-principal')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
   
</head>
<body>
    <div class="container-fluid">
        
   
    </div>
    <div class="container-fluid">
        

        <div class="row mt-4">
            <!-- tabla -->
            <div class="col-12 col-lg-8 order-last order-lg-last">
                <table class="table table-bordered table-striped table-hover" style="background-color: aliceblue">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Rut</th>
                            <th>Apellidos</th>
                            <th>Nombre</th>
                          
                            <th>Ver y Agregar Proyectos</th>
                            
                            
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>20827854-1</td>
                            <td>Pérez Vargas</td>
                            <td>Francisco</td>


                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center">
                                  <button class="btn btn-info d-flex align-items-center">
                                    <span class="material-symbols-outlined">visibility</span>
                                    <h2 class="mx-2">/</h2>
                                    <span class="material-symbols-outlined">upload_file</span>
                                  </button>
                                </div>
                              </td>
                               
                               
                            
                          

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>234344334-2</td>
                            <td>akdkdsa kaskda</td>
                            <td>Epico</td>
                           
                               
                               
                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center">
                                  <button class="btn btn-info d-flex align-items-center">
                                    <span class="material-symbols-outlined">visibility</span>
                                    <h2 class="mx-2">/</h2>
                                    <span class="material-symbols-outlined">upload_file</span>
                                  </button>
                                </div>
                              </td>
                                
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>234344334-2</td>
                            <td>akdkdsa kaskda</td>
                            <td>Epico</td>
                           
                               
                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center">
                                  <button class="btn btn-info d-flex align-items-center">
                                    <span class="material-symbols-outlined">visibility</span>
                                    <h2 class="mx-2">/</h2>
                                    <span class="material-symbols-outlined">upload_file</span>
                                  </button>
                                </div>
                              </td>
                                
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>234344334-2</td>
                            <td>akdkdsa kaskda</td>
                            <td>Epico</td>
                            
                               
                               
                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center">
                                  <button class="btn btn-info d-flex align-items-center">
                                    <span class="material-symbols-outlined">visibility</span>
                                    <h2 class="mx-2">/</h2>
                                    <span class="material-symbols-outlined">upload_file</span>
                                  </button>
                                </div>
                              </td>
                                
                        </tr>
                    </thead>
                    
                </table>
            </div>
            <!-- form de proyecto -->
            <div class="col-12 col-lg-4 order-first order-lg-first mt-3">
                <div class="card" style="background-color: aliceblue">
                    <div class="card-header ">Ingresar</div>
                    <div class="card-body">
                    
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellidos</label>
                                <input type="text" id="apellido" name="apellido" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="rut" class="form-label">Rut</label>
                                <input type="text" id="rut" name="rut" class="form-control">
                            </div>
                            
                           
                            <div class="mb-3 d-grid gap-2 d-lg-block text-center d-flex justify-content-center">
                                <button type ="reset" class="btn btn-warning">Cancelar</button>
                                <button type ="submit" class="btn btn-success">Agregarme como Nuevo Alumno</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    @endsection
</body>

</html>