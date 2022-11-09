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
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Tingkat</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">Kurikulum</th>
                            <th class="text-center">Wali Kelas</th>
                            <th class="text-center">Jml Siswa</th>
                            <th class="text-center">Cetak</th>
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
                                <td class="text-center font-weight-bold" style="cursor: pointer;" wire:click="openListSiswa('{{ $kelas->rombongan_belajar_id }}', '{{ $kelas->nama }}')">

                                    <button type="button" class="btn btn-info btn-sm">{{ $kelas->anggota_rombel->count() }}</button>
                                </td>
                                <td class="text-center">
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

    <!-- Modal -->
    <div class="modal fade" id="modal-list-siswa" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Nama Siswa Kelas {{ $kelas_selected }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-condensed table-bordered">
                        <thead>
                            <tr class="bg-dark">
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NIS</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Urut</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($list_nama as $key => $listNama)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $listNama['nama'] }}</td>
                                        <td class="text-center">{{ $listNama['nipd'] }}</td>
                                        <td class="text-center">{{ $listNama['nisn'] }}</td>
                                        <td class="text-center">{{ $listNama['jenis_kelamin'] }}</td>
                                        <td>
                                            <input type="text" style="direction: rtl;" value="{{ $key + 1 }}" size="1" height="40" class="form-control input-sm" name="" id="" aria-describedby="helpId" placeholder="">
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
        window.addEventListener('openModalListSiswa', data => {
            $("#modal-list-siswa").modal({show:true});
        });
    </script>
    @endsection
</div>
