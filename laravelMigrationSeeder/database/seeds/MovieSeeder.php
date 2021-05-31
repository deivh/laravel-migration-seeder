<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
   
    public function run()
    {
        factory(Movie::class, 10)->create();
    }
}
