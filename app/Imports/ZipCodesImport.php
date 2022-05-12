<?php

namespace App\Imports;

ini_set('memory_limit','2096M');

use App\Imports\ZipCodesSheetImport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ZipCodesImport implements WithMultipleSheets
{
    use WithConditionalSheets;

    /**
    * @return void
    */
    public function conditionalSheets(): array
    {
        return [
            'Nota' => new ZipCodesSheetImport(),
            'Aguascalientes' => new ZipCodesSheetImport(),
            'Baja_California' => new ZipCodesSheetImport(),
            'Baja_California_Sur' => new ZipCodesSheetImport(),
            'Campeche' => new ZipCodesSheetImport(),
            'Coahuila_de_Zaragoza' => new ZipCodesSheetImport(),
            'Colima' => new ZipCodesSheetImport(),
            'Chiapas' => new ZipCodesSheetImport(),
            'Chihuahua' => new ZipCodesSheetImport(),
            'Distrito_Federal' => new ZipCodesSheetImport(),
            'Durango' => new ZipCodesSheetImport(),
            'Guanajuato' => new ZipCodesSheetImport(),
            'Guerrero' => new ZipCodesSheetImport(),
            'Hidalgo' => new ZipCodesSheetImport(),
            'Jalisco' => new ZipCodesSheetImport(),
            'México' => new ZipCodesSheetImport(),
            'Michoacán_de_Ocampo' => new ZipCodesSheetImport(),
            'Morelos' => new ZipCodesSheetImport(),
            'Nayarit' => new ZipCodesSheetImport(),
            'Nuevo_León' => new ZipCodesSheetImport(),
            'Oaxaca' => new ZipCodesSheetImport(),
            'Puebla' => new ZipCodesSheetImport(),
            'Querétaro' => new ZipCodesSheetImport(),
            'Quintana_Roo' => new ZipCodesSheetImport(),
            'San_Luis_Potosí' => new ZipCodesSheetImport(),
            'Sinaloa' => new ZipCodesSheetImport(),
            'Sonora' => new ZipCodesSheetImport(),
            'Tabasco' => new ZipCodesSheetImport(),
            'Tamaulipas' => new ZipCodesSheetImport(),
            'Tlaxcala' => new ZipCodesSheetImport(),
            'Veracruz_de_Ignacio_de_la_Llave' => new ZipCodesSheetImport(),
            'Yucatán' => new ZipCodesSheetImport(),
            'Zacatecas' => new ZipCodesSheetImport(),
        ];
    }
}
