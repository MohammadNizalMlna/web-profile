@extends('layout.main')

@section('content')

<section class="project-section">

<h1>My Projects</h1>

<div class="project-grid">
    <div class="project-card">
    <img src="{{ asset('assets/perpus.png') }}">
    <div class="project-content">
        <h3>INFOLIB | Aplikasi Perpustakaan Sederhana</h3>
        <p>
            INFOLIB adalah aplikasi berbasis desktop yang dikembangkan menggunakan bahasa pemrograman Java. Aplikasi ini dirancang untuk mendigitalisasi proses manajemen perpustakaan secara efisien, mulai dari pendataan buku hingga transaksi peminjaman.
        </p>
        <div class="project-buttons">
            <a href="/project/perpustakaan" class="btn-view">
                View Detail
            </a>
            <a href="https://github.com/MohammadNizalMlna/tugasBesar"
                target="_blank"
                class="btn-git">
                GitHub
            </a>
        </div>
    </div>
</div>

    <div class="project-card">
    <img src="{{ asset('assets/jalan2kuy.id.png') }}">
    <div class="project-content">
        <h3>Jalan2Kuy.id</h3>
        <p>
            Website rekomendasi wisata dengan beberapa kategori untuk merekomendasikan wisata wisata yang ada di Indonesia
        </p>
        <div class="project-buttons">
            <a href="/project/jalan2kuy" class="btn-view">
                View Detail
            </a>
            <a href="https://github.com/MohammadNizalMlna/jalan2kuy.id"
                target="_blank"
                class="btn-git">
                GitHub
            </a>
        </div>
    </div>

</div>

</div>

</section>

@endsection