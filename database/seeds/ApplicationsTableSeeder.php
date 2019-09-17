<?php

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            [
                'name' => 'マンガワン',
                'url'  => 'https://manga-one.com/',
            ],
            [
                'name' => 'LINEマンガ',
                'url'  => 'https://manga.line.me/',
            ],
          ]);
    }
}
