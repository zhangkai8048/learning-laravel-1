<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       /* DB::table('notices')->insert([
            'title' => str_random(10),
            'content' => 'content:'.str_random(100),
            'created_at'=>date('Y-m-d H:i:s',time())
        ]);*/
        $this->call([
            NoticeTableSeeder::class,
        ]);
    }

}
