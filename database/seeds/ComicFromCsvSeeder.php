<?php
use Illuminate\Database\Seeder;

class ComicFromCsvSeeder extends CSVSeeder
{
    protected $table = 'comics';

    protected $csvFile = 'comics';

    protected $isTest = false;

    protected $isDisabled = false;
}
