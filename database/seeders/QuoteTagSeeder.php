<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuoteTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quote_tag')->insert([
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
            [
                'tag_id' => rand(1,10),
                'quote_id' => rand(1,10),
            ],
        ]);
    }
}
