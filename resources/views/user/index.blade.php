@extends('layout.main') @section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->role }}</td>
                <td>
                    <a href="{{ route('user.edit', $row->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection