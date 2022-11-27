<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h4>Prasarana bangunan</h4>
    {{ $bangunan->links('livewire::bootstrap') }}
    <div class="table-responsive">
    <table class="table table-striped table-condensed table-bordered">
        <thead>
            <tr class="bg-dark">
                <th class="text-center align-middle">No</th>
                <th class="text-center align-middle">Nama</th>
                <th class="text-center align-middle">Panjang</th>
                <th class="text-center align-middle">Lebar</th>
                <th class="text-center align-middle">Luas Tapak Bangunan</th>
                <th class="text-center align-middle">Jumlah Lantai</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($bangunan as $index => $bgn)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $bgn->nama }}</td>
                    <td class="text-center">{{ $bgn->panjang }}</td>
                    <td class="text-center">{{ $bgn->lebar }}</td>
                    <td class="text-center">{{ $bgn->luas_tapak_bangunan }}</td>
                    <td class="text-center">{{ $bgn->jml_lantai }}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
    </div>
</div>
