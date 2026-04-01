<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Penting untuk Hashing
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Menampilkan daftar user online.
     */
    public function index()
    {
        return view('user.index', [
            'title' => 'User Management',
            'datas' => User::all()
        ]);
    }

    /**
     * Form tambah user.
     */
    public function create()
    {
        return view('user.create', [
            'title' => 'Tambah User Baru'
        ]);
    }

    /**
     * Simpan user baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Cek apakah email sudah ada (agar tidak error duplicate entry)
        $cekEmail = DB::table('users')->where('email', $request->email)->exists();

        if ($cekEmail) {
            return redirect()->route('user.create')
                ->with('duplikat', 'Email ' . $request->email . ' sudah terdaftar di sistem!')
                ->withInput();
        }

        // 2. Simpan data dengan Password Hashing
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // Password diubah jadi hash di sini
            'role'     => $request->role, // 'admin' atau 'user'
        ]);

        return redirect()->route('user.index')
            ->with('simpan', 'User ' . $request->name . ' berhasil didaftarkan sebagai ' . $request->role);
    }

    /**
     * Form edit user.
     */
    public function edit(string $id)
    {
        return view('user.edit', [
            'title' => 'Edit User',
            'data'  => User::findOrFail($id)
        ]);
    }

    /**
     * Update data user.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        
        // Data dasar yang diupdate
        $data = [
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
        ];

        // LOGIKA PASSWORD: Jika kolom password diisi, maka ganti password lama
        // Jika kosong, pakai password yang sudah ada di database
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('user.index')
            ->with('update', 'Data user ' . $user->name . ' berhasil diperbarui!');
    }

    /**
     * Hapus user.
     */
    public function destroy(string $id)
    {
        // Proteksi: Jangan biarkan admin menghapus dirinya sendiri saat login
        if (auth()->id() == $id) {
            return redirect()->route('user.index')
                ->with('forbidden', 'Bahaya! Anda tidak bisa menghapus akun sendiri yang sedang digunakan.');
        }

        $user = User::findOrFail($id);
        $nama = $user->name;
        $user->delete();

        return redirect()->route('user.index')
            ->with('hapus', 'Akun ' . $nama . ' telah berhasil dihapus.');
    }
}