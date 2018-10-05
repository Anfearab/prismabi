<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profesion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('profesion')->insert([
            'title'=>'Desarrollador back',
        ]);

        DB::table('profesion')->insert([
            'title'=>'Desarrollador front',
        ]);
        
        DB::table('profesion')->insert([
            'title'=>'Diseñador',
        ]);
    }
}
