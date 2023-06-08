@extends('layouts.masterProfesor')

@section('contenido-principal')

<div class="row m-2">           
    <div class="row m-2 mt-2">
        <div class="col-lg-4 col-m-12 ">
            <h5 class = "mt-2 mb-4">Datos del la Propuesta</h5>
            <div class="card">
                <div class="card-header">
                    ID Propuesta: {{$propuesta->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex flex-column">
                            <label for="nombre" class="fw-bold">Autor</label>
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
            <form action="{{route('profesores.storeComentario',['id_propuesta'=>$propuesta->id,'rut_profesor'=>'19345987-1']) }}" method="POST">
                @csrf
            <h5 class = "mt-2 mb-4">Comentario </h5>
            <textarea id="comentario" class="form-control" rows="5" placeholder="Escribe tu comentario aquí"></textarea>
             <button type = "submit" class="btn btn-primary mt-3">Enviar comentario</button>
            </form>
        </div>
    </div>
<div>
@endsection

