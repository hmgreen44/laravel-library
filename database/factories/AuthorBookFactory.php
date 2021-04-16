<?php

namespace Database\Factories;

use App\Models\AuthorBook;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Author;
class AuthorBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuthorBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'author_id' => Author::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            
        ];
    }
}
