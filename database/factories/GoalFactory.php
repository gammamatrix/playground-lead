<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Database\Factories\Playground\Leads\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Leads\Models\Goal;

/**
 * \Database\Factories\Playground\Leads\Models\GoalFactory
 *
 * @extends Factory<Goal>
 */
class GoalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Goal>
     */
    protected $model = Goal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'label' => $this->faker->sentence(3),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),
        ];
    }

    public function locked(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'locked' => true,
        ]);
    }

    public function featured(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }
}
