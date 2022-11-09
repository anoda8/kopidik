<?php

namespace App\Http\Controllers\Admin\Kesiswaan;

use App\Models\DataKelas;
use App\Models\DataPesertaDidik;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarNama extends Component
{
    use WithPagination;

    public $kata_kunci = null;
    public $perpage = 10;
    public $list_nama = [];
    public $kelas_selected = '';

    protected $listeners = ['openListSiswa'];

    public function render()
    {
        $kataKunci = "%".$this->kata_kunci."%";
        $kelases = DataKelas::with('anggota_rombel')->where(function($query) {
            $query->where('jenis_rombel_str', 'Kelas');
        })->where(function($query) use ($kataKunci){
            $query->where('nama', 'LIKE', $kataKunci)->orWhere('jurusan_id_str', 'LIKE', $kataKunci)
            ->orWhere('ptk_id_str', 'LIKE', $kataKunci);
        })->orderBy('nama', 'ASC');
        if($this->kata_kunci != null){
            $kelases = $kelases->get();
        }else{
            $kelases = $kelases->paginate($this->perpage);
        }
        return view('admin.kesiswaan.daftar-nama',['kelases' => $kelases]);
    }

    public function openListSiswa($rombelId, $namaKelas)
    {
        $this->list_nama = DataPesertaDidik::select(['nama', 'nipd', 'nisn', 'jenis_kelamin'])
        ->where('rombongan_belajar_id', $rombelId)->orderBy('nama', 'ASC')
        ->get()->toArray();
        $this->kelas_selected = $namaKelas;
        $this->dispatchBrowserEvent('openModalListSiswa');
    }
}
