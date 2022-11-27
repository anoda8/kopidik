<?php

namespace App\Http\Controllers\Component;

use App\Models\PrasaranaTanah;
use Livewire\Component;
use Livewire\WithPagination;

class TabelPrasaranaTanah extends Component
{
    use WithPagination;

    public function render()
    {
        $tanah = PrasaranaTanah::paginate(5);
        return view('component.tabel-prasarana-tanah', ['tanah' => $tanah]);
    }
}
