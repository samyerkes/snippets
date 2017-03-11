<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 2)->create();
        factory(App\Models\Snippet::class, 3)->create();
        factory(App\Models\Output::class, 10)->create();
    }
}
