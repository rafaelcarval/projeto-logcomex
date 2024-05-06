<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\DataService;

class DataControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_count_data_types()
    {
        $dataService = app(DataService::class);

        $count = $dataService->countDataTypes();

        $this->assertIsArray($count);
        $this->assertArrayHasKey('char', $count);
        $this->assertArrayHasKey('varchar', $count);
        $this->assertArrayHasKey('text', $count);
        $this->assertArrayHasKey('integer', $count);
    }
}
