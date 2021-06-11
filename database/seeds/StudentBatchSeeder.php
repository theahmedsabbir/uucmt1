<?php

use Illuminate\Database\Seeder;

class StudentBatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
    
        DB::table('batches')->insert([

            "user_id"        => 4,		
            "batch_id"    => 1,		

        ]);
    }
}
