<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update user</title>
</head>
<body>
    <h5><a href="/">< Halaman Utama</a></h5>
    <h1>UPDATE USER</h1>
    <form method="POST" action="/tambah/{{$users->id}}/update">
    @method('put')
    @csrf

        <label for="name">Nama</label>
        <input id="name" type="text" name="name" value="{{ old('name', $users->name) }}" required autocomplete="name" autofocus placeholder="Masukkan nama anda">
        <br>

        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', $users->email) }}" required autocomplete="email" placeholder="Masukkan email">
        <br>

        <label for="password">Password</label>
        <input id="password" type="text" name="password" value="{{ old('password', $users->password) }}" required autocomplete="password" placeholder="Masukkan password">
        <br>

        <button type="submit">UPDATE USER</button>
    </form>
</body>
</html>