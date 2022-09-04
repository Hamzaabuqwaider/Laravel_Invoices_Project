<?php

namespace App\Exports;
use Maatwebsite\Excel\Facades\Excel;
use App\invoices;
use Maatwebsite\Excel\Concerns\FromCollection;



class InvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return invoices::all();
    }
}
