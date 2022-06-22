<?php


namespace Booni3\GFS;


use Spatie\SimpleExcel\SimpleExcelReader;

class GetServices
{
    public static function sandbox(): array
    {
        return SimpleExcelReader::create(base_path('app/Support/Library/GFS/Services/sandbox.csv'))->getRows()->all();
    }

    public static function production(): array
    {
        return SimpleExcelReader::create(base_path('app/Support/Library/GFS/Services/production.csv'))->getRows()->all();
    }
}