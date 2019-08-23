<?php

use Illuminate\Database\Seeder;
use App\Climber;

class ClimberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Climber::class, 10)->create();
    }
}
