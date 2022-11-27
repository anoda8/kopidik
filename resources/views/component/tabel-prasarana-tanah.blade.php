<div>
    {{-- Do your work, then step back. --}}
    <h4>Prasarana Tanah</h4>
    {{ $tanah->links() }}
    <div class="table-responsive">
        <table class="table table-striped table-condensed table-bordered">
            <thead class="thead-inverse">
                <tr class="bg-dark">
                    <th class="text-center align-middle">No</th>
                    <th class="text-center align-middle">Nama</th>
                    <th class="text-center align-middle">Nomor Sertifikat</th>
                    <th class="text-center align-middle">Panjang</th>
                    <th class="text-center align-middle">Lebar</th>
                    <th class="text-center align-middle">Luas Lahan Tersedia</th>
                    <th class="text-center align-middle">Kepemilikan</th>
                    <th class="text-center align-middle">Jumlah Bangunan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tanah as $index => $tnh)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $tnh->nama }}</td>
                        <td class="text-center">{{ $tnh->no_sertifikat_tanah }}</td>
                        <td class="text-center">{{ $tnh->panjang }}</td>
                        <td class="text-center">{{ $tnh->lebar }}</td>
                        <td class="text-center">{{ $tnh->luas_lahan_tersedia }}</td>
                        <td class="text-center">{{ $tnh->kepemilikan_sarpras }}</td>
                        <td class="text-center">{{ $tnh->jumlah_bangunan }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
