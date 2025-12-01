@extends('layouts.app')

@section('title', $project['title'] . ' | Case Study')

@section('content')
<section class="section">
    <div class="container portfolio-detail">
        <a href="{{ route('home') }}#portfolio" class="btn-text" style="margin-bottom: 20px; display:inline-block;">
            <i class="fas fa-arrow-left"></i> Back to Portfolio
        </a>

        <h1 class="portfolio-detail-title">{{ $project['title'] }}</h1>
        <p class="portfolio-detail-subtitle">{{ $project['subtitle'] }}</p>

        <div class="portfolio-detail-meta">
            <span><strong>Role:</strong> {{ $project['role'] }}</span>
            <span><strong>Sector:</strong> {{ $project['sector'] }}</span>
        </div>

        <div class="portfolio-detail-image">
            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
        </div>

        <div class="portfolio-detail-body">
            <h3>Challenges</h3>
            <p>{{ $project['challenges'] }}</p>

            <h3>Key Actions</h3>
            <ul>
                @foreach($project['actions'] as $action)
                    <li>{{ $action }}</li>
                @endforeach
            </ul>

            <h3>Impact</h3>
            <ul>
                @foreach($project['results'] as $result)
                    <li>{{ $result }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection
