@extends('layout.plantilla')
@section('title','Actualizar')
@section('contenido')
<div class="jumbotron jumbotron-fluid" style="background-color: white">
    <div class="container">
        <h1 class="display-4 text-center">Editar Datos</h1>
        <div class="col mt-4">
            <form action="{{route('personas.update', $persona->id)}}" method="post">
                @csrf 
                @method('patch')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titulo">Apellifo paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Apellido Paterno" value="{{$persona->paterno}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="autor">Apellido materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" placeholder="Apellido materno" value="{{$persona->materno}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="editorial">Nombre</label>
                        <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Nombre" value="{{$persona->nombre}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fecha_publicacion">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento" placeholder="Fecha de Nacimiento" value="{{$persona->fecha_nacimiento}}">
                    </div>
                    <br>
                    
                        <label for="">Sexo</label>
                        <input type="radio" id="sexo" required
                            name="sexo" value="masculino">Masculino
                        <input type="radio" id="sexo"
                            name="sexo" value="Femenino">Femenino
                    
                </div>
                <button type="submit" class="btn btn-dark">Actualizar</button>
                <button href="{{route('personas.index')}}" class="btn btn-primary">Regresar</button>
            </form>
        </div>
    </div>
</div>

@endsection