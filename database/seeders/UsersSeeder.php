<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
			$users = [
				[
					'email'    => 'test@example.com',
					'password' => 'password',
				],
			];

			foreach($users as $key => $value) {
				User::create($value);
			}

    }
}
