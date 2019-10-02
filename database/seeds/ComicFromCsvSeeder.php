<?php

class ComicFromCsvSeeder extends CSVSeeder
{
    protected $table = 'comics';

    protected $csvFile = 'comics';

    protected $isTest = false;

    protected $isDisabled = false;
}
