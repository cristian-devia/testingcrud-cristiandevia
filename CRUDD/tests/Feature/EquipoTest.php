<?php

namespace Tests\Feature;

use App\Models\Sede;
use Illuminate\Foundation\Testing\RefreshDatabase;


use Tests\TestCase;

class EquipoTest extends TestCase
{

    use RefreshDatabase;

    protected $sede;

    /**
     * Test index method.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get(route('sedes.index'));

        $response->assertStatus(200);
    }

    /**
     * Test create method.
     *
     * @return void
     */
    public function test_create()
    {
        $response = $this->get(route('sedes.create'));

        $response->assertStatus(200);
    }

    public function setUp(): void
    {
        parent::setUp();

      
        $this->sede = Sede::create([
            'equipo' => 'Asus',
            'serial' => 'ASK-987',
            'precio' => '1.500.000',
        ]);
    }



    public function test_show()
    {
        
        $response = $this->get(route('sedes.show', $this->sede->id));

        $response->assertStatus(200);
        $response->assertViewIs('sede.show');
        $response->assertViewHas('sede', $this->sede);
    }

    public function test_edit()
    {
        
        $response = $this->get(route('sedes.edit', $this->sede->id));

        $response->assertStatus(200);
        $response->assertViewIs('sede.edit');
        $response->assertViewHas('sede', $this->sede);
    }

    public function test_update()
{
    
    $newSedeData = [
        'equipo' => 'LENOVO',
        'serial' => 'ASK-987',
        'precio' => 'Nueva Ubicación'
    ];

    $response = $this->put(route('sedes.update', $this->sede->id), $newSedeData);

    $response->assertRedirect(route('sedes.index'));

    
    $this->sede->refresh();

    
    $this->assertEquals($newSedeData['nombre_sede'], $this->sede->nombre_sede);
    $this->assertEquals($newSedeData['encargadosede'], $this->sede->encargadosede);
    $this->assertEquals($newSedeData['ubicacion'], $this->sede->ubicacion);
}

    public function test_destroy()
{
    
    $response = $this->delete(route('sedes.destroy', $this->sede->id));

    $response->assertRedirect(route('sedes.index'));

    
    $this->assertDatabaseMissing('sedes', ['id' => $this->sede->id]);
}

    
   
    
}
