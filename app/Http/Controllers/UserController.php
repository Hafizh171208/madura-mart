<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    
    public function index() {
        return view('user.index', [
            'title' => 'User Management',
            'datas' => User::all()
        ]);
    }

    public function create() {
        return view('user.create', ['title' => 'Tambah User']);
    }

    public function store(Request $request)
{
    // Validasi sederhana (opsional tapi bagus)
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => Hash::make($request->password), // Hashing otomatis di sini
        'role'      => $request->role,     // admin, courier, customer, atau owner
    ]);

    return redirect()->route('user.index')->with('simpan', 'User baru berhasil dibuat!');
}

    public function edit($id) {
        return view('user.edit', [
            'title' => 'Edit User',
            'data' => User::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        // Jika password diisi (ingin ganti password)
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        return redirect()->route('user.index')->with('update', 'Data user berhasil diperbarui!');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('hapus', 'User berhasil dihapus!');
    }
}