@extends('layouts.masterProfesor')
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
                        <th>Comentario</th>
                        <th>Documento</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($propuestas as $propuesta)
                    <tr>
                        <td>{{$propuesta->estudiante_rut}}</td>
                        <td>{{$propuesta->fecha}}</td>
                        <td class="text" style="0px">
                          <div class="d-flex">
                            <a href="{{route('profesores.comment',['profesor_rut'=>$profesor->rut,'estudiante_rut'=>$propuesta->estudiante_rut])}}"  class="btn border-dark d-flex align-items-center" style="text-decoration: none; color: black;">
                                Agregar <span class="material-symbols-outlined">add_comment</span></a>
                          </div>
                        </td>
                        <td> <button class="btn border-dark d-flex align-items-center">Documento.pdf<span class="material-symbols-outlined ">download</span></button></td>
                        @if($propuesta->estado == 1)
                            <td>Aceptado</td>
                        @elseif($propuesta->estado == 2)
                            <td>Rechazado</td>
                        @elseif($propuesta->estado == 3)
                            <td>Esperando revisión</td>
                        @else
                            <td>Modificar propuesta</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
            </div>
        </div>
    </div>
<div>
@endsection