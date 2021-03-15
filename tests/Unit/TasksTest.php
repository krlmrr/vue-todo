<?php

namespace Tests\Unit;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if all tasks can be recieved
     *
     * @return void
     */
    public function test_tasks_can_be_stored()
    {
        $task = Todo::factory(4)->create();
        $this->assertDatabaseCount('todos', 4);
    }
}