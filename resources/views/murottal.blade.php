@extends('main')

@section('title', 'Murottal-app | Playlist')

@section('content')

@include('layouts.navbar')

<section id="playlist">
    <div class="container">
        <div class="row">
            @foreach ($playing as $item)
            <div class="col-md-4 col-sm-1 mb-3">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $item['asma'] }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted text-center">{{ $item['nama'] }}</h6>
                        <p class="card-text text-center">{{ $item['ayat'] }} ayat | {{ $item['type'] }}</p>
                        <div class="text-center audio">
                            <audio controls>
                                <source src="horse.ogg" type="audio/ogg">
                                <source src="{{ $item['audio'] }}" type="audio/mpeg">
                                Your browser does not support the audio tag.
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

@endsection