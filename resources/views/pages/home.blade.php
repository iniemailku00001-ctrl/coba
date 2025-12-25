@extends('layouts.app')

@section('title', 'HalfCodeId')

@section('content')
<header class="hero">
    <h1>HalfCodeId</h1>
    <p>Smart Works. Flexible Time. Real Impact.</p>
    <a href="#" class="btn-primary">Watch Trailer</a>

    <div class="baner">
        <img src="{{ asset('images/banner.png') }}" alt="HalfCodeId Banner">
    </div>
</header>

<section class="features" id="features">
    <h2 class="section-title">Why HalfCodeId?</h2>

    <div class="grid-container">
        <div class="grid-item large">
            <div>
                <h3>Cool Build</h3>
                <p>Delivering high-quality projects with creativity and style.</p>
            </div>
            <div class="placeholder-box"></div>
        </div>

        <div class="grid-item">
            <h3>Flexible Schedule</h3>
            <p>Work when it suits you—no strict 9-to-5 required.</p>
        </div>

        <div class="grid-item">
            <h3>Real Impact</h3>
            <p>Projects that make a difference, small or big.</p>
        </div>

        <div class="grid-item large">
            <h3>Smart Solutions</h3>
            <p>Efficient, clean, and modern approaches for every project.</p>
        </div>
    </div>

</section>
@endsection
