<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row p-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Peserta Didik Berdasarkan Jenis Kelamin</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div style="height: 300px;width: 300px;">
                            <canvas id="chartJenisKelamin"></canvas>

                        </div>
                    </div>
                    Laki-laki :<b>{{$peserdik->where('jenis_kelamin', 'L')->get()->count()}}</b><br/>
                    Perempuan :<b>{{$peserdik->where('jenis_kelamin', 'P')->get()->count()}} </b><br/>
                    Total : <b>{{$peserdik->get()->count()}}</b>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Peserta Didik Berdasarkan Tingkat</h4>
                </div>
                <div class="card-body">
                    <canvas id="chartTingkat"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Peserta Didik Berdasarkan Usia</h4>
                </div>
                <div class="card-body">
                    <canvas id="chartUsia"></canvas>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Peserta Didik Berdasarkan Agama</h4>
                </div>
                <div class="card-body">
                    <canvas id="chartAgama"></canvas>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
        const ctxJenisKelamin = document.getElementById('chartJenisKelamin');
        new Chart(ctxJenisKelamin, {
            type: 'pie',
            data: {
                labels: [
                    'Laki-Laki',
                    'Perempuan',
                ],
                datasets: [{
                    label: 'Berdasarkan Jenis Kelamin',
                    data: [{{$peserdik->where('jenis_kelamin', 'L')->get()->count()}}, {{$peserdik->where('jenis_kelamin', 'P')->get()->count()}}],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)',
                    ],
                    hoverOffset: 4
                }]
            }
        });

        const ctxUsia = document.getElementById('chartUsia');

        new Chart(ctxUsia, {
            type: 'bar',
            data: {
                labels: [
                    '< 6 tahun',
                    '6 - 12 tahun',
                    '13 - 15 tahun',
                    '16 - 20 tahun',
                    '> 20 tahun'
                ],
                datasets:[
                    {
                        label: 'Laki-laki',
                        data: [
                            {{ $dataUsia['kurang6']['L'] }},
                            {{ $dataUsia['dari6sampai12']['L'] }},
                            {{ $dataUsia['dari13sampai15']['L'] }},
                            {{ $dataUsia['dari16sampai20']['L'] }},
                            {{ $dataUsia['lebih20']['L'] }},
                        ],
                        backgroundColor: '#1e81b0'
                    },
                    {
                        label: 'Perempuan',
                        data: [
                            {{ $dataUsia['kurang6']['P'] }},
                            {{ $dataUsia['dari6sampai12']['P'] }},
                            {{ $dataUsia['dari13sampai15']['P'] }},
                            {{ $dataUsia['dari16sampai20']['P'] }},
                            {{ $dataUsia['lebih20']['P'] }},
                        ],
                        backgroundColor: '#873e23'
                    },
                ],
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Bar Chart'
                        }
                    }
                },
            }
        });

        const ctxAgama = document.getElementById('chartAgama');

        new Chart(ctxAgama, {
            type: 'bar',
            data: {
                labels: [
                    'Islam',
                    'Kristen',
                    'Katholik',
                    'Hindu',
                    'Budha',
                    'Konghucu',
                    'Lainnya',
                ],
                datasets:[
                    {
                        label: 'Laki-laki',
                        data: [
                            {{ $dataAgama['islam']['L'] }},
                            {{ $dataAgama['kristen']['L'] }},
                            {{ $dataAgama['katholik']['L'] }},
                            {{ $dataAgama['hindu']['L'] }},
                            {{ $dataAgama['budha']['L'] }},
                            {{ $dataAgama['konghucu']['L'] }},
                        ],
                        backgroundColor: '#1e81b0'
                    },
                    {
                        label: 'Perempuan',
                        data: [
                            {{ $dataAgama['islam']['P'] }},
                            {{ $dataAgama['kristen']['P'] }},
                            {{ $dataAgama['katholik']['P'] }},
                            {{ $dataAgama['hindu']['P'] }},
                            {{ $dataAgama['budha']['P'] }},
                            {{ $dataAgama['konghucu']['P'] }},
                        ],
                        backgroundColor: '#873e23'
                    },
                ],
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Bar Chart'
                        }
                    }
                },
            }
        });

        const ctxTingkat = document.getElementById('chartTingkat');

        new Chart(ctxTingkat, {
            type: 'bar',
            data: {
                labels: [
                    'Tingkat 10',
                    'Tingkat 11',
                    'Tingkat 12',
                ],
                datasets:[
                    {
                        label: 'Laki-laki',
                        data: [
                            {{ $dataTingkat['10']['L'] }},
                            {{ $dataTingkat['11']['L'] }},
                            {{ $dataTingkat['12']['L'] }},
                        ],
                        backgroundColor: '#1e81b0'
                    },
                    {
                        label: 'Perempuan',
                        data: [
                            {{ $dataTingkat['10']['P'] }},
                            {{ $dataTingkat['11']['P'] }},
                            {{ $dataTingkat['12']['P'] }},
                        ],
                        backgroundColor: '#873e23'
                    },
                ],
                options: {
                    responsive: true,
                    interaction: {
                        intersect: false,
                    },
                    scales: {
                        x: {
                            stacked: true,
                        },
                        y: {
                            stacked: true
                        }
                    }
                },
            }
        });
    </script>
    @endsection
</div>
