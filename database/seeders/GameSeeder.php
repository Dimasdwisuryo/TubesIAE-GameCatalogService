<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Mobile Legends',
                'slug' => 'ml',
                'image_url' => 'https://placehold.co/100x100/ml'
            ],
            [
                'name' => 'Free Fire',
                'slug' => 'ff',
                'image_url' => 'https://placehold.co/100x100/ff'
            ],
            [
                'name' => 'Roblox',
                'slug' => 'roblox',
                'image_url' => 'https://placehold.co/100x100/rbx'
            ],
        ];

        foreach ($games as $game) {
            $g = Game::create($game);

            if ($game['slug'] == 'ml') {
                $g->denominations()->createMany([
                    ['name' => '86 Diamond', 'price' => 19000],
                    ['name' => '172 Diamond', 'price' => 38000],
                ]);
            } elseif ($game['slug'] == 'ff') {
                $g->denominations()->createMany([
                    ['name' => '100 Diamond', 'price' => 15000],
                ]);
            } else {
                $g->denominations()->createMany([
                    ['name' => '80 Robux', 'price' => 15000],
                ]);
            }
        }
    }
}