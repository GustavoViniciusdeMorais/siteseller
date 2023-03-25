<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_template_update()
    {
        $data = [
            'title' => 'test1',
            'name' => 'test1',
            'path' => 'test1'
        ];

        $expcted = ['title' => 'test1'];

        $this->put(
            route('update-template', ['id' => 1]),
            $data
        )
            ->dump()
            ->assertStatus(200)
            ->assertJsonFragment($expcted);
    }

    public function test_template_get()
    {
        $expcted = ['title' => 'test1'];

        $this->get(route('template'))
            ->dump()
            ->assertStatus(200)
            ->assertJsonFragment($expcted);
    }
}
