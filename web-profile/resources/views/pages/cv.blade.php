@extends('layout.main')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/cv.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="cv-page">

    <div class="cv-container">

        <!-- HEADER -->
        <div class="cv-header">
            <div class="row align-items-center g-3">

                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/profil.jpg') }}" class="profile-img" alt="Foto Profil">
                </div>

                <div class="col-md-10 text-center text-md-start">
                    <h1 class="cv-name">MOHAMMAD NIZAL MAULANA</h1>
                    <p class="mb-0 text-light">
                        Mahasiswa Informatika | Penggemar Teknologi | Pendukung Chelsea
                    </p>
                </div>

            </div>
        </div>

        <!-- BUTTON -->
        <div class="text-end mt-3 cv-action">
            <button onclick="window.print()" class="btn btn-success btn-sm">
                <i class="bi bi-download"></i> Download PDF
            </button>
        </div>
        <!-- CONTENT -->
        <div class="row mt-4 g-4">
            <!-- LEFT -->
            <div class="col-md-4 left-column">
                <!-- CONTACT -->
                <div class="mb-4">
                    <div class="section-title">CONTACT</div>
                    <p>
                        <i class="bi bi-telephone-fill me-2"></i>
                        +62 814-7662-6723
                    </p>
                    <p>
                        <i class="bi bi-envelope-fill me-2"></i>
                        koiyura51@gmail.com
                    </p>
                    <p>
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Slawi, Tegal, Jawa Tengah
                    </p>
                    <p>
                        <i class="bi bi-github me-2"></i>
                        <a href="https://github.com/MohammadNizalMlna" target="_blank">
                            Nizal Maulana
                        </a>
                    </p>
                </div>
                <!-- EDUCATION -->
                <div class="mb-4">
                    <div class="section-title">PENDIDIKAN</div>
                    <p>
                        <strong>Telkom University Purwokerto</strong><br>
                        Teknik Informatika<br>
                        2023 - Sekarang
                    </p>
                    <p>
                        <strong>SMA Negeri 2 Slawi</strong><br>
                        Matematika dan IPA(MIPA)<br>
                        2020 - 2023
                    </p>
                </div>
                <!-- SKILLS -->
                <div>
                    <div class="section-title">SKILLS</div>
                    <ul>
                        <li>HTML, CSS, JavaScript</li>
                        <li>Microsoft Office</li>
                        <li>Golang</li>
                        <li>Leadership</li>
                        <li>Python</li>
                        <li>Networking Basic</li>
                    </ul>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="col-md-8 right-column">
                <!-- PROFILE -->
                <div class="mb-4">
                    <div class="section-title">PROFIL</div>
                    <p>
                        Mahasiswa aktif Teknik Informatika di Telkom University Purwokerto yang memiliki minat besar dalam pengembangan dan pembuatan web. Berpengalaman dalam membangun aplikasi web menggunakan Java EE dan Laravel, serta memahami pengelolaan basis data melalui JDBC dan MySQL. Memiliki kemampuan komunikasi dan manajemen risiko yang terasah melalui pengalaman kepanitiaan sebagai divisi keamanan di lingkungan kampus. Saat ini mencari peluang untuk menerapkan keterampilan teknis dan berpikir kritis dalam mengolah data guna mendukung pengambilan keputusan yang strategis
                    </p>
                </div>
                <!-- EXPERIENCE -->
                <div class="mb-4">
                    <div class="section-title">PENGALAMAN KEPANITIAAN</div>
                    <p>
                        <strong>SREFEST - Staff divisi keamanan</strong> (2025)
                    </p>
                    <ul>
                        <li>Menyusun dan mengimplementasikan SOP (Standard Operating Procedure) pengawasan pintu masuk dan keluar guna memitigasi risiko keamanan serta kerumunan</li>
                        <li>Melakukan pengawasan aset dan logistik penting kepanitiaan untuk mencegah kehilangan atau kerusakan selama rangkaian kegiatan berlangsung.</li>
                        <li>Bekerja sama dengan divisi lain dalam mengatur alur mobilisasi massa agar jadwal acara tetap berjalan tepat waktu sesuai rundown.</li>
                        <li>Menangani dan menyelesaikan kendala tak terduga di lapangan secara cepat dan komunikatif melalui koordinasi tim internal maupun pihak eksternal.</li>
                        <li>Memantau kepadatan arus pengunjung secara real-time untuk memberikan saran pengalihan alur massa kepada koordinator lapangan jika terjadi penumpukan.</li>
                    </ul>
                </div>
                <!-- PROJECT -->
                <div>
                    <div class="section-title">PROJEK KULIAH</div>
                    <p><strong>Jalan2kuy.id | FrontEnd </strong> (2025)</p>
                    <ul>
                        <li>Mengembangkan arsitektur antarmuka modular menggunakan Laravel Blade Templating dengan teknik "include" untuk komponen navbar dan footer guna memastikan konsistensi desain serta kemudahan pemeliharaan kode.</li>
                        <li>Mengimplementasikan navigasi responsif dan estetis pada navbar menggunakan teknik CSS Flexbox serta media queries, memastikan fungsionalitas menu tetap optimal di berbagai ukuran layar (mobile-first design).</li>
                        <li>Mengintegrasikan fitur interaksi dinamis seperti form pencarian berbasis metode GET dan sistem notifikasi status (session alerts) untuk meningkatkan pengalaman dan kemudahan navigasi pengguna.</li>
                        <li>Mengelola alur data dari Backend ke View dengan memanfaatkan Controller dan pengiriman variabel ke dalam file Blade secara efisien.</li>
                        <li>Mengembangkan desain responsif dengan integrasi Bootstrap sehingga website dapat diakses dengan nyaman melalui berbagai perangkat (mobile, tablet, desktop).</li>
                        <li>Berkolaborasi dalam tim menggunakan Git/GitHub untuk proses manajemen kode, serta memastikan integrasi antara logika database dan tampilan berjalan tanpa kendala.</li>
                    </ul>
                    <p><strong>INFOLIB | Aplikasi Perpustakaan Sederhana</strong> (2024)</p>
                    <ul>
                        <li>Mengembangkan arsitektur Backend berbasis Java Servlet dengan pola desain Model-View-Controller (MVC) untuk memastikan pemisahan logika bisnis dan tampilan yang terstruktur.</li>
                        <li>Membangun Central Controller (Front Controller) yang bertugas mengelola seluruh arus permintaan (request) aplikasi secara terpusat melalui mapping URL yang dinamis.</li>
                        <li>Mengimplementasikan Database Helper dengan koneksi JDBC (MySQL) untuk mendukung operasi CRUD data secara sinkron dan aman di sisi server.</li>
                        <li>Mengelola konfigurasi aplikasi secara eksternal menggunakan file properti guna meningkatkan fleksibilitas sistem saat melakukan perubahan class action tanpa mengubah kode utama.</li>
                        <li>Menyusun logika routing otomatis yang menghubungkan request pengguna ke berbagai action interface untuk kemudian diarahkan kembali ke halaman JSP yang sesuai di direktori WEB-INF.</li>
                        <li>Mengatur manajemen sesi pengguna melalui konfigurasi web.xml untuk memastikan keamanan akses dan kendali durasi login pada sistem aplikasi web.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection