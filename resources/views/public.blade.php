<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Public - Gaji DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/public">DPR Transparency</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-5">
    <div class="text-center mb-4">
      <h2>Selamat Datang di Dashboard Public</h2>
      <p class="text-muted">Anda login sebagai masyarakat. Anda hanya bisa melihat data anggota DPR.</p>
    </div>

    <div class="row justify-content-center">
      // data anggota
      <div class="col-md-4">
        <div class="card shadow-sm border-0">
          <div class="card-body text-center">
            <h5 class="card-title">Data Anggota</h5>
            <p class="card-text text-muted">Lihat daftar anggota DPR beserta jabatannya.</p>
            <a href="{{ route('public.anggota.index') }}" class="btn btn-primary">📋 Lihat Data Anggota</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
