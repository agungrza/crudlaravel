<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD</title>
</head>
<body>
    <h5><a href="/tambah">+TAMBAH USER</a></h5>
    <h1>LIST USER</h1>
    @foreach ($users as $user)
    <p>Nama = {{ $user->name }}</p>
    <p>Email = {{ $user->email }}</p>
    <p>Password = {{ $user->password }}</p>
    <p><a href="/tambah/{{$user->id}}/update">+ Update</a></p>
    <form action="/tambah/{{$user->id}}" method="POST">
        @method('delete')
        @csrf
        <button type="submit">- Delete</button>
    </form>
    <br>
    @endforeach
</body>
</html>