<?php

namespace App\Exports;

use App\Khademyar;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class KhademyarExport implements FromQuery
{
    use Exportable;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function query()
    {
        return Khademyar::whereIn('codemsr' , $this->data);
    }

   /**
    * 
    */

    // public function collection()
    // {
    //     return Khademyar::all();

    // }
}
