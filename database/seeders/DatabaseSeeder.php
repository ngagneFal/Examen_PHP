<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
			// the order matters!
			TypeSeeder::class,
    
		]);
    }
}
