<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AuthorBook;
class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorBook::factory()->count(25)->create();
    }
}
