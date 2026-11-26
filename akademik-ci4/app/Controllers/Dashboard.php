<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $data = [
            'title' => 'Sistem Akademik',
            'cards' => [
                ['label' => 'Mahasiswa',   'jumlah' => $db->table('mahasiswa')->countAll()],
                ['label' => 'Dosen',       'jumlah' => $db->table('dosen')->countAll()],
                ['label' => 'Mata Kuliah', 'jumlah' => $db->table('mata_kuliah')->countAll()],
                ['label' => 'KRS',         'jumlah' => $db->table('krs')->countAll()],
            ],
        ];

        return view('dashboard', $data);
    }
}