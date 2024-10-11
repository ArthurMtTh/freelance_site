<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake() -> words(5))->join(' '),
            'status' => fake() -> randomElement(['open','closed']),
            'description' => fake() -> randomHtml(),
            //'created_at' => fake() -> ,
            'ends_at' => fake() -> dateTimeBetween('now', '+ 3 days'),
            'tech_stack' => fake() -> randomElements(['react','php','javascript','java','python','laravel', 'nextjs','vue','tailwind'], random_int(1,5)),
            'created_by' => User::factory()
        ];
    }
}
