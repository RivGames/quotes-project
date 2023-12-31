<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Category;
use App\Models\Quote;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
//        User::factory(10)->create();
//        Author::factory(10)->create();
//        Category::factory(10)->create();
//        Tag::factory(10)->create();
//        Quote::factory(10)->create();
//        $this->call(QuoteTagSeeder::class);
    }
}
