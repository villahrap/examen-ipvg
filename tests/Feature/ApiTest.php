<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{

    public function test_get_token_has_valid_keys(): void
    {
        // Prepare (Preparar)
        $uri = "/api/get-token";
        // Execute (Ejecutar)
        $response = $this->get($uri);
        // Assert (Afirmar)
        $response->assertStatus(200)
        ->assertJsonIsObject()
        ->assertJsonStructure([
            'token',
            'user'
        ]);
    }
}
