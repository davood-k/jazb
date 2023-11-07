<?php

namespace App\Exports;

use App\Khademyar;
use Maatwebsite\Excel\Concerns\FromCollection;

class KhademyarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Khademyar::all();
    }
}
