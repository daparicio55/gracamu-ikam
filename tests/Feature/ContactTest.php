<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('it renders the gracamu landing page successfully', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('GRACAMU');
    $response->assertSee('IKAM');
    $response->assertSee('IDEX Perú Japón');
});

test('a coffee producer can submit a contact inquiry', function () {
    $response = $this->post(route('contact.store'), [
        'name' => 'Juan Carlos Mendoza',
        'phone' => '+51975800888',
        'email' => 'juan@cafesanta.pe',
        'producer_type' => 'Caficultor Independiente',
        'cooperative_or_location' => 'Rodríguez de Mendoza',
        'hectares' => '5 ha',
        'message' => 'Deseo coordinar una prueba del prototipo de despulpado en seco.',
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('contacts', [
        'name' => 'Juan Carlos Mendoza',
        'phone' => '+51975800888',
        'cooperative_or_location' => 'Rodríguez de Mendoza',
    ]);
});
