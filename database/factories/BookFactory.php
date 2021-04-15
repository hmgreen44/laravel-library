<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($this->faker->numberBetween(15,30)),
            'ISBN' => $this->faker->isbn13,
            'excerpt' => $this->faker->text,
            'pages' => $this->faker->numberBetween(100,200),
            'cost' => $this->faker->numberBetween(10,20),
          
        ];
    }
}
