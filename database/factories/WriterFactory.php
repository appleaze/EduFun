<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $category = Category::all()->shuffle()->first();    
        return [
            //Writers Factory
            'avatar' => fake()->randomElement(['img/profile_pic_3.jpg', 'img/profile_pic_2.jpg', 'img/profile_pic_3.jpg']),
            'writer_name' => fake()->name(),
            'category_id' => $category->id,
            'short_description' => 'Specialist ' . $category->name
        ];
    }
}
