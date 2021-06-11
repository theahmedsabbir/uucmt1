<?php




use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
    
        DB::table('batches')->insert([

            "name"        => 42,		
            "session"    => 1,		

        ]);
    
        DB::table('batches')->insert([

            "name"        => 43,		
            "session"    => 1,		

        ]);

    }
}
