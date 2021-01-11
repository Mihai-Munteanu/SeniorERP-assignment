<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'test',
            'role' => 'Manager',
            'email' => 'test@example.com',
            'password' => Hash::make('1234567890'),
        ]);

        $tasks_random = \App\Models\Task::factory(30)->create();
        $tasks_allocated_to_test_user = \App\Models\Task::factory(['allocated_to'=>1, 'importance'=>'Low'])->count(10)->create();
        $tasks_allocated_to_test_user = \App\Models\Task::factory(['user_id'=>1, 'allocated_to'=>1, 'importance'=>'Low'])->count(5)->create();
        $tasks_allocated_to_test_user = \App\Models\Task::factory(['user_id'=>1, 'allocated_to'=>1, 'importance'=>'Medium'])->count(5)->create();
        $tasks_allocated_to_test_user = \App\Models\Task::factory(['user_id'=>1, 'allocated_to'=>1, 'importance'=>'High'])->count(5)->create();
        $tasks_created_by_test_user = \App\Models\Task::factory(['user_id'=>1, 'importance'=>'High'])->count(10)->create();
    }
}
