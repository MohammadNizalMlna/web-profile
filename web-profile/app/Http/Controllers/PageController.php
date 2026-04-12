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
            'desc'  => 'Sistem manajemen perpustakaan berbasis Java.',
            'features' => [
                'CRUD Data Buku',
                'CRUD Anggota',
                'Peminjaman',
                'Pengembalian',
                'Search Buku'
            ],
            'learn' => 'Belajar OOP, database integration, clean architecture.'
        ],
        'jalan2kuy' => [
            'title' => 'Jalan2Kuy.id',
            'image' => 'jalan2kuy.png',
            'tech'  => 'Laravel',
            'desc'  => 'Website wisata dan rekomendasi perjalanan dengan tampilan modern dan responsive.',
            
            'features' => [
                'Landing Page Responsive',
                'Informasi Destinasi',
                'UI Modern',
                'Navigasi Interaktif',
                'Optimasi User Experience'
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