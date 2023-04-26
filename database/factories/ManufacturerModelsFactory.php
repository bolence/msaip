<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerModelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manufacturer_id' => Manufacturer::first()->id,
            'name' => 'Mazda 6',
            'code' => 'Mazda 6',
        ];
    }
}
