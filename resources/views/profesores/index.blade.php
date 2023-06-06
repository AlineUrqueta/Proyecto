@extends('layouts.masterFinal')
@section('contenido-principal')
<div class="row m-2">           
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
        
        <div class="">
            <h5 class = "mt-2 mb-4">Propuestas de Estudiantes</h5>

            <table class="table border-dark">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Comentario</th>
                        <th>Documento</th>
                        <th>Estado Revisión</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20827854-1</td>
                        <td>06/07/2023</td>
                        
                        <td>Aceptado</td>
                          <td class="text" style="0px">
                                <div class="d-flex">
                                  <a href="{{ route('profesores.comment') }}"  class="btn border-dark d-flex align-items-center" style="text-decoration: none; color: black;">
                                 
                                    
                                    Agregar
                                  
                                   

                                </a>
                                  
                                  
                                </div>
                              </td>
                              <td> <button class="btn border-dark d-flex align-items-center">
                                Documeto.pdf   <span class="material-symbols-outlined ">download</span>
                                
                               
                              </button></td>
                              <td>No visto</td>
                    </tr>
                    <tr>
                        <td>20234254-1</td>
                        <td>06/07/2023</td>
                       
                        <td>Aceptado</td>
                          <td class="text" style="0px">
                                <div class="d-flex ">
                                  <a href="{{ route('profesores.comment') }}"  class="btn border-dark d-flex align-items-center" style="text-decoration: none; color: black;">
                                 
                                    
                                    Cambiar
                                  
                                   

                                </a>
                                  
                                  <button class="btn border-dark d-flex align-items-center">
                                  <span class="material-symbols-outlined">delete</span>
                                </button>
                                </div>
                              </td>
                              <td> <button class="btn border-dark d-flex align-items-center">
                                Documeto.pdf   <span class="material-symbols-outlined ">download</span>
                                
                               
                              </button></td>
                              <td>visto</td>
                    </tr>

                    <tr>
                        <td>20827232-1</td>
                        <td>06/07/2023</td>
                     
                        <td>Aceptado</td>
                          <td class="text " style="0px">
                                <div class="d-flex">
                                  <a href="{{ route('profesores.comment') }}"  class="btn border-dark d-flex align-items-center" style="text-decoration: none; color: black;">
                                 
                                    
                                    Agregar
                                  
                                   

                                </a>
                                  
                                 
                                </div>
                              </td>
                              <td>
                                
                                <button class="btn border-dark d-flex align-items-center">
                                  Proyecto.pdf   <span class="material-symbols-outlined ">download</span>
                                  
                                 
                                </button>
                            </td>
                            <td>No visto</td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
            </div>
        </div>
    </div>
<div>
@endsection


