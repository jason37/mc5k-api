<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Tests\TestCase;

class LoginTest extends TestCase
{

// 	use DatabaseMigrations;
	use DatabaseTruncation;

	public function setUp(): void
	{
		parent::setUp();
		$this->artisan('db:seed');
	}

	public function test_login_endpoint_empty_forbidden(): void
	{
			$response = $this->post('/api/login');
			$response->assertStatus(403);
	}

public function test_login_endpoint_valid_user(): void
	{
		$auth = [
			'email' => 'test@example.com',
			'password' => 'password',
		];

		$response = $this->json('POST', '/api/login', $auth)
			->assertStatus(200)
			->assertJsonFragment([
					'status' => 'success',
					'message' => 'User is logged in successfully.',
				],
			);
	}

}
