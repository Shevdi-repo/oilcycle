<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        // Pengecekan session di constructor
        // Jika 'isLoggedIn' tidak ada di session, maka arahkan ke halaman login
        if (!session()->get('isLoggedIn')) {
            // Gunakan return agar eksekusi berhenti di sini
            // dan langsung melakukan redirect
            header('Location: ' . base_url('/login'));
            exit();
        }
    }

    public function index()
    {
        // Jika user sudah login, tampilkan halaman dashboard
        return view('dashboard');
    }
}