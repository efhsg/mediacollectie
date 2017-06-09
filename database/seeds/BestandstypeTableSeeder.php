<?php

use Illuminate\Database\Seeder;

class BestandstypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bestandstype')->delete();
        
        \DB::table('bestandstype')->insert(array (
            0 => 
            array (
                'id' => 12,
                'naam' => 'avi',
            ),
            1 => 
            array (
                'id' => 7,
                'naam' => 'bin',
            ),
            2 => 
            array (
                'id' => 2,
                'naam' => 'bluray',
            ),
            3 => 
            array (
                'id' => 9,
                'naam' => 'divx',
            ),
            4 => 
            array (
                'id' => 1,
                'naam' => 'dvd',
            ),
            5 => 
            array (
                'id' => 4,
                'naam' => 'img',
            ),
            6 => 
            array (
                'id' => 5,
                'naam' => 'iso',
            ),
            7 => 
            array (
                'id' => 13,
                'naam' => 'm2ts',
            ),
            8 => 
            array (
                'id' => 10,
                'naam' => 'm4v',
            ),
            9 => 
            array (
                'id' => 16,
                'naam' => 'mdf',
            ),
            10 => 
            array (
                'id' => 14,
                'naam' => 'mkv',
            ),
            11 => 
            array (
                'id' => 11,
                'naam' => 'mp4',
            ),
            12 => 
            array (
                'id' => 6,
                'naam' => 'mpg',
            ),
            13 => 
            array (
                'id' => 15,
                'naam' => 'ts',
            ),
            14 => 
            array (
                'id' => 8,
                'naam' => 'vob',
            ),
            15 => 
            array (
                'id' => 3,
                'naam' => 'wmv',
            ),
        ));
        
        
    }
}