<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px;">

    <h2>Selamat Datang di Aplikasi Gaji DPR</h2>

    <p>Halo, {{ Auth::user()->nama ?? Auth::user()->name }}!</p>

    <p>Role: {{ Auth::user()->role }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>
