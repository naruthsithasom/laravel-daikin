<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class Lost implements FromView,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function view(): View
    {
        return view('backend.report.Lost', [
            'data' => $this->data['data'],
            'late' => $this->data['day'],
            'paid' => $this->data['paid']
        ]);
    }
}
