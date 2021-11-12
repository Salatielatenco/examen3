@extends('layout.plantilla')
@section('title','Ingresar')
@section('contenido')



    <div class="row mt-3">
        <div class="col">
            <h1 class="text-center display-4">Agregar nueva persona</h1>
        </div>
    </div>

    <hr>

    <div class="row mt-5">
        <div class="col">
            <form action="{{route('personas.store')}}" method="post">

                @csrf

                <label>Apellido Paterno: </label>
                <input type="text" name="Apaterno" >
                <br>
                <label>Apellido Materno: </label>
                <input type="text" name="Amaterno" >
                <br>
                <label>Nombre: </label>
                <input type="text" name="nombre" >
                <br>
                <label>Fecha de nacimiento: </label>
                <input type="date" name="fecha" >
                <br>
                <label for="sexo">Sexo</label>
                <select name="sexo" class="form-control">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
                <br>
                <button type="submit">Agregar</button>
            </form>
        </div>
    </div>

@endsection