<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{

	public function test_register_empty_forbidden(): void
	{
			$response = $this->post('/api/register');
			$response->assertStatus(403);
	}

}
