<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('estados')->delete();

        \DB::table('estados')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'BORRADOR',
                'created_at' => '2020-10-09 21:32:16',
                'updated_at' => '2020-10-09 21:32:16',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'REVISION',
                'created_at' => '2020-10-09 21:32:16',
                'updated_at' => '2020-10-09 21:32:16',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'APROBACION',
                'created_at' => '2020-10-09 21:32:22',
                'updated_at' => '2020-10-09 21:32:22',
                'deleted_at' => NULL,
            ),
        ));


    }
}
