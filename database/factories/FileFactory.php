<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->word() . '.jpg',
            'path' => $this->faker->filePath(),
            'size' => rand(1000, 5000),
            'user_id' => User::all()->random()->id,
        ];
    }
}
