<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CervezasTest extends TestCase
{
    // Test para obtener todos las cervezas
    public function test_obtener_todos_las_cervezas(): void
    {
        $response = $this->get('/api/v1/cervezas');
        $response->assertStatus(200);
    }
    // Test para obtener una cerveza
    public function test_obtener_un_cerveza(): void
    {
        $response = $this->get('/api/v1/cervezas/3');
        $response->assertStatus(200);
    }
    // Test para actualizar una cerveza
    public function test_actualizar_cerveza(): void
    {
        $response = $this->put('/api/v1/cervezas/3', [
            'nombre' => 'Andes argentina',
            'clase'=> 'Argentina',
            'descripcion' => 'Cerveza comun',
            'precio' => 5000,
            'stock' => 20,
            'codigo' => 0100,
        ]);
        $response->assertStatus(200);
    }
}
