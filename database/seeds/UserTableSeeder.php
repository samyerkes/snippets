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
        DB::table('users')->insert([
            'name' => 'samyerkes',
            'email' => 'samuelyerkes@gmail.com',
            'password' => \Hash::make('test'),
            'api_token' => str_random(60),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        factory(App\Models\User::class, 2)->create();
        factory(App\Models\Snippet::class, 3)->create();
        factory(App\Models\Output::class, 10)->create();
    }
}
