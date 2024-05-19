<?php

namespace App\Exports;

use App\Models\Pesan;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPesan implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pesan::all();
    }
}
