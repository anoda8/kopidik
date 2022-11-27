<?php

namespace App\Http\Controllers\Component;

use App\Models\PrasaranaBangunan;
use Livewire\Component;
use Livewire\WithPagination;

class TabelPrasaranaBangunan extends Component
{
    use WithPagination;

    public function render()
    {
        $bangunan = PrasaranaBangunan::paginate(5);
        return view('component.tabel-prasarana-bangunan', ['bangunan' => $bangunan]);
    }
}
