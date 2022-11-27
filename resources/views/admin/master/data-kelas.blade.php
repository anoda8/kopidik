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
                        <tr class="bg-dark">
                            <th class="text-center align-middle">No</th>
                            <th class="text-center align-middle">Kurikulum</th>
                            <th class="text-center align-middle">Nama Kelas</th>
                            <th class="text-center align-middle">Tingkat</th>
                            <th class="text-center align-middle">Jurusan</th>
                            <th class="text-center align-middle">Wali Kelas</th>
                            <th class="text-center align-middle">Jml Siswa</th>
                            <th class="text-center align-middle">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelases as $index => $kelas)
                            <tr>
                                <td class="text-center">{{ $kata_kunci == null ? ((($kelases->currentPage() - 1) * $perpage) + $loop->iteration) : $loop->iteration }}</td>
                                <td>{{ $kelas->kurikulum_id_str }}</td>
                                <td class="text-center">{{ $kelas->nama }}</td>
                                <td class="text-center">{{ $kelas->tingkat_pendidikan_id_str }}</td>
                                <td>{{ $kelas->jurusan_id_str }}</td>
                                <td>{{ $kelas->ptk_id_str }}</td>
                                <td class="text-center">{{ $kelas->anggota_rombel->count() }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
