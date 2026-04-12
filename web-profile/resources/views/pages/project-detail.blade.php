@extends('layout.main')

@section('content')

<section class="project-detail">

<div class="detail-hero">

    <img src="{{ asset('assets/' . $project['image']) }}">
    <div class="detail-info">
        <span class="detail-tag">
            {{ $project['tech'] }}
        </span>
        <h1>{{ $project['title'] }}</h1>
        <p>{{ $project['desc'] }}</p>
        <a href="/project" class="btn-view">
            Back
        </a>
    </div>
</div>

<div class="detail-box">
<h2>Fitur</h2>

<ul>
@foreach($project['fitur'] as $item)
<li>{{ $item }}</li>
@endforeach
</ul>

</div>

<div class="detail-box">

<h2>Apa yang saya pelajari dari project ini</h2>

<p>{{ $project['learn'] }}</p>

</div>

</section>

@endsection