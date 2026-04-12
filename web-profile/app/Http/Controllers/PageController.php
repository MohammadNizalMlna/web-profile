<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }
    public function project()
{
    return view('pages.project');
}

public function projectDetail($slug)
{
    $projects = [

        'perpustakaan' => [
            'title' => 'Library Management System',
            'image' => 'perpus.png',
            'tech'  => 'Java • MySQL • JDBC',
            'desc'  => 'Sistem manajemen perpustakaan sederhana menggunakan bahasa pemrograman JAVA.',
            'fitur' => [
                'Fitur login',
                'CRUD manajeman Buku',
                'Peminjaman',
                'Pengembalian',
                'Search Buku',
                'Lihat Riwayat'
            ],
            'learn' => 'Belajar OOP, database integration, clean architecture.'
        ],
        'jalan2kuy' => [
            'title' => 'Jalan2Kuy.id',
            'image' => 'jalan2kuy.id.png',
            'tech'  => 'Laravel • MySQL • PHP • CSS • Bootstrap',
            'desc'  => 'Website rekomendasi wisata dan event di tiap destinasi wisata yang ada di Indonesia, dengan tampilan UI yang friendly dan responsif.',
            
            'fitur' => [
                'Fitur Login',
                'Search Destinasi',
                'Lihat Destinasi',
                'Lihat Event',
                'Lihat galery',
                'CRUD Destinasi',
                'CRUD Event'
            ],

            'learn' => 'Belajar frontend development, UI design, responsive layout, dan teamwork project.'
],

    ];

    if(!isset($projects[$slug])){
        abort(404);
    }

    return view('pages.project-detail', [
        'project' => $projects[$slug]
    ]);
}

    public function contact() {
        return view('pages.contact');
    }
}