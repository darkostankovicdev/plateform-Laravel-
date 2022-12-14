<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition($employer = [])
    {
        return [
            "name" => optional($employer)["name"] ?? $this->faker->company,
        ];
    }
}
