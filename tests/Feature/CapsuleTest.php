<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Tests\TestCase;


class CapsuleTest extends TestCase
{

	use DatabaseTruncation;


	public function setUp(): void
	{
		parent::setUp();
		$this->artisan('db:seed');
	}

}
