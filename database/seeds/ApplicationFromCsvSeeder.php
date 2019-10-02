<?php

class ApplicationFromCsvSeeder extends CSVSeeder
{
    protected $table = 'applications';

    protected $csvFile = 'applications';

    protected $isTest = false;

    protected $isDisabled = false;
}
