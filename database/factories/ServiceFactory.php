<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween($min = 100, $max = 300),
            'type' => $this->faker->randomElement($array = array('f', 'm')),
            'discount' => 0,
            'service_category_id' => $this->faker->numberBetween($min = 1, $max = 6)
        ];
    }
}
