<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()->count(2)->create();
        $tasks = [
            [
                'avatar' => null,
                'name' => 'Lean Jerios',
                'description' => 'Teach Laravel',
                'priority' => 'high',
                'completed' => false
            ],
            [
                'avatar' => null,
                'name' => 'Prof. Winfield Koch DDS',
                'description' => 'Teach Laravel',
                'priority' => 'low',
                'completed' => false
            ],
            [
                'avatar' => null,
                'name' => 'Kameron Yundt',
                'description' => 'Teach Laravel',
                'priority' => 'med',
                'completed' => false
            ]
        ];
        foreach ($tasks as $task){
            Task::create($task);
        }
    }
}
