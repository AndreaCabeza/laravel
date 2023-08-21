<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ConsultarCervezasTest extends TestCase
{
    //Test para obtener todos las cervezas
    public function test_obtener_todos_las_cervezas(): void
    {
        $response = $this->get('/api/v1/cervezas');
        $response->assertStatus(200);
    }
}
