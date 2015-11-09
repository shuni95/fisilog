<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
        	['id'=>60,'name'=>'Escuela Academica Profesional de Ingeniería de Sistemas','facultad_id'=>20,'code'=>'20.1'],
        	['id'=>61,'name'=>'Escuela Academica Profesional de Ingeniería de Software','facultad_id'=>20,'code'=>'20.2'],
        ]);
    }
}
