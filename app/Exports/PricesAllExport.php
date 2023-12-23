<?php

namespace App\Exports;

use App\Models\Price;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PricesAllExport implements FromQuery, WithMapping, WithHeadings, WithChunkReading
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Price::query()->orderBy('created_at', 'desc');
    }

    public function headings(): array
    {
        // Define your headers
        return [
            'Naziv',
            'Link',
            'Prodajna cena',
            'Otkupna cena',
            'Datum'
        ];
    }

    /**
     * @param Price $price
     */
    public function map($price): array
    {
        return [
            $price->product->name,
            $price->product->url,
            $price->selling_price,
            $price->purchase_price,
            $price->created_at,
        ];
    }

    public function chunkSize(): int
    {
        return 1000; // Set your desired chunk size here
    }
}
