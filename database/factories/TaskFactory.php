<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Database\Factories\Playground\Lead\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Lead\Models\Task;

/**
 * \Database\Factories\Playground\Lead\Models\TaskFactory
 *
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Task>
     */
    protected $model = Task::class;

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

    // States: flags

    public function locked(): TaskFactory
    {
        return $this->state(fn (array $attributes) => [
            'locked' => true,
        ]);
    }

    public function featured(): TaskFactory
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    public function special(): TaskFactory
    {
        return $this->state(fn (array $attributes) => [
            'special' => true,
        ]);
    }
}
