<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),

            // Make paragraphs with implode :
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(4, 8))) . '<p>',

            // Make paragraphs with map() :
            // 'body' => collect($this->faker->paragraphs(mt_rand(4, 8)))->map(function ($p) {
            //     return "<p>$p</p>";
            // }),

            // Make paragraphs with map(fn)
            'body' => collect($this->faker->paragraphs(mt_rand(4, 8)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
