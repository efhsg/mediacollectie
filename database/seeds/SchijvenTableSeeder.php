<?php

use Illuminate\Database\Seeder;

class SchijvenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('schijven')->delete();

        \DB::table('schijven')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'created_at' => null,
                    'updated_at' => null,
                    'naam' => '2010',
                    'capaciteit' => 2000,
                    'beschikbaar' => 88,
                    'scandatum' => '2016-11-10',
                ),
            1 =>
                array(
                    'id' => 2,
                    'created_at' => null,
                    'updated_at' => null,
                    'naam' => '2011',
                    'capaciteit' => 1500,
                    'beschikbaar' => 52,
                    'scandatum' => '2016-11-10',
                ),
            2 =>
                array(
                    'id' => 3,
                    'created_at' => null,
                    'updated_at' => null,
                    'naam' => '2012',
                    'capaciteit' => 2000,
                    'beschikbaar' => 92,
                    'scandatum' => '2016-11-10',
                ),
            3 =>
                array(
                    'id' => 4,
                    'created_at' => null,
                    'updated_at' => null,
                    'naam' => '2013',
                    'capaciteit' => 2000,
                    'beschikbaar' => 62,
                    'scandatum' => '2016-11-10',
                ),
            4 =>
                array(
                    'id' => 5,
                    'created_at' => null,
                    'updated_at' => null,
                    'naam' => '2014',
                    'capaciteit' => 2000,
                    'beschikbaar' => 24,
                    'scandatum' => '2016-11-10',
                ),
        ));


        App\Schijf::where('created_at',null)->update(['created_at' => \Carbon\Carbon::now()]);

    }
}