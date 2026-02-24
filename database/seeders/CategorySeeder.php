<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            ['image' => fake()->imageUrl, 'slug' => fake()->unique()->slug(3), 'title' => fake()->sentence(10), 'type' => 'product', 'discount_starts_at' => fake()->dateTime, 'discount' => fake()->numberBetween(0, 100), 'body' => fake()->text(1000)],
            ['image' => fake()->imageUrl, 'slug' => fake()->unique()->slug(3), 'title' => fake()->sentence(10), 'type' => 'product', 'discount_starts_at' => fake()->dateTime, 'discount' => fake()->numberBetween(0, 100), 'body' => fake()->text(1000)],
            ['image' => fake()->imageUrl, 'slug' => fake()->unique()->slug(3), 'title' => fake()->sentence(10), 'type' => 'product', 'discount_starts_at' => fake()->dateTime, 'discount' => fake()->numberBetween(0, 100), 'body' => fake()->text(1000)],
            ['image' => fake()->imageUrl, 'slug' => fake()->unique()->slug(3), 'title' => fake()->sentence(10), 'type' => 'product', 'discount_starts_at' => fake()->dateTime, 'discount' => fake()->numberBetween(0, 100), 'body' => fake()->text(1000)],
            ['image' => fake()->imageUrl, 'slug' => fake()->unique()->slug(3), 'title' => fake()->sentence(10), 'type' => 'product', 'discount_starts_at' => fake()->dateTime, 'discount' => fake()->numberBetween(0, 100), 'body' => fake()->text(1000)],
        ];
        DB::table('categories')->insert($values);
    }
}
