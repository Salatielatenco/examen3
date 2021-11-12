@extends('layout.plantilla')
@section('title','Lista' )
@section('contenido')
<br>

<a href="{{route('personas.ingresar', $persona)}}">Insertar</a>

<div class="row">
    <div class="col">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Paterno</th>
                    <th scope="col">Materno</th>
                    <th scope="col">Mombre</th>
                    <th scope="col">FECHA DE NACIMIENTO</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">ACTUALIZAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persona as $personas)
                <tr>
                    
                    <th scope="row">{{$personas->id}}</th>
                    <th>{{$personas->paterno}}</th>
                    <th>{{$personas->materno}}</th>
                    <th>{{$personas->nombre}}</th>
                    <th>{{$personas->fecha_nacimiento}}</th>
                    <th>{{$personas->sexo}}</th>
                    <th>
                        <button type="button" class="btn btn-success">
                            <a style="color: white;" href="{{route('personas.edit', $personas->id)}}">Actualizar</a>
                        </button></th>
                    <th>
                        <form action="{{route('personas.eliminar',$personas)}}" method="POST" >
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button></th>
                        </form>
                    <th>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('pagina')
{{$persona->links()}}
@endsection