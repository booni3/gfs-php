<?php


namespace Booni3\GFS;


use Spatie\SimpleExcel\SimpleExcelReader;

class GetServices
{
    public static function sandbox(): array
    {
        return SimpleExcelReader::create(__DIR__.'/sandbox.csv')->getRows()->all();
    }

    public static function production(): array
    {
        return SimpleExcelReader::create(__DIR__.'/production.csv')->getRows()->all();
    }
}