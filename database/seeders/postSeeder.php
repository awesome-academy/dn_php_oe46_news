<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=17;$i<23;$i++){
        DB::table('posts')->insert([
            'title' => Str::random(5),
            'img' => Str::random(5),
            'slug' => Str::random(5),
            'exceprt' => Str::random(5),
            'content_type' => Str::random(5),
            'body' => Str::random(5),
            'cate_id' => $i,
            'user_id' => $i
        ]);
    }
    }
}
