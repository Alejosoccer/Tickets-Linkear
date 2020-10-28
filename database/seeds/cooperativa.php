<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cooperativa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('professions')->insert([
            'logo' => 'Desarrollador back-end',
        ]);
        //
    }
}
