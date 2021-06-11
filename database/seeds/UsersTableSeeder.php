<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('users')->insert([

            "name"        => "Sabbir Ahmed",		
            "username"    => "sabbir",		
            "email"       => "sabbir@uttarauniversity.edu.bd",		
            "password"    => Hash::make('11111111'),		
            "address"     => "241/3, east nakhalpara, tejgaon, dhaka",		
            "phone"       => "01723494591",     
            "user_role"   => 1,	    
            "gender"      => 1,     	
            "is_approved" => 1,		

        ]);

        // teacher
        DB::table('users')->insert([

            "name"        => "MD Golam Hafeez Siyam",        
            "username"    => "siyam",      
            "email"       => "siyam@uttarauniversity.edu.bd",      
            "password"    => Hash::make('11111111'),        
            "address"     => "241/3, sector-12, uttara, dhaka",        
            "phone"       => "01723494592",     
            "user_role"   => 2,     
            "gender"      => 1,         
            "is_approved" => 1,     

        ]);

        // stuff
        DB::table('users')->insert([

            "name"        => "Rafiqul Islam",        
            "username"    => "rafiqul",      
            "email"       => "rafiqul@uttarauniversity.edu.bd",      
            "password"    => Hash::make('11111111'),            
            "address"     => "241/3, road-6, basabo, khilgaon, dhaka",   
            "phone"       => "01723494593",     
            "user_role"   => 3,      
            "gender"      => 1,        
            "is_approved" => 1,     

        ]);

        // student
        DB::table('users')->insert([
            
            "name"        => "Rabeya Islam Emu",        
            "username"    => "2172091011",      
            "email"       => "2172091011@uttarauniversity.edu.bd",      
            "password"    => Hash::make('11111111'),            
            "address"     => "241/3, dakhshinkhan, uttara, dhaka",  
            "phone"       => "01723494594",     
            "user_role"   => 4,     
            "gender"      => 2,     
            "is_approved" => 1,     

        ]);
    }
}
