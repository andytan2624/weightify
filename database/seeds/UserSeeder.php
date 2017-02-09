<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = app()->make('config');

        DB::table("users")->delete();

        User::create(['first_name' => 'Andy', 'last_name' => 'Tan', 'email' => 'password@uy.com', 'password' => 'lo']);
    }
}
