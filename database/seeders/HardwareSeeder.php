<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Seeder;

class HardwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $personas = new Personas();

        $personas->paterno="Alcantara";
        $personas->materno="Ginera";
        $personas->nombre="Edgar";
        $personas->fecha_nacimiento="1999-04-17";
        $personas->sexo="masculino";
        
        $personas->save();

        
    }
}
