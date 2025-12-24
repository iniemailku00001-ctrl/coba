@extends('layouts.app')

@section('title', 'A1 Mini')

@section('content')
<header class="hero">
    <h1>A1 Mini</h1>
    <p>Big Features. Mini Size. Colorful Printing.</p>
    <a href="#" class="btn-primary">Watch Trailer</a>

    <div class="product-placeholder">
        [Image: Bambu Lab A1 Mini 3D Printer]
    </div>
</header>

<section class="features">
    <h2 class="section-title">Why A1 Mini?</h2>

    <div class="grid-container">
        <div class="grid-item large">
            <div>
                <h3>Multi-Color Printing</h3>
                <p>The AMS lite brings multi-color 3D printing to everyone.</p>
            </div>
            <div class="placeholder-box"></div>
        </div>

        <div class="grid-item">
            <h3>Full Auto Calibration</h3>
            <p>No manual leveling needed. Everything is automatic.</p>
        </div>

        <div class="grid-item">
            <h3>Active Motor Noise Cancellation</h3>
            <p>Print silently with intelligent motor tuning.</p>
        </div>

        <div class="grid-item large">
            <h3>High Speed Precision</h3>
            <p>Rigid frame, metal rails, sensors, and powerful MCU.</p>
        </div>
    </div>
</section>
@endsection
