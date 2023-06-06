@extends('layouts.masterFinal')
@section('contenido-principal')
<div class="row m-2">           
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
        
        <div class="">
            <h5 class = "mt-2 mb-4">Propuestas de Estudiantes</h5>

            <table class="table ">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Estado</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20827854-1</td>
                        <td>Francisco</td>
                        <td>Documento.pdf</td>
                        <td>Aceptado</td>
                          <td class="text" style="0px">
                                <div class="d-flex">
                                  <button class="btn btn-info d-flex align-items-center">
                                   
                                    <span class="material-symbols-outlined">build_circle</span>
                                    
                                   
                                  </button>
                                  
                                  <button class="btn btn-warning d-flex align-items-center">
                                  <span class="material-symbols-outlined">delete</span>
                                </button>
                                </div>
                              </td>
                    </tr>
                    <tr>
                        <td>20827854-1</td>
                        <td>Francisco</td>
                        <td>Documento.pdf</td>
                        <td>Aceptado</td>
                          <td class="text" style="0px">
                                <div class="d-flex ">
                                  <button class="btn btn-info d-flex align-items-center">
                                    <span class="material-symbols-outlined">build_circle</span>
                                    
                                   
                                  </button>
                                  
                                  <button class="btn btn-warning d-flex align-items-center">
                                  <span class="material-symbols-outlined">delete</span>
                                </button>
                                </div>
                              </td>
                    </tr>
                    <tr>
                        <td>20827854-1</td>
                        <td>Francisco</td>
                        <td>Documento.pdf</td>
                        <td>Aceptado</td>
                          <td class="text " style="0px">
                                <div class="d-flex">
                                  <button class="btn btn-info d-flex align-items-center">
                                    <span class="material-symbols-outlined">build_circle</span>
                                    
                                   
                                  </button>
                                  
                                  <button class="btn btn-warning d-flex align-items-center">
                                  <span class="material-symbols-outlined">delete</span>
                                </button>
                                </div>
                              </td>
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


