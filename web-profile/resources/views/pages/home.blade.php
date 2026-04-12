@extends('layout.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<!-- HERO -->
<section id="home" class="hero">
    <div class="hero-left">
        <h1>HALOOOOOOO</h1>
        <p>
            Holaa! Selamat datang di website profil saya.
        </p>
        <div class="hero-buttons">
            <a href="/contact" class="btn-green">
                Contact Me
            </a>
            <a href="https://github.com/MohammadNizalMlna"
                target="_blank"
                class="btn-dark">
                GitHub
            </a>
            <a href="/project" class="btn-red">
                View Project
            </a>
        </div>
    </div>
    <div class="hero-right">
        <div class="photo-box">
            <img src="{{ asset('assets/nizal.jpeg') }}" alt="Profile">
        </div>
    </div>
</section>


@endsection