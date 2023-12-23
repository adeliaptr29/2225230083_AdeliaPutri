<?php

namespace Database\Factories;

use App\Models\Warga;
use Illuminate\Database\Eloquent\Factories\Factory;

class WargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Warga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nama' => $this->faker->name,
            'Gambar' => $this->faker->imageUrl(200, 200, 'people'),
            'Email' => $this->faker->unique()->safeEmail,
            'Instagram' => $this->faker->userName,
            'Tiktok' => $this->faker->userName,
            'vote' => $this->faker->randomElement(['PASLON 1', 'PASLON 2', 'PASLON 3', null]),
        ];
    }
}
