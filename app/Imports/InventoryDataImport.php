<?php

namespace App\Imports;

use App\Models\InventoryData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InventoryDataImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new InventoryData([
            'dataset_url' => $row['dataset_url'],
            'title' => $row['title'],
            'country' => $row['country'],
            'year' => $row['year'],
            'organization' => $row['organization'],
            'collection' => $row['collection'],
            'study_id' => $row['study_id'],
            'last_modified' => $row['last_modified'],
            'views' => $row['views'],
            'data_access' => $row['data_access'],
            'inventory_source' => $row['inventory_source'],
        ]);
    }
}
