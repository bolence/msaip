<?php

namespace Tests\Feature;

use App\Models\Manufacturer;
use App\Models\ManufacturerModels;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManufacturersApiTest extends TestCase
{

    use RefreshDatabase;

    public function setUp() : void
    {
        parent::setUp();
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    /**
     * Test if user can list all manufacturers and populate select element
     *
     * @return void
     */
    public function test_can_list_all_manufacturer()
    {

        $response = $this->getJson('/api/manufacturers');

        $response->assertStatus(200);
    }

    public function test_can_list_manufacturer_models()
    {
        $manufacturer = Manufacturer::factory(1)->create();

        $manufacturerId = $manufacturer[0]->id;

        ManufacturerModels::factory(1)->create();

        $response = $this->getJson('/api/manufacturers/' . $manufacturerId);

        $response
            ->assertStatus(200)
            ->assertJsonFragment(['name' => 'Mazda 6']);
    }
}
