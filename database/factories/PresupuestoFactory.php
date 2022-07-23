<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Presupuesto;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PresupuestoFactory extends Factory
{


    protected $model = Presupuesto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name = $this->faker->unique()->sentence();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'price' => $this->faker->randomFloat(15, 2, 9999),
            'description' => $this->faker->text(250),
            'user_id' => User::all()->random()->id
        ];
    }
}
