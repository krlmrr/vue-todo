<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if all tasks can be recieved
     *
     * @return void
     */
    public function test_tasks_can_be_returned()
    {
        $this->assertCount('','1');
    }
}
