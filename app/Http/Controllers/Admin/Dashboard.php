<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataPesertaDidik;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $serdik = ['jum_serdik' => $this->counterSerDik()];
        return view('admin.dashboard', $serdik);
    }

    public function counterSerDik()
    {
        return DataPesertaDidik::get()->count();
    }
}
