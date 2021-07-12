<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Berita;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'slug' => $this->faker->slug,
            'konten' => $this->faker->text,
            'image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'dibuat_pada' => $this->faker->dateTime(),
            'diubah_pada' => $this->faker->dateTime(),
        ];
    }
}
