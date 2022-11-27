<?php

namespace App\Http\Controllers\Component;

use App\Models\PrasaranaRuang;
use Livewire\Component;
use Livewire\WithPagination;

class TabelPrasaranaRuang extends Component
{
    use WithPagination;

    public $perpage = 10;

    public function render()
    {
        $ruangs = PrasaranaRuang::with('bangunan')->paginate($this->perpage);
        return view('component.tabel-prasarana-ruang', ['ruangs' => $ruangs]);
    }
}
