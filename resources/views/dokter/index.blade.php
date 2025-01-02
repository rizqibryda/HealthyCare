<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="table-responsive mt-5">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID Dokter</th>
                <th>Nama Lengkap</th>
                <th>Jenis Klinik</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokters as $dokter)
            <tr>
                <td>{{ $dokter->id_dokter }}</td>
                <td>{{ $dokter->nama_lengkap }}</td>
                <td>{{ $dokter->jenis_klinik }}</td>
                <td>{{ $dokter->alamat }}</td>
                <td>{{ $dokter->email }}</td>
                <td>
                    @if ($dokter->foto)
                        <img src="{{ asset('storage/'.$dokter->foto) }}" alt="Foto Dokter" width="50">
                    @else
                        Tidak Ada Foto
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
