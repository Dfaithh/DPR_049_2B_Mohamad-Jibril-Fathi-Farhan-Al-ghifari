<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h3 class="mb-4">Tambah Anggota DPR</h3>

  <form method="POST" action="{{ route('anggota.store') }}">
    @csrf

    <div class="mb-3">
      <label class="form-label">ID Anggota</label>
      <input type="text" name="id_anggota" class="form-control" required>
    </div>

    <div class="row">
      <div class="col-md-3 mb-3">
        <label class="form-label">Gelar Depan</label>
        <input type="text" name="gelar_depan" class="form-control">
      </div>
      <div class="col-md-3 mb-3">
        <label class="form-label">Nama Depan</label>
        <input type="text" name="nama_depan" class="form-control" required>
      </div>
      <div class="col-md-3 mb-3">
        <label class="form-label">Nama Belakang</label>
        <input type="text" name="nama_belakang" class="form-control">
      </div>
      <div class="col-md-3 mb-3">
        <label class="form-label">Gelar Belakang</label>
        <input type="text" name="gelar_belakang" class="form-control">
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Jabatan</label>
      <select name="jabatan" class="form-select" required>
        <option value="">-- Pilih Jabatan --</option>
        <option value="Ketua">Ketua</option>
        <option value="Wakil Ketua">Wakil Ketua</option>
        <option value="Anggota">Anggota</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Status Pernikahan</label>
      <select name="status_pernikahan" class="form-select" required>
        <option value="">-- Pilih Status --</option>
        <option value="Kawin">Kawin</option>
        <option value="Belum Kawin">Belum Kawin</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('admin.anggota.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>

</body>
</html>
