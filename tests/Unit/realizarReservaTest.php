<?php

namespace Tests\Unit;

use Tests\TestCase;

class realizarReservaTest extends TestCase
{
    public function testRealizarReserva()
    {
        // Arrange
        $datosReserva = [
            'zona' => 1,
            'id_usuario' => 4,
            'fecha' => date('Y-m-d', strtotime('2023-07-12')),
            'cantidad_personas' => 2,
            'hora' => 1,
        ];

        // Act
        $response = $this->post('reservas/store', $datosReserva);
        // $response->assertStatus(200);
        // $response = $this->post('reservas/store', [
        //     'fecha' => date('Y-m-d', strtotime('2023-07-12')),
        //     'hora' => 1,
        //     'zona' => 1,
        //     'cantidad_personas' => 2,
        //     'id_usuario' => 4,
        // ]);
        $this->assertDatabaseHas('reserva', [
            'id_zona' => 1,
            'id_usuario' => 4,
            'fecha' => '2023-07-12',
            'cantidad_personas' => 2,
            'id_hora' => 1,
        ]);
    }
};
