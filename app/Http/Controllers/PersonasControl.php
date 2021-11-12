<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasControl extends Controller
{
    public function index(Personas $persona)
    {
        $persona = Personas::orderBy('id', 'asc')->paginate();
        return view('personas.index', compact('persona'));
    }
    public function edit($id){
        $persona= Personas::findOrFail( $id);
        return view('personas.edit', compact('persona'));
    }
    public function ingresar(){
        return view('personas.ingresar');
    }

    public function store(Request $request){
        $persona = new Personas();

        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->nombre = $request->nombre;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->sexo = $request->sexo;

       $persona->save();

       return redirect()->route('personas.index', $persona);


    }

    public function update(Request $request, $id){

            
                $persona = Personas::findOrfail($id);
                $persona-> paterno=$request->input("paterno");
                $persona-> materno=$request->input("materno");
                $persona-> nombre=$request->input("nombre");
                $persona-> fecha_nacimiento=$request->input("fecha_nacimiento");
                $persona-> sexo=$request->input("sexo");
                $persona->save();
                return redirect()->route('personas.index');
                
    }
    public function eliminar(Personas $persona){
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
