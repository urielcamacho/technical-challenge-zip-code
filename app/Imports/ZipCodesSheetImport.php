<?php

namespace App\Imports;

use App\Models\FederalEntity;
use App\Models\Municipality;
use App\Models\Settlement;
use App\Models\ZipCode;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ZipCodesSheetImport implements ToCollection, WithBatchInserts, WithChunkReading
{
    /**
    * @param Collection $rows
    *
    * @return void
    */
    public function collection(Collection $rows)
    {
        $rows = collect($rows)->slice(1)->toArray();

        foreach ($rows as $row) {
            $federalEntity = FederalEntity::firstOrCreate([
                'key' => $row[7],
                'name' => $row[4],
            ]);

            $municipality = Municipality::firstOrCreate([
                'key' => $row[11],
                'name' => $row[3],
            ]);

            ZipCode::firstOrCreate([
                'zip_code' => $row[0],
                'locality' => $row[5] ?? '',
                'federal_entity_id' => $federalEntity->id,
                'municipality_id' => $municipality->id,
            ])->settlements()->firstOrCreate([
                'key' => $row[12],
                'name' => $row[1],
                'zone_type' => $row[13],
                'settlement_type' => $row[2],
            ]);
        }
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
