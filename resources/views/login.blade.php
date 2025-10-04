<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Gaji DPR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title text-center mb-4">Login</h4>

            @if(session('error'))
              <div class="alert alert-danger text-center">
                {{ session('error') }}
              </div>
            @endif

            <form method="POST" action="/login">
              @csrf
              <div class="mb-3">
                <label for="id" class="form-label">Username</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan username" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Masuk</button>
              </div>
            </form>

          </div>
        </div>
        <p class="text-center mt-3 text-muted small">
          © {{ date('Y') }} Aplikasi Transparansi Gaji DPR
        </p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
