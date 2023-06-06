@extends('layouts.masterFinal')
@section('contenido-principal')
<div class="row m-2">           
    <div class="row m-2 mt-2">
        <div class="col-lg-4 col-m-12 ">
            <h5 class = "mt-2 mb-4">Datos del Estudiante</h5>
            <div class="card">
                <div class="card-header">
                    Información Personal
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex flex-column">
                            <label for="nombre" class="fw-bold">Nombre</label>
                            <label for="apellido" class="fw-bold">Apellido</label>
                            <label for="rut" class="fw-bold">RUT</label>
                            <label for="email" class="fw-bold">Email</label>
                        </div>
                        

                        <div class="col-8 d-flex flex-column">
                            
                            <label for="nombre">{{$estudiante->nombre}}</label>
                            <label for="apellido">{{$estudiante->apellido}}</label>
                            <label for="rut">{{$estudiante->rut}}</label>
                            <label for="email">{{$estudiante->email}}</label>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-8 col-m-12 mt-m-4 mt-s-4">
            <h5 class = "mt-2 mb-4">Propuestas de {{$estudiante->nombre}}</h5>

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
<div>
@endsection


