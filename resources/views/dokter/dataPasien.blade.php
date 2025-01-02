<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>DATA PASIEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/dokter/assets/css/dokter.css">
</head>
<body>
    <div class="sidebar">
        <h2><a href="/dokter/dataPasien.html" class="text-decoration-none text-white">HealthyCare</a></h2>
        <div class="menu-item">
            <a class="menu-link" href="/dokter/nomorAntrian.html">DATA PASIEN</a>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="/dokter/dokter.html">LOGOUT</a>
        </div>
    </div>

    <div class="content">
        <div class="table-container">
        <table class="table">
        <thead>
        <tr>
            <th>ID Pasien</th>
            <th>Poliklinik</th>
            <th>Nama</th>
            <th>Tanggal Kunjungan</th>
            <th>No Antrian</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataPasien as $pasien)
        <tr>
            <td>{{ $pasien->id_pasien }}</td>
            <td>{{ $pasien->poliklinik }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->tanggal_kunjungan }}</td>
            <td>{{ $pasien->no_antrian }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>