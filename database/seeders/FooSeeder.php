<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Foo::factory(50)->create();
    }
}
