@extends('layouts.main')

@section('content')
<section class="gallery-section">
    <div class="gallery-intro">
        <span class="sub-title">COLLECTED EVIDENCE // 2024-2026</span>
        <h1>VISUAL<br>LOGS</h1>
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="{{ asset('images/gallery/sql-query.jpg') }}" alt="SQL Analysis">
            <div class="item-info">
                <span>01</span>
                <h3>DATABASE ARCHITECTURE</h3>
            </div>
        </div>

        <div class="gallery-item">
            <img src="{{ asset('images/gallery/gns3-setup.jpg') }}" alt="Network Simulation">
            <div class="item-info">
                <span>02</span>
                <h3>NETWORK TOPOLOGY // GNS3</h3>
            </div>
        </div>

        <div class="gallery-item large">
            <img src="{{ asset('images/gallery/thesis-progress.jpg') }}" alt="Chapter 5">
            <div class="item-info">
                <span>03</span>
                <h3>TECHNICAL REPORT // BAB V</h3>
            </div>
        </div>
    </div>
</section>
@endsection