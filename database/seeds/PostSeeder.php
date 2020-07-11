<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('posts')->insert([
                'title' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
                'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nemo veniam eveniet accusantium repudiandae vel et laborum voluptatibus excepturi quos atque inventore neque nostrum, laboriosam dolore, vitae, esse nisi in.',
                'thumbnail' => 'default-image.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
