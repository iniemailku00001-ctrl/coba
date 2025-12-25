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
<section class="projects" id="projects">
    <h2 class="section-title">Projects</h2>

    <div class="grid-container">
        @forelse ($projects as $project)
            <div class="grid-item">
                <div class="placeholder-box">
                    <img 
                        src="{{ asset('storage/' . $project->image) }}" 
                        alt="{{ $project->title }}"
                    >
                </div>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
            </div>
        @empty
            <p>Tidak ada project.</p>
        @endforelse
    </div>

</section>
<section class="about" id="about">
    <h2 class="section-title">About Us</h2>
    <p>HalfCodeId is a team of passionate developers committed to delivering top-notch software solutions. With a focus on quality, creativity, and customer satisfaction, we strive to exceed expectations in every project we undertake.</p>
</section>
<section class="contact" id="contact">
    <h2 class="section-title">Contact Us</h2>
    <p>Ready to take your project to the next level? Get in touch with us today!</p>
    <a href="#" class="btn-primary">Contact Us</a>
</section>
@endsection
