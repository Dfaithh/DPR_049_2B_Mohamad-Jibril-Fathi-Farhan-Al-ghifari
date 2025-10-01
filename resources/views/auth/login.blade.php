<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px;">

    <h2>Halaman Login</h2>

    {{-- pesan error --}}
    @if($errors->any())
        <p style="color:red">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div style="margin-bottom: 10px;">
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Masukkan email" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit">Login</button>
    </form>

</body>
</html>
