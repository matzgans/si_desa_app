<?php

namespace App\Exports;

use App\Models\Resident;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ResidentExport implements FromCollection, WithHeadings, WithTitle
{
    /**
     * Mengembalikan data koleksi untuk diekspor.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Resident::all();
    }

    /**
     * Menambahkan judul kolom untuk file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Age',
            'Address',
            'Created At',
            'Updated At',
        ];
    }

    /**
     * Menambahkan judul untuk sheet Excel.
     *
     * @return string
     */
    public function title(): string
    {
        return 'Residents Data';
    }
}
