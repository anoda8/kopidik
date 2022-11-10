<?php

namespace App\Http\Controllers\Admin\Kesiswaan;

use App\Models\DataAnggotaRombel;
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
    public $urut = [];
    public $error_message = null;

    protected $listeners = ['openListSiswa'];

    public function mount()
    {
        
    }

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
        $list_nama = DataPesertaDidik::select(['nama', 'nipd', 'nisn', 'jenis_kelamin', 'rombongan_belajar_id'])
        ->where('rombongan_belajar_id', $rombelId)->orderBy('nama', 'ASC')
        ->get();
        $this->list_nama = $list_nama->toArray();
        $this->kelas_selected = $namaKelas;
        $this->urut = range(1, ($list_nama->count()));
        $this->dispatchBrowserEvent('openModalListSiswa');
    }

    public function simpanUrut()
    {
        $this->error_message = null;
        $this->procUrut();
        $newList = [];
        if(count($this->urut) > count(array_unique($this->urut))){
            $this->error_message = "Ada nomor urut yang sama, periksa kembali nomor urut.";
        }else{
            if((min($this->urut) < 1) || (max($this->urut) > count($this->urut))){
                $this->error_message = "Ada nomor urut diluar jumlah siswa.";
            }else{
                foreach($this->list_nama as $key => $listNama){
                    DataAnggotaRombel::where('anggota_rombel_id', $listNama['rombongan_belajar_id'])->update(['urut' => $this->urut[$key]]);
                }
            }
        }
    }

    public function procUrut()
    {
        $newUrut = [];
        foreach($this->urut as $urut){
            if($urut !== 0){
                $newUrut[] = (int)$urut;
            }
        }
        $this->urut = $newUrut;
    }
}
