<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'task' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'allocated_to' => User::factory()->create(),
            'due_date' => $this->faker->date,
            'importance' => 'Low',
        ];
    }
}
