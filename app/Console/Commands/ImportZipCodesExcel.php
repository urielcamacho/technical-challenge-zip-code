<?php

namespace App\Console\Commands;

use App\Imports\ZipCodesImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportZipCodesExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zipcodes:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import zip codes from an Excel file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $import = new ZipCodesImport();

        $import->onlySheets(
            'Aguascalientes',
            'Baja_California',
            'Baja_California_Sur',
            'Campeche',
            'Coahuila_de_Zaragoza',
            'Colima',
            'Chiapas',
            'Chihuahua',
            'Distrito_Federal',
            'Durango',
            'Guanajuato',
            'Guerrero',
            'Hidalgo',
            'Jalisco',
            'México',
            'Michoacán_de_Ocampo',
            'Morelos',
            'Nayarit',
            'Nuevo_León',
            'Oaxaca',
            'Puebla',
            'Querétaro',
            'Quintana_Roo',
            'San_Luis_Potosí',
            'Sinaloa',
            'Sonora',
            'Tabasco',
            'Tamaulipas',
            'Tlaxcala',
            'Veracruz_de_Ignacio_de_la_Llave',
            'Yucatán',
            'Zacatecas',
        );

        Excel::import($import, public_path() . '/CPdescarga.xls');

        return 0;
    }
}
