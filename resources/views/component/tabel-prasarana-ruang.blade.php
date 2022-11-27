<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h4>Prasarana Ruang</h4>
    {{ $ruangs->links('livewire::bootstrap') }}
    <div class="table-responsive">
    <table class="table table-striped table-condensed table-bordered">
        <thead>
            <tr class="bg-dark">
                <th class="text-center align-middle">No</th>
                <th class="text-center align-middle">Nama Ruang</th>
                <th class="text-center align-middle">Jenis Prasarana</th>
                <th class="text-center align-middle">Kode Ruang</th>
                <th class="text-center align-middle">Panjang</th>
                <th class="text-center align-middle">Lebar</th>
                <th class="text-center align-middle">Lantai Ke</th>
                <th class="text-center align-middle">Nilai Kerusakan</th>
                <th class="text-center align-middle">Kriteria Kerusakan</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($ruangs as $index => $ruang)
                <tr>
                    <td class="text-center">{{ ((($ruangs->currentPage() - 1) * $perpage) + $loop->iteration) }}</td>
                    <td>{{ $ruang->nama_ruang }}</td>
                    <td>{{ $ruang->jenis_prasarana_id_str }}</td>
                    <td class="text-center">{{ $ruang->kode_ruang }}</td>
                    <td class="text-center">{{ $ruang->panjang }}</td>
                    <td class="text-center">{{ $ruang->lebar }}</td>
                    <td class="text-center">{{ $ruang->lantai_ke }}</td>
                    <td class="text-center">{{ $ruang->nilai_kerusakan }}</td>
                    <td class="text-center">{{ $ruang->kriteria_kerusakan }}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
