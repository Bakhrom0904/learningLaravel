<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name'=>'John Doe',
            'address'=>'Samarkand',
            'phone'=>979072966,
            'email'=>'test@gmail.com',
            'status'=>0

        ]);
    }
}
