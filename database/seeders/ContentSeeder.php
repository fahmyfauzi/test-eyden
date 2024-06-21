<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'title1' => "Life is short",
            'title2' => "and the world 🌍",
            'title3' => "is Wide! 🏝️",
            'title4' => "The vacation you deserve is closer than you think 😍",
            'asset1' => "helicopter.png",
            'asset2' => "gunung.png",
            'asset3' => "perahu.png",
            'hero1' => "hero-1.jpg",
            'hero2' => "hero-2.jpg"
        ]);
    }
}
