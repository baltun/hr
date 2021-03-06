<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Position;

class PositionApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_position()
    {
        $position = Position::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/positions', $position
        );

        $this->assertApiResponse($position);
    }

    /**
     * @test
     */
    public function test_read_position()
    {
        $position = Position::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/positions/'.$position->id
        );

        $this->assertApiResponse($position->toArray());
    }

    /**
     * @test
     */
    public function test_update_position()
    {
        $position = Position::factory()->create();
        $editedPosition = Position::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/positions/'.$position->id,
            $editedPosition
        );

        $this->assertApiResponse($editedPosition);
    }

    /**
     * @test
     */
    public function test_delete_position()
    {
        $position = Position::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/positions/'.$position->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/positions/'.$position->id
        );

        $this->response->assertStatus(404);
    }
}
