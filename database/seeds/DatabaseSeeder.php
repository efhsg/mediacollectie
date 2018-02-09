<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SchijvenTableSeeder::class);
        $this->call(BestandstypesTableSeeder::class);
        $this->call(MappenTableSeeder::class);
        $this->call(BestandenTableSeeder::class);
        $this->call(OndertitelsTableSeeder::class);
    }
}
