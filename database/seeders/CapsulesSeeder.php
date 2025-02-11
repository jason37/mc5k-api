<?php

namespace Database\Seeders;

use App\Models\Capsule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapsulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	$capsules = [
    		[
    			'message'   => 'The coffee shop buzzed with quiet energy. Steam curled from mugs, mingling with the aroma of roasted beans. Laptops glowed, fingers danced across keyboards, and hushed conversations filled the air. Outside, the city hurried past, but inside, time seemed to slow, measured in sips and keystrokes.',
    			'open_time' => '2025-01-26 00:00:00',
    			'is_opened' => false,
    			'user_id'   => 1,
     		],
     		[
					'message'   => 'Golden sunlight streamed through the leaves, dappling the forest floor. Birds chirped their cheerful melodies, a symphony of nature. A gentle breeze rustled through the trees, carrying the scent of pine and damp earth. It was a perfect day for a walk in the woods, a chance to escape the everyday and reconnect with the wild.',
					'open_time' => '2025-01-26 00:00:00',
					'is_opened' => true,
					'user_id'   => 1,
				],
				[
    			'message'   => 'The coffee shop buzzed with quiet energy. Steam curled from mugs, mingling with the aroma of roasted beans. Laptops glowed, fingers danced across keyboards, and hushed conversations filled the air. Outside, the city hurried past, but inside, time seemed to slow, measured in sips and keystrokes.',
    			'open_time' => '2028-01-26 00:00:00',
    			'is_opened' => false,
    			'user_id'   => 1,
     		],
				[
    			'message'   => 'The waves crashed against the shore, their rhythmic roar a constant lullaby. Seagulls wheeled overhead, their cries echoing in the salty air. The sand, warm beneath bare feet, stretched out to meet the endless horizon. It was a place of vastness and solitude, where the soul could find peace.',
    			'open_time' => '2025-01-26 00:00:00',
    			'is_opened' => false,
    			'user_id'   => 1,
     		],
    	];

    	foreach($capsules as $key => $value) {
    		Capsule::create($value);
    	}
    }
}
