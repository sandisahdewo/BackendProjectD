<?php

namespace App\Exports;

use App\Models\PitstopSarana;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class PitstopSaranaExport implements FromView, ShouldAutoSize
{
    use Exportable;

    protected $id;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        // $pitstopSarana = PitstopSarana::with('pitstopSaranaDetail', 'pitstopSaranaDetail.unit')
        //                               ->find($this->id);
        $pitstopSarana = $this->data;

        return view('excel.pitstop-sarana.report', compact('pitstopSarana'));
    }
    
    // public function registerEvents() : Array
    // {
    //     return [
    //         AfterSheet::class => function(AfterSheet $event) {
    //             $event->sheet->getDelegate()->getStyle('A5:G5')->setValignment('center');
    //         } 
    //     ];
    // }
}
