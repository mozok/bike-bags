<?php

use Illuminate\Database\Seeder;

class BagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bag::class, 5) -> create();
    }
}
