<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="pt-3">
        <div class="card {{ isset($results_counter['sekolah']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Sekolah</h4>
                        <p class="card-text">{{ $results_counter['sekolah'] ?? "0" }}{{ isset($results_counter['sekolah']) ? " data sekolah..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('sekolah')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['guru']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Guru</h4>
                        <p class="card-text">{{ $results_counter['guru'] ?? "0" }}{{ isset($results_counter['guru']) ? " data guru..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('guru')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['siswa']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Siswa</h4>
                        <p class="card-text">{{ $results_counter['siswa'] ?? "0" }}{{ isset($results_counter['siswa']) ? " data siswa..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('siswa')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-1">
        <div class="card {{ isset($results_counter['kelas']) ? 'bg-light' : 'bg-dark' }} text-left ml-3 mr-3 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Kelas</h4>
                        <p class="card-text">{{ $results_counter['kelas'] ?? "0" }}{{ isset($results_counter['kelas']) ? " data kelas..." : "" }}</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a name="" id="" class="btn btn-info mr-3" wire:click.prevent="cekData('kelas')" role="button">
                            <i class="fa fa-laptop"></i>&nbsp;
                            Cek Data
                        </a>
                        <a name="" id="" class="btn btn-primary" wire:click.prevent="import" role="button">
                            <i class="fas fa-download"></i>&nbsp;
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
