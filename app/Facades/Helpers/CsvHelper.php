<?php
namespace App\Facades\Helpers;

use Illuminate\Support\Facades\Facade;

class CsvHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Helpers\CsvHelperInterface::class;
    }
}
