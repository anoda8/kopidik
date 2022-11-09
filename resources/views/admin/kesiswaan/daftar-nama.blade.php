<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container pt-3 pl-3">
        <div class="card">
            <div class="card-body">
                <h4>Data Kelas</h4>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-8">
                        {{ $kata_kunci == null ? $kelases->links('livewire::bootstrap') : "" }}
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" wire:model="kata_kunci" aria-describedby="helpId" placeholder="Pencarian">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Tingkat</th>
                            <th class="text-center">Jurusan</th>
                            <th>Kurikulum</th>
                            <th>Wali Kelas</th>
                            <th>Jml Siswa</th>
                            <th>Cetak</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelases as $index => $kelas)
                            <tr>
                                <td class="text-center">{{ $kata_kunci == null ? ((($kelases->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                <td class="text-center">{{ $kelas->nama }}</td>
                                <td class="text-center">{{ $kelas->tingkat_pendidikan_id_str }}</td>
                                <td class="text-center">{{ $kelas->jurusan_id_str }}</td>
                                <td>{{ $kelas->kurikulum_id_str }}</td>
                                <td>{{ $kelas->ptk_id_str }}</td>
                                <td class="text-center">{{ $kelas->anggota_rombel->count() }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary">
                                        <i class="fa fa-print"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
