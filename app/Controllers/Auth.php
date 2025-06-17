<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel; // PENTING: Panggil UserModel Anda

class Auth extends BaseController
{
    /**
     * Menampilkan halaman registrasi.
     */
    public function register()
    {
        helper('url');
        return view('register');
    }

    /**
     * Memproses data pendaftaran dari form.
     */
    public function processRegister()
    {
        // 1. Aturan Validasi
        $rules = [
            'nama'       => 'required|min_length[3]',
            'nomorHp' => 'required|numeric|min_length[3]',
            'password'   => 'required|min_length[3]',
            'alamat'     => 'required|min_length[3]',
            'persetujuan'=> 'required',
        ];

        // 2. Lakukan Validasi
        if (!$this->validate($rules)) {
            // Jika validasi gagal, kembalikan ke form dengan error dan input lama
            return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
        }

        // 3. Jika Validasi Berhasil, siapkan data untuk disimpan
        $userModel = new UserModel();

        $data = [
            'username'   => $this->request->getPost('nama'), // Atau buat kolom 'nama'
            'nomorHp'    => $this->request->getPost('nomorHp'),
            'alamat'     => $this->request->getPost('alamat'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Enkripsi password!
        ];

        // 4. Simpan data ke database
        if ($userModel->save($data)) {
            // Jika berhasil, arahkan ke halaman login dengan pesan sukses
            return redirect()->to('/login')->with('success', 'Pendaftaran berhasil! Silakan masuk.');
        } else {
            // Jika gagal menyimpan karena alasan lain
            return redirect()->to('/register')->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    /**
     * Menampilkan halaman login.
     */
    public function login()
    {
        helper('url');
        return view('login');
    }
    public function processLogin()
    {
        // 1. Ambil data dari form
        $nomorhp = $this->request->getPost('nomorHp');
        $password = $this->request->getPost('password');

        // 2. Lakukan validasi
        $rules = [
            'nomorHp' => 'required',
            'password' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('/login')->withInput()->with('error', 'Nomor HP dan Password wajib diisi.');
        }

        // 3. Cari user di database berdasarkan nomor hp
        $userModel = new UserModel();
        $user = $userModel->where('nomorHp', $nomorhp)->first();

        // 4. Cek apakah user ditemukan dan passwordnya cocok
        if ($user && password_verify($password, $user['password'])) {
            // Jika cocok, buat session untuk user
            $sessionData = [
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'nomorhp'    => $user['nomorHp'],
                'isLoggedIn' => true,
            ];
            session()->set($sessionData);

            // Arahkan ke dashboard
            return redirect()->to('/dashboard');
        } else {
            // Jika tidak cocok, kembalikan ke halaman login dengan pesan error
            return redirect()->to('/login')->with('error', 'Nomor HP atau Password salah.');
        }
    }

    /**
     * Proses logout
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}