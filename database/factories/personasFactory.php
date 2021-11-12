<?php

namespace Database\Factories;

use App\Models\Personas;


use Illuminate\Database\Eloquent\Factories\Factory;

class personasFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personas::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paterno'=>$this->faker->lastName(),
            'materno'=>$this->faker->lastName(),
            'nombre'=>$this->faker->name(),
            'fecha_nacimiento'=>$this->faker->date(),
            'sexo'=>$this->faker->sentence()
        ];
    }
}
