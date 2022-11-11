<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <title>Download Daftar Nama</title>
</head>
<body>
    <div class="container mt-5">
        <center><h3>Download Daftar Nama</h3></center>
        <table class="table table-striped table-condensed table-bordered">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>L/P</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($listNama as $key => $siswa)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</body>
</html>
