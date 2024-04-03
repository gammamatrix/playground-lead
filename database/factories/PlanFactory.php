<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Database\Factories\Playground\Lead\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Lead\Models\Plan;

/**
 * \Database\Factories\Playground\Lead\Models\PlanFactory
 *
 * @extends Factory<Plan>
 */
class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Plan>
     */
    protected $model = Plan::class;

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
}
