<?php

namespace App\Http\Controllers\Admin;

use App\Models\DataPesertaDidik;
use Carbon\Carbon;
use Livewire\Component;

class StatistikPesertaDidik extends Component
{
    public $pesertaDidik = null;
    public $dataUsia = null;
    public $dataAgama = null;
    public $dataTingkat = null;

    public function mount()
    {
        $this->pesertaDidik = new DataPesertaDidik();
        $this->dataUsia = $this->dataUsia();
        $this->dataAgama = $this->dataAgama();
        $this->dataTingkat = $this->dataTingkat();
    }

    public function render()
    {
        return view('admin.statistik-peserta-didik', ['peserdik' => $this->pesertaDidik]);
    }

    public function dataUsia()
    {
        $kelompok = [
            'kurang6' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(6), Carbon::now()))->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(6), Carbon::now()))->get()->count()
            ],
            'dari6sampai12' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(12), Carbon::now()->subYear(6)))->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(12), Carbon::now()->subYear(6)))->get()->count()
            ],
            'dari13sampai15' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(15), Carbon::now()->subYear(13)))->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(15), Carbon::now()->subYear(13)))->get()->count()
            ],
            'dari16sampai20' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(20), Carbon::now()->subYear(16)))->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(20), Carbon::now()->subYear(16)))->get()->count()
            ],
            'lebih20' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(30), Carbon::now()->subYear(20)))->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->whereBetween('tanggal_lahir', array(Carbon::now()->subYear(30), Carbon::now()->subYear(20)))->get()->count()
            ],
        ];
        return $kelompok;
    }

    public function dataAgama()
    {
        $kelompok = [
            'islam' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('agama_id', 1)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('agama_id', 1)->get()->count()
            ],
            'kristen' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('agama_id', 2)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('agama_id', 2)->get()->count()
            ],
            'katholik' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('agama_id', 3)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('agama_id', 3)->get()->count()
            ],
            'hindu' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('agama_id', 4)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('agama_id', 4)->get()->count()
            ],
            'budha' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('agama_id', 5)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('agama_id', 5)->get()->count()
            ],
            'konghucu' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('agama_id', 6)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('agama_id', 6)->get()->count()
            ]
        ];

        return $kelompok;
    }

    public function dataTingkat()
    {
        $kelompok = [
            '10' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('tingkat_pendidikan_id', 10)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('tingkat_pendidikan_id', 10)->get()->count()
            ],
            '11' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('tingkat_pendidikan_id', 11)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('tingkat_pendidikan_id', 11)->get()->count()
            ],
            '12' => [
                'L' => $this->pesertaDidik->where('jenis_kelamin', 'L')->where('tingkat_pendidikan_id', 12)->get()->count(),
                'P' => $this->pesertaDidik->where('jenis_kelamin', 'P')->where('tingkat_pendidikan_id', 12)->get()->count()
            ]
        ];

        return $kelompok;
    }
}
