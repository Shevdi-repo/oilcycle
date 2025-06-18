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
        $data = [
            'title' => 'Dashboard Pemasok'
        ];

        // ================================================================
        // TAMBAHKAN BLOK INI
        // Siapkan data lokasi untuk peta. Nantinya data ini bisa diambil
        // dari database berdasarkan user yang sedang login.
        $data['markers'] = [
            [
                'lat'   => -7.7592,
                'lng'   => 110.4087,
                'title' => 'Pengepul hallo'
                'desk'
            ],
            [
                'lat'   => -7.8210,
                'lng'   => 110.3722,
                'title' => 'Pengepul Bantul'
            ],
            [
                'lat'   => -7.7973,
                'lng'   => 110.3687,
                'title' => 'Titik Kumpul Pusat'
            ]
        ];
        // ================================================================

        // Kirim semua data ke view dashboard
        return view('dashboard', $data);
    }
}