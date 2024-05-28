<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $this->withoutExceptionHandling();
         // მომზადება

        // ქმედება : GET ტიპის, content-type = application/json  მოთხოვნა /todo-list ბმულზე
        $response = $this->getJson('api/todo-list');
        dd($response->json());
        // მტკიცება : მასივად დაფორმატებული პასუხი შეიცავს 1 ელემენტს
        $this->assertEquals(1, count($response->json()));
    }
}
