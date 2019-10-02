<?php

use Illuminate\Database\Seeder;

class Comic_ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comic_applications')->insert([
            [
                'comic_id'        => '1',
                'application_id'  => '1',
            ],
            [
                'comic_id'        => '2',
                'application_id'  => '1',
            ],
            [
                'comic_id'        => '3',
                'application_id'  => '2',
            ],
          ]);
    }
}
