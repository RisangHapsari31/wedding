<?php

namespace App\Exports;

use App\Tamu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TamuExport implements FromCollection, WithHeadings
{
    public function headings():array{
        return[
            'id',
            'Nama',
            'Alamat',
            'Status'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tamu::all();
    }
}
