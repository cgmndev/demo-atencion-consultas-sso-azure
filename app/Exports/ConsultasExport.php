<?php

namespace App\Exports;

use App\Models\Consulta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ConsultasExport implements ShouldAutoSize, FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Consulta::select('id', 'titulo', 'mensaje')->get();
    }

}
