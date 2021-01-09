<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

 /** @test */
    public function guest_may_not_see_and_create_tasks()
    {
        $this->withExceptionHandling();

        $this->get('/dashboard')
            ->assertRedirect('/login');

        $this->post('/create-a-task')
            ->assertRedirect('/login');
    }

    
}
