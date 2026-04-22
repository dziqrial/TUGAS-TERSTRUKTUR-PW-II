@extends('layouts.main')

@section('content')
<section class="hero">
    <div class="hero-text">
        <span class="sub-title">Informatics Engineering / Est. 2024</span>
        <h1>HIGH CORTISOL</h1>
        <p style="margin-bottom: 20px;">Driven by stress, fueled by caffeine. Turning high-pressure environments into robust digital architectures. This is the biological cost of innovation.</p>
        <a href="{{ url('/gallery') }}" class="btn-more">See More Stress &rarr;</a>
    </div>
    
    <div class="hero-image">
        <img src="{{ asset('images/statue.png') }}" alt="Statue" class="statue-red">
    </div>
</section>
@endsection