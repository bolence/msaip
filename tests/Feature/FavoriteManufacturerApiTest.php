<?php

namespace Tests\Feature;

use App\Models\Manufacturer;
use App\Models\ManufacturerModels;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FavoriteManufacturerApiTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    public function setUp() : void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    /**
     * Test if user can list his favorite manufacturer
     *
     * @return void
     */
    public function test_user_can_list_his_favorite_manufacturer()
    {
        $response = $this->getJson('/api/favorite_manufacturers');

        $response->assertStatus(200);
    }

    /**
     * Test if user can save his favorite manufacturer
     *
     * @return void
     */
    public function test_if_user_can_save_favorite_manufacturer()
    {
        $manufacturer = Manufacturer::factory(1)->create();
        $manufacturerModel = ManufacturerModels::factory(1)->create();

        $data = [
            'manufacturer_id' => $manufacturer[0]->id,
            'manufacturer_model_id' => $manufacturerModel[0]->id,
            'user_id' => $this->user->id
        ];

        $response = $this->postJson('/api/favorite_manufacturers', $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('saved_manufacturers', $data);
    }
}
