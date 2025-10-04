<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota DPR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Anggota DPR</h2>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Status Pernikahan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $a)
                <tr>
                    <td>{{ $a->id_anggota }}</td>
                    <td>{{ $a->gelar_depan }} {{ $a->nama_depan }} {{ $a->nama_belakang }}{{ $a->gelar_belakang }}</td>
                    <td>{{ $a->jabatan }}</td>
                    <td>{{ $a->status_pernikahan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/admin" class="btn btn-primary">Kembali ke Dashborad</a>
    </div>
    
</body>
</html>
