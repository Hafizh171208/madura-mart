@extends('layout.main')

@section('content')
<h1>{{ $title }}</h1>

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama:</label><br>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Email:</label><br>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Password:</label><br>
        <input type="password" name="password" required>
    </div>
    <div>
        <label>Role:</label><br>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="courier">Kurir</option>
            <option value="customer">Customer</option>
            <option value="owner">Owner</option>
        </select>
    </div>
    <div>
        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea>
    </div>
    <div>
        <label>No Telpon:</label><br>
        <input type="text" name="no_telpon">
    </div>
    <br>
    <button type="submit">Simpan User</button>
</form>
@endsection