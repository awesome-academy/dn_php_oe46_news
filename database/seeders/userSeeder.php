<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=true;
        for($i=0;$i<5;$i++){
            DB::table('users')->insert([
                'name' => Str::random(5),
                'email' => Str::random(5),
                'password' => Str::random(5),
                'avatar' => Str::random(5),
                'is_admin' => $a,
            ]);
            }
    }
}
